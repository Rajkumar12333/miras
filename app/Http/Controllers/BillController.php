<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\VisaPaymentMail;
use App\Models\Applicant;
use App\Models\Card;
use App\Models\Bill;
use App\Models\Country;
class BillController extends Controller
{
    public function add_page(Request $request){
        $cards = Card::orderBy('name', 'asc')->get();
        return view('invoice.add_bill_payment',compact('cards'));
    }
    public function featch_pass(Request $request){
        $id = $request->input('id');
        $data = Applicant::find($id);
        return response()->json($data);
    }
    public function fetchCountryData(Request $request)
    {
        $track_id = $request->input('pass');
        
        if($track_id){
            $countries = Applicant::where('passportno', $track_id)->get();
            // dd($countries);
            $options = '<option value="">None</option>';
            foreach ($countries as $country) {
                $options .= "<option value='".$country->country."'>".$country->country."</option>";
            }
            return response()->json($options);
        } else {
            return response()->json('<option value="">None</option>');
        }
    }
    public function store(Request $request){
        // dd($request->all());
        $applicant = Applicant::findOrFail($request->track_id);
        $bill = new Bill([
            'name' => $applicant->name,
            'track_id' => $request->track_id,
            'passportno' =>$request->passport_no,
            'country' => $request->country,
            'visafees' =>$request->visa_fees,
            'visa_method' =>$request->visa_method,
            'vfs_charge' =>$request->vfs_charge,
            'vfs_method'=>'0',
            'date' =>date('Y-m-d'),
            'recepno'=>$request->recepno,
            'staff_id'=>$request->staff_id,
            'app_id'=>$applicant->id,
            'app_email'=>$applicant->applicant_email,
            'created_on'=>now()
        ]);
        $bill->save();
        $country = Country::where('country', $request->country)->first();
        if (!$country) {
            return response()->json(['message' => 'Country not found'], 404);
        }

        $workDays = $country->no_of_workingdays;
        $startDate = Carbon::parse(date('Y/m/d'));
        $collectDate = $startDate->copy();

        // Loop to calculate collection date
        for ($i = 0; $i < $workDays; $i++) {
            $collectDate->addDay();
            if ($collectDate->isWeekend()) {
                $i--;
            }
        }

        // Update applicant data
        $applicant = Applicant::find($request->track_id);

        if (!$applicant) {
            return response()->json(['message' => 'Applicant not found'], 404);
        }

        $applicant->update([
            'subdate' =>date('Y/m/d'),
            'collectdate' => $collectDate->format('Y/m/d'),
            'appt_status' => 'SUBMITTED',
            'modifiedon' => Carbon::now(),
            'visaref' => $request->recepno,
        ]);


        $applicant_new = Applicant::select('branches.shortname as branch_code', 'branches.emailid as branch_mail', 'applicants.*')
        ->leftJoin('branches', 'branches.id', '=', 'applicants.branchid')
        ->where('applicants.id', $applicant->id)
        ->orderBy('applicants.modifiedon', 'desc')
        ->first();
        $details = [
            'name' => $applicant_new->name,
            'branch_code' => $applicant_new->branch_code,
            'id' => $applicant_new->id,
            'passportno' => $applicant_new->passportno,
            'dob' => $applicant_new->dob,
            'country' => $applicant_new->country,
            'company' =>$applicant_new->company,
            'visaref' => $applicant_new->visaref,
            'category' => $applicant_new->category,
            'rcddate' => $applicant_new->rcddate,
            'subdate' =>$applicant_new->subdate,
            'collectdate' => $applicant_new->collectdate,
            'doc' => $applicant_new->doc,
            'appt_status' => $applicant_new->appt_status,
           
        ];
    
        Mail::to('rajkumar2k21m@gmail.com')->send(new VisaPaymentMail($details));

        return redirect()->back()->with('success', 'Mail send successfully.');
    }
}

