<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Http\Request;
use App\Models\CompanyInfo;

class CompanyInfoController extends Controller
{

    //
    function __construct()
    {
        $this->middleware(['permission:company-info-list|company-info-create|company-info-edit|company-info-delete'], ['only' => ['view_page']]);
        $this->middleware(['permission:company-info-create'], ['only' => ['add_page', 'add']]);
        $this->middleware(['permission:company-info-edit'], ['only' => ['edit_page', 'update']]);
        $this->middleware(['permission:company-info-delete'], ['only' => ['destroy']]);
    }
    public static function isEncrypted($value)
    {
        try {
            Crypt::decrypt($value);
        } catch (DecryptException $e) {
            return false;
        }

        return true;
    }
    public function view_page(Request $request){
        $infos = CompanyInfo::where('del_status','1')->paginate(10);
        return view('list_company_info',compact('infos'));
    }
    public function add_page(Request $request){
        return view('add_company_info');
    }
    public function edit_page($id){
        $edit = CompanyInfo::where('del_status','1')->findOrFail($id);
        return view('edit_company_info',compact('edit'));
    }
    public function store(Request $request)
    {
        $messages = [
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
        ];
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ],$messages);
        $company = new CompanyInfo([
            'companyname' => $request->companyname,
            'emailid' => $request->emailid,
            'username' =>$request->username,
            'username' => $request->username,
            'address' =>$request->address,
            'status' =>$request->status,
            'del_status' =>'1',
            'createdon'=>now(),
            'createdby' => Auth::user()->name,
            'passwd'=>Hash::make($request->password),
        ]);
        $company->save();
        return redirect()->route('company_info.view_page')->with('success', 'Record added successfully');
    }
    public function update(Request $request,$id)
    {

        // $messages = [
        //     'password.required' => 'The password field is required.',
        //     'password.min' => 'The password must be at least 8 characters.',
        // ];
        // $request->validate([
        //     'password' => 'required|string|min:8|confirmed',
        // ],$messages);
        // $user = CompanyInfo::find($request->id) ?? new CompanyInfo;

        // // Check if the password is being updated or set for the first time
        // if ($request->filled('password')) {
        //     // If the user exists and the password has not changed, do not re-hash the password
        //     if (!isset($user->password) || !Hash::check($request->password, $user->password)) {
        //         $password = Hash::make($request->password);
        //     }
        // }
        $blog = CompanyInfo::findOrFail($id);
        $blog->update([
            'companyname' => $request->companyname,
            'emailid' => $request->emailid,
            'username' =>$request->username,
            'username' => $request->username,
            'address' =>$request->address,
            'status' =>$request->status,
            'del_status' =>'1',
            // 'passwd'=> $password,
        ]);
        return redirect()->route('company_info.view_page')->with('success', 'Record updated successfully');
    }
    public function destroy(Request $request,$id){
        $agent = CompanyInfo::findOrFail($id);
        $agent->delete();
        return redirect()->route('company_info.view_page')->with('success', 'Record deleted successfully');
    }
}
