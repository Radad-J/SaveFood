<?php

namespace App\Models;

use http\Client\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class Pack extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'available_from',
        'available_to',
        'stock'
    ];

    protected $table = 'packs';

    /**
     * Get the shop that owns the shop.
     */
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    /**
     * Get the reservations.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'reservations');
    }

    /**
     * Get the categories.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Gets the packs grouped by category.
     */
    /* select COUNT(category_pack.pack_id), categories.category
    FROM category_pack join categories on category_pack.category_id = categories.id
    GROUP BY category_id;
    */
    public static function getPacksByCategory()
    {
        return DB::table('category_pack as cp')
            ->join('categories as cat', 'cp.category_id', '=', 'cat.id')
            ->select( DB::raw("COUNT(cp.pack_id) as total"), 'cat.category')
            ->groupBy('cat.category')
            ->get();
    }

    public static function searchByStoreId(string $keyword, string $storeId){
        return self::where('store_id',$storeId)->where('title','LIKE',"%{$keyword}%")->paginate(9);
    }
}
