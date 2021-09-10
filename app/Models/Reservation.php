<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'pack_id',
        'user_id',
        'quantity',
        'status',
        'created_at'
    ];

    protected $table = 'reservations';

    public $timestamps = true;

    /**
     * Get the user who belongs to the reservation.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'users');
    }

    public static function getReservationsByStatus(string $status)
    {
        return DB::table('reservations as r')->select('r.id', 'r.status', 'r.pack_id', 'u.name', 'u.email', 'r.quantity', 'p.title', 'r.created_at', 'r.updated_at', 'p.picture')
            ->join('packs as p', 'r.pack_id', '=', 'p.id')
            ->join('users as u', 'u.id', '=', 'r.user_id')
            ->where('p.store_id', '=', Auth()->user()->store_id)
            ->where('r.status', 'LIKE', $status)
            ->orderByDesc('r.created_at')
            ->get();
    }
}
