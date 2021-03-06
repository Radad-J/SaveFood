<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the shop that owns the user.
     */
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    /**
     * Get the shop that owns the user.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get the reservations.
     */
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'reservations');
    }

    /**
     * Get the favourites for the user.
     */
    public function favourites()
    {
        return $this->hasMany(Favourite::class);
    }

    /**
     * Get the favourites for the user.
     */
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
