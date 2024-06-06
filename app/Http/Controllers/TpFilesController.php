<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\CountryInfo;
use App\Models\Country;
use App\Models\Tp_file;
class TpFilesController extends Controller
{
    //
    public function Daybook_search(Request $request){
        // dd($request->all());
        $inputDate = $request->input('date');

        // Convert the input date to the stored format
        $formattedDate = Carbon::createFromFormat('Y-m-d', $inputDate)->format('d-m-Y');

        $credit = DB::table('credit_payments')
        ->leftJoin('agents', 'agents.id', '=', 'credit_payments.agent_id')
        ->leftJoin('cards', 'cards.card', '=', 'credit_payments.bank')
        ->select('agents.agtname as agent_name', 'cards.name as card_name', 'credit_payments.*')
        ->where('credit_payments.date', '=', $formattedDate)
        ->orderBy('credit_payments.id', 'desc')
        ->get();
    //    echo '<pre>';
    //    print_r($daybook_search);die();
        return view('invoice.list_daybook',compact('credit'));
        }
    public function Daybook(Request $request){
        $daybook_search=null;
            return view('invoice.list_daybook',compact('daybook_search'));
        }
    function __construct()
    {
        $this->middleware(['permission:tpfiles-list|tpfiles-create|tpfiles-edit|tpfiles-delete'], ['only' => ['list_page']]);
        $this->middleware(['permission:tpfiles-create'], ['only' => ['add_page', 'add']]);
        $this->middleware(['permission:tpfiles-edit'], ['only' => ['edit_page', 'update']]);
        $this->middleware(['permission:tpfiles-delete'], ['only' => ['destroy']]);
    }
    public function show($id)
    {
        $user = Tp_file::find($id);
       
            $tp_files = DB::table('tp_files')
            ->join('applicants', 'tp_files.track_id', '=', 'applicants.id')
            ->join('agents', 'tp_files.staff_id', '=', 'agents.id')
            ->select('tp_files.*', 'applicants.name', 'applicants.passportno', 'agents.agtname','tp_files.created_on','tp_files.id')
            ->where('tp_files.id',$id)
            ->first();
           
        return response()->json($tp_files);
    }
    public function list_page(Request $request){
    $tp_files = DB::table('tp_files')
    ->join('applicants', 'tp_files.track_id', '=', 'applicants.id')
    ->join('agents', 'tp_files.staff_id', '=', 'agents.id')
    ->select('tp_files.*', 'applicants.name', 'applicants.passportno', 'agents.agtname','tp_files.created_on')
    ->OrderBy('tp_files.id','desc')
    ->paginate(10);
    
        return view('invoice.list_tp_files',compact('tp_files'));
    }
    public function add_page(Request $request){
        $add_country = Country::orderBy('country', 'asc')->get();
        return view('invoice.add_tp_files', compact('add_country'));
    }
    public function edit_page($id){
        $add_country = Country::orderBy('country', 'asc')->get();
        $edit = Tp_file::findOrFail($id);
        // $edit = CountryInfo::where('del_status','1')->findOrFail($id);
        return view('edit_country_info',compact('add_country','edit'));
    }
    public function store(Request $request)
    {
        $file = $request->file('receipt_file');
        if(!empty($request->receipt_file)){
        if ($file->isValid()) {
            $userId = Auth::user()->id;
            $fileExt = $file->getClientOriginalExtension();
            $randomNumber = Str::random(3);
            $newName = $userId . '_' . $randomNumber . '.' . $fileExt;

            // Move file to destination
            $file->move(public_path('androidapp/tp_files'), $newName);
        }
    }
        $company = new Tp_file([
            'track_id' => $request->applicant_id,
            'staff_id' => $userId,
            'file_name' =>$newName,
            'created_on' => now(),
        ]);
        $company->save();
        return redirect()->route('tpfiles.view_page')->with('success', 'Record added successfully');
    }

    // public function update(Request $request,$id)
    // {
    //     $blog = Tp_file::findOrFail($id);
    //     $blog->update([
    //         'countryid' => $request->countryid,
    //         'countryinfo' => $request->countryinfo,
    //         'embassyinfo' =>$request->embassyinfo,
    //         'understanding' => $request->understanding,
    //     ]);
    //     return redirect()->route('country_info.view_page')->with('success', 'Record updated successfully');
    // }
    public function destroy(Request $request,$id){
        $agent = Tp_file::findOrFail($id);
        $agent->delete();
        return redirect()->route('tpfiles.view_page')->with('success', 'Record deleted successfully');
    }
}
