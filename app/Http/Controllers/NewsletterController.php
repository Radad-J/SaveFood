<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request) {
            $this->validate(request(), [
                'email' => ['required', 'unique:newsletter,email', 'email', 'max:60'],
            ]);
            $newsletter = Newsletter::firstOrCreate(['email' => $request->email]);
            if($newsletter){
                return back()->with('success','You were subscribed to the newsletter successfully');
            }
            else{
                return back()->with('error','Something happened please try again later');
            }
        }

    }
}
