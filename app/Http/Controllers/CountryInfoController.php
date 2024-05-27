<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CountryInfo;
use App\Models\Country;
class CountryInfoController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(['permission:country-info-list|country-info-create|country-info-edit|country-info-delete'], ['only' => ['view_page']]);
        $this->middleware(['permission:country-info-create'], ['only' => ['add_page', 'add']]);
        $this->middleware(['permission:country-info-edit'], ['only' => ['edit_page', 'update']]);
        $this->middleware(['permission:country-info-delete'], ['only' => ['destroy']]);
    }
    public function view_page(Request $request){
        $countries = CountryInfo::paginate(10);
        return view('list_country_info',compact('countries'));
    }
    public function add_page(Request $request){
        $add_country = Country::orderBy('country', 'asc')->get();
        return view('add_country_info', compact('add_country'));
    }
    public function edit_page($id){
        $add_country = Country::orderBy('country', 'asc')->get();
        $edit = CountryInfo::findOrFail($id);
        // $edit = CountryInfo::where('del_status','1')->findOrFail($id);
        return view('edit_country_info',compact('add_country','edit'));
    }
    public function store(Request $request)
    {
        $company = new CountryInfo([
            'countryid' => $request->countryid,
            'countryinfo' => $request->countryinfo,
            'embassyinfo' =>$request->embassyinfo,
            'understanding' => $request->understanding,
        ]);
        $company->save();
        return redirect()->route('country_info.view_page')->with('success', 'Record added successfully');
    }
    public function update(Request $request,$id)
    {
        $blog = CountryInfo::findOrFail($id);
        $blog->update([
            'countryid' => $request->countryid,
            'countryinfo' => $request->countryinfo,
            'embassyinfo' =>$request->embassyinfo,
            'understanding' => $request->understanding,
        ]);
        return redirect()->route('country_info.view_page')->with('success', 'Record updated successfully');
    }
    public function destroy(Request $request,$id){
        $agent = CountryInfo::findOrFail($id);
        $agent->delete();
        return redirect()->route('country_info.view_page')->with('success', 'Record deleted successfully');
    }
}
