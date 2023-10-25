<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

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
        
        // reservationに対する保存処理
        $reservation->checkin_date = $inputCheckin;
        $reservation->checkout_date = $inputCheckout;
        $reservation->reserver_people = $inputPeople;
        $reservation->user_id = 1;
        $reservation->save();
        
        // roomとの中間テーブルに対する保存処理.
        // Todo:attachにはリレーション先のidを入れる
        $reservation->rooms()->attach($inputRoom);
        
        // planとの中間テーブルに対する保存処理
        $reservation->plans()->attach($inputPlan);
        
        // $bookingNumber=Str::random(6);
        //予約番号をランダムな文字列で取得。Complite.blade.phpで｛｛$bookingNumber｝｝を書いて表示させる？
    
        
    return redirect('/complete/reservation');
    }
    public function complete(){
        return view('reservations.complete');
    }
}    
