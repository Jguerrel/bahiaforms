<?php

namespace App\Http\Controllers;

use App\Models\vehicleform;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\DB;

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
        return view('pdi_check_list', ['request' => $request]);
    }
    public function pdi_check_list_view(Request $request)
    {
        //dd($request->marca);
        //dump($request);
        return view('pdi_check_list_view', ['request' => $request]);
    }

}
