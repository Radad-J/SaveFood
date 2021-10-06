<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;

    protected $fillable = [
        'pack_id',
        'user_id',
    ];

    protected $table = 'favourites';

    /**
     * Get the pack that belongs to the favourite.
     */
    public function pack()
    {
        return $this->belongsTo(Pack::class);
    }

    /**
     * Get the user that owns the favourite pack.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
