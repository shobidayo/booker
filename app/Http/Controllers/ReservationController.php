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
    
    public function search(Request $request,Reservation $reservation)
    {
        $selectedPeople = $request->input('reserver_people');
        dd($selectedPeople);
        
        // $plans =Plan::where('capacity',$selectedPeople)->get();
        
    // return view('reservations.select');
    }
    
}
