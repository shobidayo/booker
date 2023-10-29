<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function plans(){
    return $this->belongsToMany(Plan::class);
    }
    public function rooms(){
    return $this->belongsToMany(Room::class);
    }
    public function user(){
    return $this->belongsTo(User::class);
    }
    
    protected $fillable = [
    'title',
    'body',
    'room_id',
    'plan_id'
];
    public function getPaginateBylimit(int $limit_count = 10){
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}

}