<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatteryController extends Controller
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
    public function battery_inspection(Request $request)
    {
        //dd($request->marca);
        return view('48v_battery_inspection',['request' => $request]);
    }
}
