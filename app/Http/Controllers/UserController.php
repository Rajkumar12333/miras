<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 

class UserController extends Controller
{
    public function add_page(Request $request){
        return view("add_users");
    }
    public function edit_page(Request $request,$id){
        $edit = User::findOrFail($id);
        return view("edit_user",compact('edit'));
    }
    public function view_page(Request $request){
      
        $users = User::orderBy('createdon', 'desc')->paginate(10);
        return view("list_user",compact('users'));
    }
    public function store(Request $request){
        //dd($request->all());
        $messages = [
            'mailid.required' => 'The email address is required.',
            'mailid.email' => 'Please provide a valid email address.',
            'userid.required' => 'The user id is required.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
        ];
        $request->validate([
            'userid' => 'required|string|max:255',
            'mailid' => 'sometimes|required|email',
          
            'password' => 'required|string|min:8|confirmed',
        ],$messages);
        $user = new User([
            'name' =>$request->name,
            'mail_id'  =>$request->mail_id,
            'userid'  => $request->userid,
            'password'=>Hash::make($request->password),
            'branchid'=>$request->branchid,
            'adminRight'=>$request->rights,
            'passwd'=>Hash::make($request->password),
            'email'=>$request->userid,
            'createdon'=>now(),
            'createdby'=>Auth::user()->id
        ]);
        $user->save();
    }
    public function destroy(Request $request,$id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.view_page')->with('success', 'Record deleted successfully');
    }
}
