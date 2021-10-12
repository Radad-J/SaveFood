<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Get all packs to display */
        $packs = DB::table('packs')->orderByDesc('created_at')->paginate(9);

        /* Gets total packs by name of the category */
        $packsByCat = Pack::getPacksByCategory();

        /* Gets the total number of packs */
        $totalCountPacks = Pack::count();

        /*Random packs*/
        $randomPacks = Pack::inRandomOrder()->distinct()->limit(3)->get();

        return view('shop.index', ['packs' => $packs, 'packsByCat' => $packsByCat, 'totalCountPacks' => $totalCountPacks, 'randomPacks' => $randomPacks]);
    }

    /**
     * Get the form (keyword and filter options)
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        if ($request->isMethod('get') && !is_null($request)) {
            $this->validate(request(), [
                'sortBy' => ['sometimes', 'string', 'in:newnessAsc,newnessDesc,priceAsc,priceDesc,alphabeticalAsc,alphabeticalDesc'],
                'searchCriteria' => ['sometimes', 'string', 'in:price,title,category'],
                'search' => ['sometimes', 'string', 'min:3', 'max:25'],
                'categories' => ['sometimes', 'array', 'in:All,Meals,Groceries,Other,Bread & pastries'],
                'min' => ['sometimes', 'integer', 'min:0', 'max:50', 'required_with:min', 'lt:max'],
                'max' => ['sometimes', 'integer', 'min:0', 'max:50', 'required_with:max', 'gt:min'],
            ]);

            $packs = is_null($request->searchCriteria)
                ? Shop::searchShop($request, null, true)
                : Shop::searchShop($request, $request->searchCriteria);

            /* Gets total packs by name of the category */
            $packsByCat = Pack::getPacksByCategory();

            /* Gets the total number of packs */
            $totalCountPacks = Pack::count();

            /*Random packs*/
            $randomPacks = Pack::inRandomOrder()->distinct()->limit(3)->get();
            return view('shop.index', ['packs' => $packs, 'packsByCat' => $packsByCat, 'totalCountPacks' => $totalCountPacks, 'randomPacks' => $randomPacks]);

        } else {
            return view('shop.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
