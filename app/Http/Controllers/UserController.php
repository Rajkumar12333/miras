<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 

class UserController extends Controller
{
    public function add_page(Request $request){
        if(Auth::id()){
            $user_type=Auth()->user()->adminRight;
            if($user_type=='1'){
                return view("add_users");
            }else{
                abort(401);
            }
        }else{
            return redirect()->route('dashboard');
        }
    }
    public function edit_page(Request $request,$id){
        if(Auth::id()){
            $user_type=Auth()->user()->adminRight;
            if($user_type=='1'){
                $edit = User::findOrFail($id);
                return view("edit_user",compact('edit'));
            }else{
                abort(401);
            }
        }else{
            return redirect()->route('dashboard');
        }
    }
    public function view_page(Request $request){
        if(Auth::id()){
            $user_type=Auth()->user()->adminRight;
            if($user_type=='1'){
                $users = User::orderBy('createdon', 'desc')->paginate(10);
                return view("list_user",compact('users'));
            }else{
                abort(401);
            }
        }else{
            return redirect()->route('dashboard');
        }
    }
    public function store(Request $request){
        if(Auth::id()){
            $user_type=Auth()->user()->adminRight;
            if($user_type=='1'){
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
                    'mailid'  =>$request->mail_id,
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
                return redirect()->route('user.view_page')->with('success', 'Record Added successfully');
            }else{
                abort(401);
            }
        }else{
            return redirect()->route('dashboard');
        }
    }
    public function destroy(Request $request,$id){
        if(Auth::id()){
            $user_type=Auth()->user()->adminRight;
            if($user_type=='1'){
                $user = User::findOrFail($id);
                $user->delete();
                return redirect()->route('user.view_page')->with('success', 'Record deleted successfully');
            }else{
                abort(401);
            }
        }else{
            return redirect()->route('dashboard');
        }
    }
    public function update(Request $request,$id){
        if(Auth::id()){
            $user_type=Auth()->user()->adminRight;
            if($user_type=='1'){
                $blog = User::findOrFail($id);
                $blog->update([
                    'name' =>$request->name,
                    'mailid'  =>$request->mail_id,
                    'userid'  => $request->userid,
                    // 'password'=>Hash::make($request->password),
                    'branchid'=>$request->branchid,
                    'adminRight'=>$request->rights,
                    // 'passwd'=>Hash::make($request->password),
                    'email'=>$request->userid,
                    // 'createdon'=>now(),
                    // 'createdby'=>Auth::user()->id

                ]);
                return redirect()->route('user.view_page')->with('success', 'Record Added successfully');
            }else{
                abort(401);
            }
        }else{
            return redirect()->route('dashboard');
        }
    }

}
