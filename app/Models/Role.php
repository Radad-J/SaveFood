<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['role'];

    protected $table = 'roles';

    public $timestamps = false;

    /**
     * Get the shop that owns the user.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
