<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 

class UserPageController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:users-list|users-create|users-edit|users-delete'], ['only' => ['view_page']]);
        $this->middleware(['permission:users-create'], ['only' => ['add_page', 'add']]);
        $this->middleware(['permission:users-edit'], ['only' => ['edit_page', 'update']]);
        $this->middleware(['permission:users-delete'], ['only' => ['destroy']]);
    }
    public function add_page(Request $request){
        $roles = Role::pluck('name','name')->all();
        return view("add_users",compact('roles'));
    }
    public function edit_page(Request $request,$id){
        $roles = Role::all()->pluck('name');
        
        $userRoles = User::find($id)->roles->pluck('name')->toArray(); //
        $edit = User::findOrFail($id);
        return view("edit_user",compact('edit','roles','userRoles'));
    }
    public function view_page(Request $request){
        $users = User::orderBy('createdon', 'desc')->paginate(10);
        return view("list_user",compact('users'));
    }
    public function store(Request $request){
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
            // 'adminRight'=>$request->rights,
            'passwd'=>Hash::make($request->password),
            'email'=>$request->userid,
            'createdon'=>now(),
            'createdby'=>Auth::user()->id
        ]);
        $user->save();
        $user->assignRole($request->rights);
        return redirect()->route('user.view_page')->with('success', 'Record Added successfully');
    }
    public function destroy(Request $request,$id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.view_page')->with('success', 'Record deleted successfully');
    }
    public function update(Request $request,$id){
        $user = User::findOrFail($id);
        $user->update([
            'name' =>$request->name,
            'mailid'  =>$request->mail_id,
            'userid'  => $request->userid,
            // 'password'=>Hash::make($request->password),
            'branchid'=>$request->branchid,
            // 'adminRight'=>$request->rights,
            // 'passwd'=>Hash::make($request->password),
            'email'=>$request->userid,
            // 'createdon'=>now(),
            // 'createdby'=>Auth::user()->id

        ]);
        $user->assignRole($request->rights);
        return redirect()->route('user.view_page')->with('success', 'Record Added successfully');
    }

}
