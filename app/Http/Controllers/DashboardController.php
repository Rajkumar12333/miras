<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(['permission:dashboard-list'], ['only' => ['view_page']]);
      
    }
    public function view_page(Request $request){
        $chennaiCount = Applicant::where('branchid','2')->count();
        $BangaloreCount = Applicant::where('branchid','1')->count();
        $SubmittedCount = Applicant::where('appt_status','SUBMITTED')->count();
        $PendingCount = Applicant::where('appt_status','PENDING')->count();
        $DispatchCount = Applicant::where('appt_status','DESPATCH TO BOM FOR SUBMISSION')->count();
        return view("index",compact('chennaiCount','BangaloreCount','SubmittedCount','PendingCount','DispatchCount'));
    }
}
