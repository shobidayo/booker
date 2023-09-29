<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    
    public function getPaginateBylimit(int $limit_count=5)
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}
