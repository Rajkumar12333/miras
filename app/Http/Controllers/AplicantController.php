<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\Country;
use App\Models\Category;
use App\Models\Branch;
use App\Models\Agent;

class AplicantController extends Controller
{
    //
    public function visa_tracking(){
      
        $view = Applicant::orderBy('createdon', 'desc')->get();
       
        return view('visa_tracking',compact('view'));
    }
    public function add_page(Request $request){
        $Country=Country::all();
        $Category=Category::all();
        $Branch=Branch::all();
       // $Agent=Agent::all();
        $Agent = Agent::orderBy('agtname', 'asc')->get();
        return view('add_applicant',compact('Country','Category','Branch','Agent'));
    }
    public function store(Request $request)
    {
        $documents = $request->input('document');
        foreach ($documents as $document) {
        $user = new Applicant([
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
            'bill'  => $request->bill,
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
            'createdby'  => "raj",
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
            'barcode'  => $request->barcode,
            'outstation'  => $request->outstation,
            'number'  => $request->number,
           
           



        ]);
        $user->save();
    }
        // Redirect back with success message
        return redirect()->back()->with('success', 'Document created successfully.');
    }
    public function destroy(Request $request,$id){
                $blog = Applicant::findOrFail($id);
                $blog->delete();
                return redirect()->route('visa_tracking')->with('success', 'Record deleted successfully');
}
}