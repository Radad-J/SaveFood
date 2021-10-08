<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $featuredPacks = Pack::inRandomOrder()->distinct()->limit(8)->get();
        return view('welcome', ['featuredPacks' => $featuredPacks]);
    }

    /**
     * Show the terms and conditions page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function termsConditions()
    {
        return view('terms-and-conditions');
    }

    /**
     * Show the privacy-policy.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

}
