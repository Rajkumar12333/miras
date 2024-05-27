<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
class AgentController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(['permission:agent-list|agent-create|agent-edit|agent-delete'], ['only' => ['view_page']]);
        $this->middleware(['permission:agent-create'], ['only' => ['add_page', 'add']]);
        $this->middleware(['permission:agent-edit'], ['only' => ['edit_page', 'update']]);
        $this->middleware(['permission:agent-delete'], ['only' => ['destroy']]);
    }
    public function add_page(Request $request){
        return view("add_agent");
    }
    public function edit_page(Request $request,$id){
        $edit = Agent::findOrFail($id);
        return view("edit_agent",compact('edit'));
    }
    public function view_page(Request $request){
        $Agent = Agent::orderBy('createdon', 'desc')->paginate(10);
        // $Agent = Agent::orderBy('agtname', 'asc')->paginate(10);
        return view("list_agent",compact('Agent'));
    }
    public function store(Request $request)
    {
        $messages = [
            'mailid.required' => 'The email address is required.',
            'mailid.email' => 'Please provide a valid email address.',
            'emailid.required' => 'The email address is required.',
            'emailid.email' => 'Please provide a valid email address.',
            'agtname.required' => 'The Agent name is required.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
        ];
        $request->validate([
            'agtname' => 'required|string|max:255',
            'mailid' => 'sometimes|required|email',
            'emailid' => 'sometimes|required|email',
            'password' => 'required|string|min:8|confirmed',
        ],$messages);
        $agent = new Agent([
            'agtname' => $request->agtname,
            'mailid' => $request->mailid,
            'emailid' =>$request->emailid,
            'username' => $request->username,
            'mobile' =>$request->mobile,
            'gst_no' => $request->gst_no,
            'address' =>$request->address,
            'status' => $request->status,
            'region' =>$request->region,
            'outstation' => $request->outstation,
            'passwd'=>Hash::make($request->password),
            'createdon'=>now(),
            'createdby' => Auth::user()->name
            
        ]);
        $agent->save();
        return redirect()->route('agent.view_page')->with('success', 'Record added successfully');
    }
    public function destroy(Request $request,$id){
        $agent = Agent::findOrFail($id);
        $agent->delete();
        return redirect()->route('agent.view_page')->with('success', 'Record deleted successfully');
    }
    public function update(Request $request,$id){
        $messages = [
            'mailid.required' => 'The email address is required.',
            'mailid.email' => 'Please provide a valid email address.',
            'emailid.required' => 'The email address is required.',
            'emailid.email' => 'Please provide a valid email address.',
            'agtname.required' => 'The Agent name is required.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
        ];
        $request->validate([
            'agtname' => 'required|string|max:255',
            'mailid' => 'sometimes|required|email',
            'emailid' => 'sometimes|required|email',
        
        ],$messages);
        $blog = Agent::findOrFail($id);
        $blog->update([
            'agtname' => $request->agtname,
            'mailid' => $request->mailid,
            'emailid' =>$request->emailid,
            'username' => $request->username,
            'mobile' =>$request->mobile,
            'gst_no' => $request->gst_no,
            'address' =>$request->address,
            'status' => $request->status,
            'region' =>$request->region,
            'outstation' => $request->outstation,
            
            'modified_on'=>now(),
            'modified_by'=>Auth::user()->id
        ]);
        return redirect()->route('agent.view_page')->with('success', 'Record deleted successfully');
    }
}
