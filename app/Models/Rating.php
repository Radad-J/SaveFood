<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'pack_id',
        'user_id',
        'title',
        'comment',
        'rate',
    ];

    protected $table = 'ratings';

    /**
     * Get the pack that belongs to the rating.
     */
    public function pack()
    {
        return $this->belongsTo(Pack::class);
    }

    /**
     * Get the user that owns the rating.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
