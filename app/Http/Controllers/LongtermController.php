<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LongtermController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function long_term_store(Request $request)
    {
        //dd($request->marca);
        return view('long_term_store',['request' => $request]);
    }
}
