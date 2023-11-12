<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function select()
    {
    return view('reservations.select');
    }
    public function store(Request $request,Reservation $reservation)
    {
        $inputPeople = $request->input('inputPeople');
        $inputRoom = $request->input('inputRoom');
        $inputCheckin = $request->input('inputCheckin');
        $inputCheckout = $request->input('inputCheckout');
        $inputPlan = $request->input('inputPlanTitle');
        $user_id =$request->input('user_id');
        
        // reservationに対する保存処理
        $reservation->checkin_date = $inputCheckin;
        $reservation->checkout_date = $inputCheckout;
        $reservation->reserver_people = $inputPeople;
        $reservation->user_id = $user_id;
        $reservation->save();
        
        // roomとの中間テーブルに対する保存処理.
        // Todo:attachにはリレーション先のidを入れる
        $reservation->rooms()->attach($inputRoom);
        
        // planとの中間テーブルに対する保存処理
        $reservation->plans()->attach($inputPlan);
        
    return redirect('/complete/reservation');
    }
    
    public function complete()
    {
        return view('reservations.complete');
    }
    
    public function check(Reservation $reservation)
    {
        $user = Auth::user();
        $user_id = $user->id;
        
        
        $reservations = $reservation->where('user_id',$user_id)->orderBy('updated_at', 'DESC')->paginate(3);
        
        return view('reservations.check')->with(['reservations' => $reservations]);
    }
    public function delete(Reservation $reservation)
    {
        $reservation->delete();
        return redirect('/');
    }
}    
