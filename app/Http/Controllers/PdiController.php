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

    public function downloadPdf(Request $request)
    {
        /*
        select
        sum(case when formid = 'handover_check_list' then 1 else 0 end) handover,
        sum(case when formid = 'pdi_check_list' then 1 else 0 end) pdi,
        sum(case when formid = 'battery_inspection' then 1 else 0 end) battery_inspection,
        sum(case when formid = 'long_term_store' then 1 else 0 end) long_term_store
        FROM public.vehicleforms
        where motor = 'JLH3G15TDN2BA5607759'
        group by motor
        */


        $listo = vehicleform::all();
        /* $list = DB::unprepared("select
        min(created_at) as created_at,
        chasis,marca,modelo,version,colorexterior,colorinterior,
        sum(case when formid = 'handover_check_list'then 1 else 0 end) handover,
        sum(case when formid = 'pdi_check_list'		then 1 else 0 end) pdi,
        sum(case when formid = 'battery_inspection'	then 1 else 0 end) battery_inspection,
        sum(case when formid = 'long_term_store'	then 1 else 0 end) long_term_store
        FROM vehicleforms
        GROUP BY chasis,marca,modelo,version,colorexterior,colorinterior;"); */

        $list = DB::table('vehicleforms')
            ->select(DB::raw("min(created_at) as created_at,
                              chasis,marca,modelo,version,colorexterior,colorinterior,
                              sum(case when formid = 'handover_check_list' then 1 else 0 end) handover,
                              sum(case when formid = 'pdi_check_list' then 1 else 0 end) pdi,
                              sum(case when formid = 'battery_inspection' then 1 else 0 end) battery_inspection,
                              sum(case when formid = 'long_term_store' then 1 else 0 end) long_term_store"))
            ->groupBy('chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior')
            ->get();

        $list_handover = DB::table('vehicleforms')
            ->select(DB::raw("created_at,
                              chasis,marca,modelo,version,colorexterior,colorinterior,
                              sum(case when formid = 'handover_check_list' then 1 else 0 end) handover"))
            ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior')
            ->get();

        $list_pdi = DB::table('vehicleforms')
            ->select(DB::raw("created_at,
                              chasis,marca,modelo,version,colorexterior,colorinterior,formrequest,
                              sum(case when formid = 'pdi_check_list' then 1 else 0 end) pdi"))
            ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior','formrequest')
            ->get();

        $list_battery_inspection = DB::table('vehicleforms')
            ->select(DB::raw("created_at,
                              chasis,marca,modelo,version,colorexterior,colorinterior,
                              sum(case when formid = 'battery_inspection' then 1 else 0 end) battery_inspection"))
            ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior')
            ->get();

        $list_long_term_store = DB::table('vehicleforms')
            ->select(DB::raw("created_at,
                              chasis,marca,modelo,version,colorexterior,colorinterior,
                              sum(case when formid = 'long_term_store' then 1 else 0 end) long_term_store"))
            ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior')
            ->get();

        //dump($list);
        $pdf = PDF::loadView('download-pdf', ['list' => $list, 'list_handover' => $list_handover, 'list_pdi' => $list_pdi, 'list_battery_inspection' => $list_battery_inspection, 'list_long_term_store' => $list_long_term_store]);
        return $pdf->download("REPORTE_GENERAL.pdf");
    }
}
