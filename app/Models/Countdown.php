<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countdown extends Model
{
    use HasFactory;

    protected $fillable = [
        'timer',
        'car_id',
    ];

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
