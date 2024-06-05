<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BillData;

class SubmissionController extends Controller
{
    public function list_page()
    {
        $results = BillData::select('bill_datas.*', 'applicants.appt_status as status')
    ->leftJoin('applicants', 'applicants.id', '=', 'bill_datas.applicant_refid')
    ->where('applicants.bill', 0)
    ->where('applicants.appt_status', 'SUBMITTED')
    ->where('bill_datas.old_data', 0)
    ->orderByDesc('bill_datas.id')
    ->paginate(10);
    
        return view('invoice.list_submission',compact('results'));
    }
}