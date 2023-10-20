<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'address',
        'email',
        'tell_number',
    ];
    
    public function plans(){
    return $this->belongsToMany(Plan::class);
    }
    public function rooms(){
    return $this->belongsToMany(Room::class);
    }
    public function user(){
    return $this->belongsTo(User::class);
    }
}