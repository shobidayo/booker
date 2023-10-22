<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use APP\Models\User;

class ReservationController extends Controller
{
    public function select()
    {
    return view('reservations.select');
    }
    
    
    
    
    
    
    public function store(Request $request,Reservation $reservation)
    {
        $input = [
        $name=$request->input('users.name'),
        $address=$request->input('users.address'),
        $tellNumber=$request->input('users.tell_number'),
        $email=$request->input('users.email'),
        ];
        $reservation->fill($input)->save();
    return redirect('/complete/reservation');
    }
    public function complete(){
        return view('reservations.complete');
    }
}    
