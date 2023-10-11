<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    
    public function plans(){
    return $this->belongsToMany(Plan::class);
    }
    public function rooms(){
    return $this->belongsToMany(Room::class);
    }
}
