<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index(Hotel $hotel)
    {
    // それぞれのカラムを取得
    $hotels = $hotel->select('name','information','description','event','FAQ')->get();
    return view('hotels.index')->with(['hotels'=>$hotels]);
    }
}
