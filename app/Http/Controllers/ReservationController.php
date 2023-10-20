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
        $input=$request['users'];
        
        //ここで、$reservationテーブルには入力されたカラムがないので、usersテーブルとリレーションを結んで、usersテーブルに保存する処理を作成する
        
        // $inputinformation = $reservation->whereHas('user', function($q) use($input){
        // $q->where('user_id','=',$input);
        // })->get();
        // dd($inputinformation);
        
        $reservation->fill($input)->save();
    return redirect('/');
    }
}    
