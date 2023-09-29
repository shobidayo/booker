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
    public function choices(Reservation $reservation)
    {
        return view('plans.choose')->with(['choices'=>$reservation->getPaginateBylimit(3)]);
    }
    
}
