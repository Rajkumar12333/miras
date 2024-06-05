<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Allowance;
class AllowanceController extends Controller
{
    //
    public function show($id)
    {
        $allowance = Allowance::find($id); 
        return response()->json($allowance);
    }
    public function add_page(Request $request){
        return view('invoice.add_allowance');
    }
    public function list_page(Request $request){
       $allowance=Allowance::OrderBy('created_on','desc')->paginate(10);
        return view('invoice.list_allowance',compact('allowance'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $company = new Allowance([
            'name' => $request->name,
            'amount' => $request->amount,
            'reason' =>$request->reason,
            'created_by' =>  Auth::user()->id,
            'created_on'=>now()
        ]);
        $company->save();
        return redirect()->route('allowance.view_page')->with('success', 'Record added successfully');
    }
}
