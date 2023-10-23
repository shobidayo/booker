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
        $inputName = $request->input('inputName');
        $inputPrice = $request->input('inputPrice');
        $inputbody = $request->input('inputbody');
        
        
        $reservation->fill($inputPeople)->save();
        
        // $create_reservation =$reservation->whereHas('rooms.plans', function($q) use($inputPeople,$inputRoom,$inputCheckin,$inputCheckout
        // ,$inputName,$inputPrice){
        // $q->where('capacity','=', $inputPeople)
        //   ->where('type','=',$inputRoom)
        //   ->where('checkin_date','=',$inputCheckin)
        //   ->where('checkout_date','=',$inputCheckout)
        //   ->where('name','=',$inputName)
        //   ->where('price','=',$inputPrice)
        //   ->orwhere('price1','=',$inputPrice);
        // })->save();
        
    return redirect('/complete/reservation');
    }
    public function complete(){
        return view('reservations.complete');
    }
}    
