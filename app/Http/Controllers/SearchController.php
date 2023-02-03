<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use App\Models\vehicleform;
use PDF;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        session()->forget('cod_vin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function search_vin(Request $request)
    {
        //dd($request);
        $userData = $request->validate([
            'vin' => 'required|string|max:255',
            'company' => 'required|string|max:255',
        ]);
        $client_token = new Client(['base_uri' => 'https://eskemacloud.hondapanama.com']);
        $http_token   = $client_token->request('GET', '/apiservices/authv2/access_token', [
            'headers' => [

                'client_id' =>  '4cc16ff5a6924dc7a7b8af5d5bb87fb7',
                'clientsecret' => '2a195db7afe042fb8f301b264bfb766749808777511f6acf2d64ddd89899573302554ed',
                'user' => 'formdigi',
                'password' => 'A%h4g7#jK'
            ]
        ]);

        $response_token = json_decode($http_token->getBody()->getContents());
        //dd($request->company);

        $client = new Client(['base_uri' => 'https://eskemacloud.hondapanama.com']);
        $http   = $client->request('POST', '/apiservices/api/formautos/consultachasis', [
            'headers' => [
                'Authorization' => 'Bearer ' . $response_token->level1->access_token,
                'Accept'        => 'application/json',
            ],

            'json' => [
                'ciacod' => $request->company,
                'chasis' => $request->vin
            ]
        ]);
        $response = json_decode($http->getBody()->getContents());

        if (isset($response)) {
            //dd($response);
            $c_vin = $request->vin;
            session()->put('cod_vin', $c_vin);
            //dump($c_vin);
            $data =  $response->sdtconsultaautos->item;
            $data->company = ($request->company == "01") ? "Bahia Motors" : "Bay Motors";

            $shows = vehicleform::where('chasis', '=', $request->vin)->get();
            return view('home', ['data' => $data, 'shows' => $shows]);
        }
        //dd($data);
        return view('home');
        //return view('greetings', ['name' => 'Victoria']);

    }

    public function downloadPdf(Request $request)
    {
        //dd($request);
        //dump($request->DateTrxfrom,$request->DateTrxto);
        $c_vin = $request->chasis;
        //dump($c_vin);
        /*
        select
        sum(case when formid = 'handover_check_list' then 1 else 0 end) handover,
        sum(case when formid = 'pdi_check_list' then 1 else 0 end) pdi,
        sum(case when formid = 'battery_inspection' then 1 else 0 end) battery_inspection,
        sum(case when formid = 'long_term_store' then 1 else 0 end) long_term_store
        FROM public.vehicleforms
        where motor = 'ABCDEFG'
        group by motor
        */
        /* $listo = vehicleform::all();
        $list = DB::unprepared("select
        min(created_at) as created_at,
        chasis,marca,modelo,version,colorexterior,colorinterior,
        sum(case when formid = 'handover_check_list'then 1 else 0 end) handover,
        sum(case when formid = 'pdi_check_list'		then 1 else 0 end) pdi,
        sum(case when formid = 'battery_inspection'	then 1 else 0 end) battery_inspection,
        sum(case when formid = 'long_term_store'	then 1 else 0 end) long_term_store
        FROM vehicleforms
        GROUP BY chasis,marca,modelo,version,colorexterior,colorinterior;"); */

        if ($c_vin == "") {
            $dateFrom = $request->DateTrxfrom ? $request->DateTrxfrom : date('Y-m-d');
            $dateTo = $request->DateTrxto ? $request->DateTrxto : date('Y-m-d');

            $list = DB::table('vehicleforms')
                ->select(DB::raw("min(created_at) as created_at,
                          chasis,marca,modelo,version,colorexterior,colorinterior,
                          sum(case when formid = 'handover_check_list' then 1 else 0 end) handover,
                          sum(case when formid = 'pdi_check_list' then 1 else 0 end) pdi,
                          sum(case when formid = 'battery_inspection' then 1 else 0 end) battery_inspection,
                          sum(case when formid = 'long_term_store' then 1 else 0 end) long_term_store"))
                ->whereDate('created_at', '>=', $dateFrom)->WhereDate('created_at', '<=', $dateTo)
                ->groupBy('chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior')
                ->get();

            $list_handover = DB::table('vehicleforms')
                ->select(DB::raw("created_at,
                          chasis,marca,modelo,version,colorexterior,colorinterior,
                          sum(case when formid = 'handover_check_list' then 1 else 0 end) handover"))
                ->whereDate('created_at', '>=',$dateFrom)->WhereDate('created_at', '<=',  $dateTo)
                ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior')
                ->get();

            $list_pdi = DB::table('vehicleforms')
                ->select(DB::raw("created_at,
                          chasis,marca,modelo,version,colorexterior,colorinterior,formrequest,
                          sum(case when formid = 'pdi_check_list' then 1 else 0 end) pdi"))
                ->whereDate('created_at', '>=', $dateFrom)->WhereDate('created_at', '<=',  $dateTo)
                ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior', 'formrequest')
                ->get();

            $list_battery_inspection = DB::table('vehicleforms')
                ->select(DB::raw("created_at,
                          chasis,marca,modelo,version,colorexterior,colorinterior,
                          sum(case when formid = 'battery_inspection' then 1 else 0 end) battery_inspection"))
                ->whereDate('created_at', '>=', $dateFrom)->WhereDate('created_at', '<=',  $dateTo)
                ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior')
                ->get();

            $list_long_term_store = DB::table('vehicleforms')
                ->select(DB::raw("created_at,
                          chasis,marca,modelo,version,colorexterior,colorinterior,
                          sum(case when formid = 'long_term_store' then 1 else 0 end) long_term_store"))
                ->whereDate('created_at', '>=', $dateFrom)->WhereDate('created_at', '<=',  $dateTo)
                ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior')
                ->get();
        } else {
            $dateFrom = $request->DateTrxfrom ? $request->DateTrxfrom : date('Y-m-d');
            $dateTo = $request->DateTrxto ? $request->DateTrxto : date('Y-m-d');
            $list = DB::table('vehicleforms')
                ->select(DB::raw("min(created_at) as created_at,
                              chasis,marca,modelo,version,colorexterior,colorinterior,
                              sum(case when formid = 'handover_check_list' then 1 else 0 end) handover,
                              sum(case when formid = 'pdi_check_list' then 1 else 0 end) pdi,
                              sum(case when formid = 'battery_inspection' then 1 else 0 end) battery_inspection,
                              sum(case when formid = 'long_term_store' then 1 else 0 end) long_term_store"))
                ->where('chasis', '=', $c_vin)
                ->whereDate('created_at', '>=', $dateFrom)->WhereDate('created_at', '<=', $dateTo)
                ->groupBy('chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior')
                ->get();

            $list_handover = DB::table('vehicleforms')
                ->select(DB::raw("created_at,
                              chasis,marca,modelo,version,colorexterior,colorinterior,
                              sum(case when formid = 'handover_check_list' then 1 else 0 end) handover"))
                ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior')
                ->where('chasis', '=', $c_vin)
                ->whereDate('created_at', '>=', $dateFrom)->WhereDate('created_at', '<=', $dateTo)
                ->having(DB::raw("SUM(CASE WHEN formid = 'handover_check_list' THEN 1 ELSE 0 END)"), 1)
                ->get();

            $list_pdi = DB::table('vehicleforms')
                ->select(DB::raw("created_at,
                              chasis,marca,modelo,version,colorexterior,colorinterior,formrequest,
                              sum(case when formid = 'pdi_check_list' then 1 else 0 end) pdi"))
                ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior', 'formrequest')
                ->where('chasis', '=', $c_vin)
                ->whereDate('created_at', '>=', $dateFrom)->WhereDate('created_at', '<=', $dateTo)
                ->having(DB::raw("sum(case when formid = 'pdi_check_list' then 1 else 0 end)"), 1)
                ->get();

            $list_battery_inspection = DB::table('vehicleforms')
                ->select(DB::raw("created_at,
                              chasis,marca,modelo,version,colorexterior,colorinterior,
                              sum(case when formid = 'battery_inspection' then 1 else 0 end) battery_inspection"))
                ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior')
                ->where('chasis', '=', $c_vin)
                ->whereDate('created_at', '>=', $dateFrom)->WhereDate('created_at', '<=', $dateTo)
                ->having(DB::raw("sum(case when formid = 'battery_inspection' then 1 else 0 end)"), 1)
                ->get();

            $list_long_term_store = DB::table('vehicleforms')
                ->select(DB::raw("created_at,
                              chasis,marca,modelo,version,colorexterior,colorinterior,
                              sum(case when formid = 'long_term_store' then 1 else 0 end) long_term_store"))
                ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior')
                ->where('chasis', '=', $c_vin)
                ->whereDate('created_at', '>=', $dateFrom)->WhereDate('created_at', '<=', $dateTo)
                ->having(DB::raw("sum(case when formid = 'long_term_store' then 1 else 0 end)"), 1)
                ->get();
        }
        //dump($list);
        //session()->forget('cod_vin');
        $pdf = PDF::loadView('download-pdf', ['list' => $list, 'list_handover' => $list_handover, 'list_pdi' => $list_pdi, 'list_battery_inspection' => $list_battery_inspection, 'list_long_term_store' => $list_long_term_store]);
        return $pdf->download("REPORTE_GENERAL.pdf");
    }
}
