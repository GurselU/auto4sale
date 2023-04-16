<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'car_id',
    ];

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
