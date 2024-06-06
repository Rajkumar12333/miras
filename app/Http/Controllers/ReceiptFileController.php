<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\ReceiptFile;
class ReceiptFileController extends Controller
{
    public function show($id)
    {
        $tp_files = DB::table('receipt_files')
        ->join('applicants', 'receipt_files.track_id', '=', 'applicants.id')
        ->join('agents', 'receipt_files.staff_id', '=', 'agents.id')
        ->select('receipt_files.*', 'applicants.name', 'applicants.passportno', 'agents.agtname', 'receipt_files.created_on')
        ->where('receipt_files.id', $id)
        ->first();
           
        return response()->json($tp_files);
    }
    public function list_page(Request $request){
    $tp_files = DB::table('receipt_files')
    ->join('applicants', 'receipt_files.track_id', '=', 'applicants.id')
    ->join('agents', 'receipt_files.staff_id', '=', 'agents.id')
    ->select('receipt_files.*', 'applicants.name', 'applicants.passportno', 'agents.agtname','receipt_files.created_on')
    ->paginate(10);
    // echo '<pre>';
    // print_r($tp_files);die();
        return view('invoice.list_receipt_files',compact('tp_files'));
    }
    public function add_page(Request $request){
       
        return view('invoice.add_receipt_files');
    }
    public function edit_page($id){
      
        $edit = ReceiptFile::findOrFail($id);
        // $edit = CountryInfo::where('del_status','1')->findOrFail($id);
        return view('edit_country_info',compact('edit'));
    }
    public function store(Request $request)
    {
       // dd($request->all());
        $file = $request->file('receipt_file');
        if(!empty($request->receipt_file)){
        if ($file->isValid()) {
            $userId = Auth::user()->id;
            $fileExt = $file->getClientOriginalExtension();
            $randomNumber = Str::random(3);
            $newName = $userId . '_' . $randomNumber . '.' . $fileExt;

            // Move file to destination
            $file->move(public_path('androidapp/receipt_images'), $newName);
        }
    }
        $company = new ReceiptFile([
            'track_id' => $request->applicant_id,
            'staff_id' => $userId,
            'file_name' =>$newName,
            'created_on' => now(),
        ]);
        $company->save();
        return redirect()->route('receipt_files.view_page')->with('success', 'Record added successfully');
    }
    public function update(Request $request,$id)
    {
        $blog = ReceiptFile::findOrFail($id);
        $blog->update([
            'countryid' => $request->countryid,
            'countryinfo' => $request->countryinfo,
            'embassyinfo' =>$request->embassyinfo,
            'understanding' => $request->understanding,
        ]);
        return redirect()->route('receipt_files.view_page')->with('success', 'Record updated successfully');
    }
    public function destroy(Request $request,$id){
        $agent = ReceiptFile::findOrFail($id);
        $agent->delete();
        return redirect()->route('receipt_files.view_page')->with('success', 'Record deleted successfully');
    }
}
