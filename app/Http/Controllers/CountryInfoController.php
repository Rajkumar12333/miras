<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CountryInfo;
use App\Models\Country;
class CountryInfoController extends Controller
{
    //
    public function view_page(Request $request){
        if(Auth::id()){
            $user_type=Auth()->user()->adminRight;
            if($user_type=='1'){
                $countries = CountryInfo::paginate(10);
                    return view('list_country_info',compact('countries'));
                }else{
                    abort(401);
                }
            }else{
                return redirect()->route('dashboard');
            }
    }
    public function add_page(Request $request){
        if(Auth::id()){
            $user_type=Auth()->user()->adminRight;
            if($user_type=='1'){
                $add_country = Country::orderBy('country', 'asc')->get();
                    return view('add_country_info', compact('add_country'));
                }else{
                    abort(401);
                }
            }else{
                return redirect()->route('dashboard');
            }
    }
    public function edit_page($id){
        if(Auth::id()){
            $user_type=Auth()->user()->adminRight;
            if($user_type=='1'){
                $add_country = Country::orderBy('country', 'asc')->get();
                $edit = CountryInfo::findOrFail($id);
                // $edit = CountryInfo::where('del_status','1')->findOrFail($id);
                return view('edit_country_info',compact('add_country','edit'));
            }else{
                abort(401);
            }
        }else{
            return redirect()->route('dashboard');
        }
    }
    public function store(Request $request)
    {
        if(Auth::id()){
            $user_type=Auth()->user()->adminRight;
            if($user_type=='1'){
                $company = new CountryInfo([
                    'countryid' => $request->countryid,
                    'countryinfo' => $request->countryinfo,
                    'embassyinfo' =>$request->embassyinfo,
                    'understanding' => $request->understanding,
                ]);
                $company->save();
                return redirect()->route('country_info.view_page')->with('success', 'Record added successfully');
            }else{
                abort(401);
            }
        }else{
            return redirect()->route('dashboard');
        }
    }
    public function update(Request $request,$id)
    {
        if(Auth::id()){
            $user_type=Auth()->user()->adminRight;
            if($user_type=='1'){
                $blog = CountryInfo::findOrFail($id);
                $blog->update([
                    'countryid' => $request->countryid,
                    'countryinfo' => $request->countryinfo,
                    'embassyinfo' =>$request->embassyinfo,
                    'understanding' => $request->understanding,
                ]);
                return redirect()->route('country_info.view_page')->with('success', 'Record updated successfully');
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
                $agent = CountryInfo::findOrFail($id);
                $agent->delete();
                return redirect()->route('country_info.view_page')->with('success', 'Record deleted successfully');
            }else{
                abort(401);
            }
        }else{
            return redirect()->route('dashboard');
        }
    }
}
