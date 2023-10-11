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
        
        dd($selected_plans);
        
        return redirect('/plans');
        //{{ $selected_plans->rooms->capacity }}
        
    }
    public function choices(Plan $plan)
    {
        return view('plans.choose')->with(['choices'=>$plan->getPaginateBylimit(3)]);
    }
}
