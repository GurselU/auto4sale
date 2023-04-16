<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }

    public function chassis()
    {
        return $this->belongsToMany(Chassi::class);
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class);
    }

    public function offer(){
        return $this->hasOne(Offer::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function gearboxes()
    {
        return $this->belongsToMany(Gearbox::class);
    }

    public function emissionClasses()
    {
        return $this->belongsToMany(EmissionClass::class);
    }

    public function carOrigins()
    {
        return $this->belongsToMany(CarOrigin::class);
    }
}
