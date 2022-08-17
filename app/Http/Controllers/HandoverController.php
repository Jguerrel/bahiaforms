<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandoverController extends Controller
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
    public function handover_check_list(Request $request)
    {
        //dd($request->marca);
        return view('handover_check_list',['request' => $request]);
    }
    public function handover_check_list_view(Request $request)
    {
        //dd($request->marca);
        return view('handover_check_list_view',['request' => $request]);
    }
}
