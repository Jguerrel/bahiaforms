<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdiController extends Controller
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
    public function pdi_check_list(Request $request)
    {
        //dd($request->marca);
        return view('pdi_check_list',['request' => $request]);
    }
}
