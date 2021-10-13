<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Shop extends Model
{
    use HasFactory;


    /**
     * @param Request $request
     * @param string|null $searchCriteria
     * @param bool $sortBy
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function searchShop(Request $request, string $searchCriteria = null, bool $sortBy = false)
    {

        if ($sortBy) {
            $query = DB::table('packs')
                ->select('packs.id', 'packs.title', 'packs.price', 'packs.sale_price', 'packs.picture');

            $query = self::sortShop($query, $request->sortBy);
            return $query->paginate(9);
        }

        if ($searchCriteria === "title" && !empty($request->search)) {
            return DB::table('packs as p')->select('p.id', 'p.title', 'p.price', 'p.sale_price', 'p.picture')
                ->join('stores as s', 'p.store_id','=','s.id')
                ->where('p.title', 'LIKE', "%{$request->search}%")
                ->orWhere('s.city', 'LIKE', "%{$request->search}%")
                ->paginate(9);
            /*
            return Pack::where('title', 'LIKE', "%{$request->search}%")->paginate(9);*/
        }

        if ($searchCriteria === "category") {
            $checkbox = $request->categories;

            //Check if All exists
            if (in_array("All", $checkbox)) {
                return Pack::paginate(9);
            } else {
                return DB::table('packs')
                    ->select('packs.id', 'packs.title', 'packs.price', 'packs.sale_price', 'packs.picture', 'cat.category')
                    ->join('category_pack as cp', 'cp.pack_id', '=', 'packs.id')
                    ->join('categories as cat', 'cat.id', '=', 'cp.category_id')
                    ->whereIn('cat.category', $checkbox)
                    ->paginate(9);
            }

        }

        if ($searchCriteria === "price") {
            $packs = Pack::where('price', '>=', "{$request->min}")->where('price', '<=', "{$request->max}")->paginate(9);
            return $packs;
        }
    }

    private static function sortShop(Builder $query, string $sortBy)
    {
        if ($sortBy === "newnessAsc") {
            $query->orderBy('packs.created_at');
        }
        if ($sortBy === "newnessDesc") {
            $query->orderBy('packs.created_at', 'desc');
        }

        if ($sortBy === 'priceAsc') {
            $query->orderByRaw("IFNULL(packs.sale_price, packs.price) asc");
        }
        if ($sortBy === 'priceDesc') {
            $query->orderByRaw("IFNULL(packs.sale_price, packs.price) desc");
        }

        if ($sortBy === 'alphabeticalAsc') {
            $query->orderBy('packs.title');
        }
        if ($sortBy === 'alphabeticalDesc') {
            $query->orderBy('packs.title', 'desc');
        }
        return $query;
    }
}
