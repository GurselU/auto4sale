<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarOrigin extends Model
{
    use HasFactory;

    public function cars(){
        return $this->hasMany(Car::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
