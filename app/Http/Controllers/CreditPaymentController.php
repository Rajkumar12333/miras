<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\CreditPayment;
use App\Models\Agent;
use App\Models\Card;

class CreditPaymentController extends Controller
{
    //
    public function daybook(Request $request){
        $daybook = DB::table('credit_payments')
    ->leftJoin('agents', 'agents.id', '=', 'credit_payments.agent_id')
    ->leftJoin('cards', 'card.card', '=', 'credit_payments.bank')
    ->select('agents.agtname as agent_name', 'cards.name as card_name', 'credit_payments.*')
    ->where('credit_payments.date', '=', $req_date)
    ->orderBy('credit_payments.id', 'desc')
    ->get();
          return view('invoice.list_payment',compact('daybook'));
      }
    public function show($id)
    {
        $allowance = CreditPayment::find($id); 
        return response()->json($allowance);
    }
    public function add_page(Request $request){
        $cards = Card::orderBy('name', 'asc')->get();
        $Agent = Agent::orderBy('agtname', 'asc')->get();
        return view('invoice.add_payment',compact('Agent','cards'));
    }
    public function list_page(Request $request){
      // $allowance=CreditPayment::paginate(10);
      $allowance = DB::table('credit_payments')
      ->leftJoin('agents', 'credit_payments.agent_id', '=', 'agents.id')
      ->leftJoin('cards', 'credit_payments.bank', '=', 'cards.card')
      ->select('credit_payments.*', 'cards.name as card_name', 'agents.agtname as agent_name')
      ->paginate(10);
  
      
        return view('invoice.list_payment',compact('allowance'));
    }
    public function store(Request $request)
    {
        //  dd($request->all());
        $company = new CreditPayment([
            'payment_from' => $request->from,
            'agent_id'=>$request->agent,
            'bank'=>$request->bank,
            'payment_method' => $request->payment_method,
            'amount' =>$request->amount,
            'debiter_id'=>Auth::user()->id,
            'date'=>date("d-m-y")
        ]);
        $company->save();
        return redirect()->route('credit_payment.list_page')->with('success', 'Record added successfully');
    }
}
