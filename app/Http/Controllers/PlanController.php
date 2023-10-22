<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function search(Request $request, Plan $plans)
    {
        $peopleNumber= $request->input('people');
        $roomSelect=$request->input('room_type');
        $checkinDate=$request->input('checkin_date');
        $checkoutDate=$request->input('checkout_date');
        
        $selected_plans = $plans->whereHas('rooms.reservations', function($q) use($peopleNumber,$roomSelect,$checkinDate,$checkoutDate){
        $q->where('capacity','>=', $peopleNumber)
          ->where('type','=',$roomSelect)
          ->where('checkin_date','>=',$checkinDate)
          ->orwhereNull('checkin_date')
          ->where('checkout_date','<=',$checkoutDate)
          ->orwhereNull('checkout_date');
        })->get();
        
        // $request->session()->put('selected_plans', $selected_plans);
        return redirect('/plans')->with(['selected_plans' => $selected_plans]);
    }
    public function choices(Request $request)
    {
        // $choice = $request->session()->get('selected_plans');
        // $request->session()->forget('selected_plans');
        dd($request->session()->all());
        return view('plans.choose')->with(['choices'=>$choice]);
    }
    public function show(Request $request, Plan $plan)
    {
        $selected_plans = $request->session()->get('selected_plans');
        return view('reservations.confirm', ['plan' => $plan, 'selected_plans' => $selected_plans]);
    }
    
}
