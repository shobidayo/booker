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
        
        $request->session()->put('people_num', $peopleNumber);
        $request->session()->put('room-select', $roomSelect);
        $request->session()->put('checkin-Date', $checkinDate);
        $request->session()->put('checkout-Date', $checkoutDate);
        return redirect('/plans')->with(['selected_plans' => $selected_plans]);
    }
    public function choices(Request $request)
    {
        $choice = $request->session()->get('selected_plans');
        $people = $request->session()->get('people_num');
        $room = $request->session()->get('room-select');
        $checkin = $request->session()->get('checkin-Date');
        $checkout = $request->session()->get('checkout-Date');
        
        $request->session()->forget('selected_plans');
        $request->session()->forget('people_num');
        $request->session()->forget('room-select');
        $request->session()->forget('checkin-Date');
        $request->session()->forget('checkout-Date');
        
        $request->session()->put('choice', $choice);
        $request->session()->put('input-people',$people);
        $request->session()->put('input-room-select',$room);
        $request->session()->put('input-checkin-Date',$checkin);
        $request->session()->put('input-checkout-Date',$checkout);
        
        return view('plans.choose')->with(['choices'=>$choice]);
    }
    public function show(Request $request, Plan $plan)
    {
        $selected_plans = $request->session()->get('choice');
        $inputPeople =$request->session()->get('input-people');
        $inputRoom = $request->session()->get('input-room-select');
         if ($inputRoom === 'シングルルーム') {
            $price = $plan->price;
        } elseif ($inputRoom === 'ツインルーム') {
            $price = $plan->price1;
        }
    
        $inputCheckin = $request->session()->get('input-checkin-Date');
        $inputCheckout = $request->session()->get('input-checkout-Date');
        
        return view('reservations.confirm')->with([
        'plan' => $plan,
        'price' => $price,
        'selected_plans' => $selected_plans,
        'inputPeople' => $inputPeople,
        'inputRoom' => $inputRoom,
        'inputCheckin' => $inputCheckin,
        'inputCheckout' => $inputCheckout,]);
    }
    
}
