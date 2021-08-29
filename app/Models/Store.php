<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'website',
        'GSM',
        'street_name',
        'postal_code',
        'country',
        'city',
    ];

    protected $table = 'stores';

    public $timestamps = false;

    /**
     * Get the user associated with the shop.
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }

    /**
     * Get the packs associated with the shop.
     */
    public function packs()
    {
        return $this->hasMany(Pack::class);
    }
}
