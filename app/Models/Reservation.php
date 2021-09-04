<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'pack_id',
        'user_id',
        'quantity',
        'status'
    ];

    protected $table = 'reservations';

    public $timestamps = false;

    /**
     * Get the user who belongs to the reservation.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'users');
    }
}
