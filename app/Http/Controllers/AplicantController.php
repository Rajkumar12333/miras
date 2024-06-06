<?php

namespace App\Http\Controllers;

use Endroid\QrCode\Builder\Builder;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Applicant;
use App\Models\Country;
use App\Models\Category;
use App\Models\Branch;
use App\Models\Agent;
use App\Models\Tbl_document;
use App\Models\Tp_file;
use App\Models\User;
class AplicantController extends Controller
{
    //checking purpose
    public function generateAndStore()
    {
        // Define the file path and name
        $filePath = 'qrcodes/';
        $fileName = Str::uuid().'.png';
        $fullPath = public_path($filePath . $fileName);

        // Ensure the directory exists
        if (!File::exists(public_path($filePath))) {
            File::makeDirectory(public_path($filePath), 0755, true);
        }

        // Generate the QR code with specific size
        $result = Builder::create()
            ->data('Welcome to Laravel QR Code Generator!')
            ->size(60)
            ->margin(0)  // Set margin to 0 to fit the exact size
            ->build();

        $result->saveToFile($fullPath);

        return response()->json(['message' => 'QR Code generated and stored successfully.', 'path' => $filePath . $fileName]);
    }
//checking purpose
    function __construct()
    {
        $this->middleware(['permission:applicant-list|applicant-create|applicant-edit|applicant-delete'], ['only' => ['visa_tracking']]);
        $this->middleware(['permission:applicant-create'], ['only' => ['add_page', 'add']]);
        $this->middleware(['permission:applicant-edit'], ['only' => ['edit_page', 'update']]);
        $this->middleware(['permission:applicant-delete'], ['only' => ['destroy']]);
    }
    public function filter(Request $request)
    {
        $Agent = Agent::orderBy('agtname', 'asc')->get();
        $Country=Country::all();
        $query = Applicant::query();

        // Define the fields to filter
        $fields = ['agtid', 'country', 'passportno', 'name'];

        // Loop through each field and apply the condition if the input is present
        foreach ($fields as $field) {
            $value = $request->input($field);
            if ($request->filled($field) && $value !== 'null') {
                $query->where($field, $value);
            }
        }
        if ($request->filled('id')) {
            $idValue = $request->input('id');

            // Extract numeric value using regular expression
            preg_match('/\d+/', $idValue, $matches);

            if (!empty($matches)) {
                $numericId = $matches[0];
                \Log::info("Filtering by id: $numericId");
                $query->where('id', $numericId);
            } else {
                \Log::info("No numeric id found in: $idValue");
            }
        }
        $query->orderBy('createdon', 'desc');
        $view = $query->get();
        return view('visa_tracking', compact('view','Agent','Country'));
    }
    public function visa_tracking(){
        ini_set('max_execution_time',3600);
        $Agent = Agent::orderBy('agtname', 'asc')->get();
        $Country=Country::all();
        $view = Applicant::orderBy('createdon', 'desc')->paginate(10);
    
        return view('visa_tracking',compact('view','Agent','Country'));
    }
    public function add_page(Request $request){
        $outstatid=User::where('status','1')->where('adminRight','2')->orderBy('name', 'asc')->get();
        $Country=Country::all();
        $Category=Category::all();
        $Branch=Branch::all();
        $outstation=Agent::where('outstation','1')->get();
    
        $Agent = Agent::orderBy('agtname', 'asc')->get();
    
        return view('add_applicant',compact('Country','Category','Branch','Agent','outstation'));
    }
    public function edit_page($id){
        $outstatid=User::where('status','1')->where('adminRight','2')->orderBy('name', 'asc')->get();
    
        $Country=Country::all();
        $Category=Category::all();
        $Branch=Branch::all();
        $Agent = Agent::orderBy('agtname', 'asc')->get();
        $edit = Applicant::findOrFail($id);
        $outstation=Agent::where('outstation','1')->get();
        $tp = Tp_file::where("track_id",$id)->first();
        // print_r($tp);die();
        return view('edit_applicant',compact('Country','Category','Branch','Agent','edit','outstation','tp'));
    }
    public function store(Request $request)
    {
        
        $documents = $request->input('document');
        $file = $request->file('tp_form');
        if(!empty($request->tp_form)){
        if ($file->isValid()) {
            $userId = Auth::user()->id;
            $fileExt = $file->getClientOriginalExtension();
            $randomNumber = Str::random(3);
            $newName = $userId . '_' . $randomNumber . '.' . $fileExt;

            // Move file to destination
            $file->move(public_path('androidapp/tp_files'), $newName);
        }
    }
        foreach ($documents as $document) {
            
      

        $applicant = new Applicant([
            'name' =>$document['name'],
            'passportno'  => $document['passportno'],
            'applicant_email'  => $request->applicant_email,
            'employeeno'  => $request->employeeno,
            'tavano'  => $request->tavano,
            'dob'  => $request->dob,
            'location'  => $request->location,
            'category'  => $request->category,
            'country'  => $request->country,
            'passportcopy'  => $request->passportcopy,
            'visacopy'  => $request->visacopy,
            'insurancecopy'  => $request->insurancecopy,
            'interviewslip'  => $request->interviewslip,
            // 'status'  => $request->status??0,
            'bill'  => '0',
            'appoint_date'  => $request->appoint_date,
            'rcddate'  => $request->rcddate,
            'subdate'  => $request->subdate,
            'collectdate'  => $request->collectdate,
            'sentdate'  => $request->sentdate,
            'senton'  => $request->senton,
            'appt_status'  => $request->appt_status,
            'del_status'  => $request->del_status,
            'doc'  => $request->doc,
            'createdon'  => now(),
            'modifiedon'  => now(),
            'createdby'  => Auth::user()->name,
            'agtid'  => $request->agtid,
            'cms_id'  => $request->cms_id,
            // 'branchid'  => $request->branchid,
            'outstatid'  => $request->outstatid,
            'referer'  => $request->referer,
            'company'  => $request->company,
            'visaref'  => $request->visaref,
            'dd'  => $request->dd1,
            'reason'  => $request->reason,
            'internal_reason'  => $request->internal_reason,
            // 'barcode'  => $request->barcode,
            'outstation'  => $request->outstation,
            'number'  => $request->number,
        ]);
        $applicant->save();

        $filePath = 'qrcode/uvs/';
        $fileName = Str::uuid().'.png';
        $fullPath = public_path($filePath . $fileName);

        // Ensure the directory exists
        if (!File::exists(public_path($filePath))) {
            File::makeDirectory(public_path($filePath), 0755, true);
        }
        $branchcode=Branch::find($request->location);
 $qrcontent=$branchcode->shortname.'-'.$applicant->id;
        // Generate the QR code with specific size
        $result = Builder::create()
            ->data($qrcontent)
            ->size(60)
            ->margin(0)  // Set margin to 0 to fit the exact size
            ->build();

        $result->saveToFile($fullPath);

        
        $qrcode = Applicant::findOrFail($applicant->id);
        $qrcode->update([
            'barcode' => $fullPath,
        ]);

        $tp = new Tp_file([
            'track_id' => $applicant->id,
            'staff_id' => $userId,
            'file_name' => "/androidapp/tp_files/".$newName,
            
        ]);
        $tp->save();
            
    
        $user = new Tbl_document([
            'app_id' =>$applicant->id,
            'app_name'  =>$document['name'],
            'passport'  => $request->passport,
            'passport_number'  =>  $document['passportno'],
            'passport_validity_date'  => $request->passport_validity_date,
            'photo'  => $request->photo,
            'count'  => $request->count,
            'visa_form'  => $request->visa_form,
            'declaration'  => $request->declaration,
            'health_declaration'  => $request->health_declaration,
            'VFS_declaration'  => $request->VFS_declaration,
            'covering_letter'  => $request->covering_letter,
            'covering_letter_from_date'  => $request->covering_letter_from_date,
            'covering_letter_to_date'  => $request->covering_letter_to_date,
            'invitation_letter'  => $request->invitation_letter,
            'invitation_letter_from_date'  => $request->invitation_letter_from_date,
            'invitation_letter_to_date'  => $request->invitation_letter_to_date,
            'personal_bank_statement'  => $request->personal_bank_statement,
            'pbs_given_date'  => $request->pbs_given_date,
            'personal_it_returns'  => $request->personal_it_returns,
            'pit_date'  => $request->pit_date,
            'company_bank_statement'  => $request->company_bank_statement,
            'cbs_date'  => $request->cbs_date,
            'company_it_returns'  => $request->company_it_returns,
            'cit_date'  => $request->cit_date,
            'payslip'  => $request->payslip,
            'payslip_type'  => $request->payslip_type,
            'ticket_reservation'  => $request->ticket_reservation,  
            'tr_fromdate'  => $request->tr_fromdate,
            'tr_todate'  => $request->tr_todate,
            'insurance_for_travel'  => $request->insurance_for_travel,
            'ift_fromdate'  => $request->ift_fromdate,
            'ift_todate'  => $request->ift_todate,
            'hotelbooking'  => $request->hotelbooking,
            'hb_fromdate'  => $request->hb_fromdate,
            'hb_todate'  => $request->hb_todate,
            'yellow_fever_card'  => $request->yellow_fever_card,
            'chamber_of_commerce'  => $request->chamber_of_commerce,
            'forex_receipt'  => $request->forex_receipt,
            'dd'  => $request->dd,
            'dd_date'  => $request->dd_date,
            'dd_number'  => $request->dd_number,
            'Addressproof'  => $request->Addressproof,
            'address_proof'  => $request->address_proof,
        
        ]);
        $user->save();
    }
    // 

        // Redirect back with success message
        return redirect()->back()->with('success', 'Document created successfully.');
    }
    public function update(Request $request,$id){
        $newName=null;
        $passName=null;
        $visaName=null;
        $insuranceName=null;
        $interviewName=null;

            if(!empty($request->file('tp_form'))){
                $file = $request->file('tp_form');
                if ($file->isValid()) {
                    $userId = Auth::user()->id;
                    $fileExt = $file->getClientOriginalExtension();
                    $randomNumber = Str::random(3);
                    $newName = $userId . '_' . $randomNumber . '.' . $fileExt;

                    // Move file to destination
                    $file->move(public_path('androidapp/tp_files'), $newName);

                    // $tp = Tp_file::findOrFail($request->tp_id);
                    // $tp->update([
                    //         'track_id' => $id,
                    //         'staff_id' => $userId,
                    //         'file_name' =>"/androidapp/tp_files/". $newName,
                    // ]);
                    $tp = Tp_file::updateOrCreate(
                        ['id' => $request->tp_id], // Search condition
                        [
                            'track_id' => $id,
                            'staff_id' => $userId,
                            'file_name' => "/androidapp/tp_files/" . $newName,
                        ]
                    );
                }
            }
            if(!empty($request->file('passportcopy'))){
            $pass = $request->file('passportcopy');
            if ($pass->isValid()) {
                $userId = Auth::user()->id;
                $fileExt = $pass->getClientOriginalExtension();
                $randomNumber = Str::random(3);
                $passName = $userId . '_' . $randomNumber . '.' . $fileExt;

                // Move file to destination
                $pass->move(public_path('androidapp/tp_files'), $passName);
            }
        }
            if(!empty($request->file('visacopy'))){
            $visa = $request->file('visacopy');
            if ($visa->isValid()) {
                $userId = Auth::user()->id;
                $fileExt = $visa->getClientOriginalExtension();
                $randomNumber = Str::random(3);
                $visaName = $userId . '_' . $randomNumber . '.' . $fileExt;

                // Move file to destination
                $visa->move(public_path('androidapp/tp_files'), $visaName);
            }
        }
            if(!empty($request->file('insurancecopy'))){
            $insurance = $request->file('insurancecopy');
            if ($insurance->isValid()) {
                $userId = Auth::user()->id;
                $fileExt = $insurance->getClientOriginalExtension();
                $randomNumber = Str::random(3);
                $insuranceName = $userId . '_' . $randomNumber . '.' . $fileExt;

                // Move file to destination
                $insurance->move(public_path('androidapp/tp_files'), $insuranceName);
            }
        }
            if(!empty($request->file('interviewslip'))){
            $interview = $request->file('interviewslip');
            if ($interview->isValid()) {
                $userId = Auth::user()->id;
                $fileExt = $interview->getClientOriginalExtension();
                $randomNumber = Str::random(3);
                $interviewName = $userId . '_' . $randomNumber . '.' . $fileExt;

                // Move file to destination
                $interview->move(public_path('androidapp/tp_files'), $interviewName);
            }
        }


            $blog = Applicant::findOrFail($id);
            $blog->update([
                'name' => $request->name,
                'passportno'  => $request->passportno,
                'applicant_email'  => $request->applicant_email,
                'tavano'  => $request->tavano,
                'dob'  => $request->dob,
                'location'  => $request->location,
                'category'  => $request->category,
                'country'  => $request->country,
                'passportcopy'  =>  "/androidapp/tp_files/".$passName,
                'visacopy'  => "/androidapp/tp_files/".$visaName,
                'insurancecopy'  => "/androidapp/tp_files/".$insuranceName,
                'interviewslip'  => "/androidapp/tp_files/".$interviewName,
                // 'status'  => $request->status
                'bill'  => '0',
                'appoint_date'  => $request->appoint_date,
                'rcddate'  => $request->rcddate,
                'subdate'  => $request->subdate,
                'collectdate'  => $request->collectdate,
                'sentdate'  => $request->sentdate,
                'senton'  => $request->senton,
                'appt_status'  => $request->appt_status,
                'del_status'  => $request->del_status,
                'doc'  => $request->doc,
                'createdon'  => now(),
                'modifiedon'  => now(),
                'createdby'  => Auth::user()->name,
                'agtid'  => $request->agtid,
                'cms_id'  => $request->cms_id,
            // 'branchid'  => $request->branchid,
                'referer'  => $request->referer,
                'company'  => $request->company,
                'visaref'  => $request->visaref,
                'dd'  => $request->dd,
                'reason'  => $request->reason,
                'internal_reason'  => $request->internal_reason,
                'barcode'  => $request->barcode,
                'outstation'  => $request->outstation,
                'number'  => $request->number,
            
            ]);
        return redirect()->route('visa_tracking')->with('success', 'Record updated successfully');
    }
    
    public function destroy(Request $request,$id){
        $blog = Applicant::findOrFail($id);
        $blog->delete();
        return redirect()->route('visa_tracking')->with('success', 'Record deleted successfully');
}
}