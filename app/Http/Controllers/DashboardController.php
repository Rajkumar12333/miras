<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class DashboardController extends Controller
{
    //
    public function view_page(Request $request){
        if(Auth::id()){
            $user_type=Auth()->user()->adminRight;
            if($user_type=='1'){
                $chennaiCount = Applicant::where('branchid','2')->count();
                $BangaloreCount = Applicant::where('branchid','1')->count();
                $SubmittedCount = Applicant::where('appt_status','SUBMITTED')->count();
                $PendingCount = Applicant::where('appt_status','PENDING')->count();
                $DispatchCount = Applicant::where('appt_status','DESPATCH TO BOM FOR SUBMISSION')->count();
                return view("index",compact('chennaiCount','BangaloreCount','SubmittedCount','PendingCount','DispatchCount'));
            }else{
                abort(401);
            }
        }else{
            return redirect()->route('dashboard');
        }
    }
}
