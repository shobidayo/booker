<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    public function plans(){
    //1つの部屋に多数のプラン。
    return $this->belongsToMany(Plan::class);
    }
    public function reservations(){
    return $this->belongsToMany(Reservation::class);
    }
}
