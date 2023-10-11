<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    
    public function rooms(){
    //部屋は多数のプランを取得。
    return $this->belongsToMany(Room::class);
    }
    public function reservations(){
    return $this->belongsToMany(Reservation::class);
    }
    
    public function getPaginateBylimit(int $limit_count=5)
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    
}
