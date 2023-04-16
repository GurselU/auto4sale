<?php

namespace App\Models;

use App\Models\Seller;
use App\Models\Picture;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function seller(){
        return $this->belongsTo(Seller::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function chassi(){
        return $this->belongsTo(Chassi::class);
    }

    public function gearbox(){
        return $this->belongsTo(Gearbox::class);
    }

    public function emissionClass(){
        return $this->belongsTo(EmissionClass::class);
    }

    public function carOrigin(){
        return $this->belongsTo(CarOrigin::class);
    }

    public function pictures(){
        return $this->hasMany(Picture::class);
    }

    public function offer(){
        return $this->hasMany(Offer::class);
    }

    public function countdown(){
        return $this->hasOne(Countdown::class);
    }

    public function assets(){
        return $this->hasMany(Asset::class);
    }

    public function drowbacks(){
        return $this->hasMany(Drowback::class);
    }

    public function assetPictures(){
        return $this->hasMany(AssetPictures::class);
    }

    public function drowbackPictures(){
        return $this->hasMany(DrowbackPictures::class);
    }
}