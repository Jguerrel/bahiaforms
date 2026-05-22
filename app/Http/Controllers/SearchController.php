<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use GuzzleHttp\Client;
use App\Models\vehicleform;
use PDF;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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

                'client_id' =>  '80ffaaf918604f26a07f97e6cda1b9a9',
                'clientsecret' => '0133a953841246dd93ef396acca5605f35955234c9778b4f44d54b4691824da4926f3b82',
                'user' => 'formdigi',
                'password' => '4d%Gf2&kl'
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
            $companyNames = [
                '01' => 'Bahia Motors',
                '06' => 'Bay Motors',
                '07' => 'Coastal Motors S.A',
            ];
            $data->company = $companyNames[$request->company] ?? $request->company;

            $shows = vehicleform::where('chasis', '=', $request->vin)->get();

           $exists = vehicleform::where('chasis', $request->vin) //si ya existe unr egistro de este chasis con el form  long...
                    ->where('formname', 'Long-term Stored Vehicle Check Sheet')
                    ->first();


            return view('home', ['data' => $data, 'shows' => $shows , 'longTerm' => $exists]);
        }
        //dd($data);
        return view('home');
        //return view('greetings', ['name' => 'Victoria']);

    }

    private function getReportData(Request $request): array
    {
        $c_vin = $request->chasis;

        if ($c_vin == "") {
            $dateFrom = $request->DateTrxfrom ? $request->DateTrxfrom : date('Y-m-d');
            $dateTo = $request->DateTrxto ? $request->DateTrxto : date('Y-m-d');

            $list = DB::table('vehicleforms')
                ->select(DB::raw("min(created_at) as created_at,
                          chasis,marca,modelo,version,colorexterior,colorinterior,formrequest,
                          sum(case when formid = 'handover_check_list' then 1 else 0 end) handover,
                          sum(case when formid = 'pdi_check_list' then 1 else 0 end) pdi,
                          sum(case when formid = 'battery_inspection' then 1 else 0 end) battery_inspection,
                          sum(case when formid = 'long_term_store' then 1 else 0 end) long_term_store"))
                ->whereDate('created_at', '>=', $dateFrom)->WhereDate('created_at', '<=', $dateTo)
                ->groupBy('chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior', 'formrequest')
                ->get();

            $list_handover = DB::table('vehicleforms')
                ->select(DB::raw("created_at,
                          chasis,marca,modelo,version,colorexterior,colorinterior,formrequest,
                          sum(case when formid = 'handover_check_list' then 1 else 0 end) handover"))
                ->whereDate('created_at', '>=',$dateFrom)->WhereDate('created_at', '<=',  $dateTo)
                ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior', 'formrequest')
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
                          chasis,marca,modelo,version,colorexterior,colorinterior,formrequest,
                          sum(case when formid = 'battery_inspection' then 1 else 0 end) battery_inspection"))
                ->whereDate('created_at', '>=', $dateFrom)->WhereDate('created_at', '<=',  $dateTo)
                ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior', 'formrequest')
                ->get();

            $list_long_term_store = DB::table('vehicleforms')
                ->select(DB::raw("created_at,
                          chasis,marca,modelo,version,colorexterior,colorinterior,formrequest,
                          sum(case when formid = 'long_term_store' then 1 else 0 end) long_term_store"))
                ->whereDate('created_at', '>=', $dateFrom)->WhereDate('created_at', '<=',  $dateTo)
                ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior', 'formrequest')
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
                              chasis,marca,modelo,version,colorexterior,colorinterior,formrequest,
                              sum(case when formid = 'handover_check_list' then 1 else 0 end) handover"))
                ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior' , 'formrequest')
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
                              chasis,marca,modelo,version,colorexterior,colorinterior,formrequest,
                              sum(case when formid = 'battery_inspection' then 1 else 0 end) battery_inspection"))
                ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior', 'formrequest')
                ->where('chasis', '=', $c_vin)
                ->whereDate('created_at', '>=', $dateFrom)->WhereDate('created_at', '<=', $dateTo)
                ->having(DB::raw("sum(case when formid = 'battery_inspection' then 1 else 0 end)"), 1)
                ->get();

            $list_long_term_store = DB::table('vehicleforms')
                ->select(DB::raw("created_at,
                              chasis,marca,modelo,version,colorexterior,colorinterior,formrequest,
                              sum(case when formid = 'long_term_store' then 1 else 0 end) long_term_store"))
                ->groupBy('created_at', 'chasis', 'marca', 'modelo', 'version', 'colorexterior', 'colorinterior', 'formrequest')
                ->where('chasis', '=', $c_vin)
                ->whereDate('created_at', '>=', $dateFrom)->WhereDate('created_at', '<=', $dateTo)
                ->having(DB::raw("sum(case when formid = 'long_term_store' then 1 else 0 end)"), 1)
                ->get();
        }

        // Los timestamps están almacenados en UTC; los reportes deben mostrarse en hora de Panamá.
        $toPanama = function ($rows) {
            foreach ($rows as $row) {
                if (!empty($row->created_at)) {
                    $row->created_at = Carbon::parse($row->created_at, 'UTC')
                        ->setTimezone('America/Panama')
                        ->format('Y-m-d H:i:s');
                }
            }
            return $rows;
        };

        return [
            'list' => $toPanama($list),
            'list_handover' => $toPanama($list_handover),
            'list_pdi' => $toPanama($list_pdi),
            'list_battery_inspection' => $toPanama($list_battery_inspection),
            'list_long_term_store' => $toPanama($list_long_term_store),
        ];
    }

    public function downloadPdf(Request $request)
    {
        // Reportes grandes pueden tardar minutos en DOMPDF — quitar el límite por request.
        set_time_limit(0);

        $pdf = PDF::loadView('download-pdf', $this->getReportData($request));
        return $pdf->download("REPORTE_GENERAL.pdf");
    }

    public function downloadExcel(Request $request)
    {
        set_time_limit(0);

        $data = $this->getReportData($request);
        $spreadsheet = new Spreadsheet();
        $spreadsheet->removeSheetByIndex(0);

        $this->addSummarySheet($spreadsheet, $data['list']);
        $this->addHandoverSheet($spreadsheet, $data['list_handover']);
        $this->addLongTermSheet($spreadsheet, $data['list_long_term_store']);
        $this->addPdiSheet($spreadsheet, $data['list_pdi']);
        $this->addBatterySheet($spreadsheet, $data['list_battery_inspection']);

        $spreadsheet->setActiveSheetIndex(0);

        $writer = new Xlsx($spreadsheet);
        $filename = 'REPORTE_GENERAL.xlsx';

        return response()->streamDownload(
            function () use ($writer) { $writer->save('php://output'); },
            $filename,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Cache-Control' => 'max-age=0, no-cache, must-revalidate, post-check=0, pre-check=0',
            ]
        );
    }

    private function addSummarySheet(Spreadsheet $book, $list): void
    {
        $sheet = $book->createSheet();
        $sheet->setTitle('Resumen');
        $headers = ['Marca temporal','Numero Vim','KMS','Marca','Modelo','Versión','Color del automóvil','HANDOVER','LONG TERM','PDI','48V BATTERY'];
        $this->writeHeader($sheet, $headers);

        $row = 2;
        foreach ($list as $d) {
            $sheet->fromArray([
                (string) $d->created_at,
                $d->chasis,
                'kms',
                $d->marca,
                $d->modelo,
                $d->version,
                $d->colorexterior . '-' . $d->colorinterior,
                $d->handover > 0 ? 'Inspeccionado' : '',
                $d->long_term_store > 0 ? 'Inspeccionado' : '',
                $d->pdi > 0 ? 'Inspeccionado' : '',
                $d->battery_inspection > 0 ? 'Inspeccionado' : '',
            ], null, "A{$row}");
            $row++;
        }
        $this->autosize($sheet, count($headers));
    }

    private function addHandoverSheet(Spreadsheet $book, $list): void
    {
        $sheet = $book->createSheet();
        $sheet->setTitle('Handover');
        $headers = ['Marca temporal','Numero Vim','KMS','Marca','Modelo','Versión','Color del automóvil','Inspector'];
        $this->writeHeader($sheet, $headers);

        $row = 2;
        foreach ($list as $d) {
            if ($d->handover <= 0) continue;
            $form = json_decode($d->formrequest);
            $sheet->fromArray([
                (string) $d->created_at, $d->chasis, 'kms', $d->marca, $d->modelo, $d->version,
                $d->colorexterior . '-' . $d->colorinterior,
                $form->v11 ?? '',
            ], null, "A{$row}");
            $row++;
        }
        $this->autosize($sheet, count($headers));
    }

    private function addLongTermSheet(Spreadsheet $book, $list): void
    {
        $sheet = $book->createSheet();
        $sheet->setTitle('Long Term');
        $headers = ['Marca temporal','Numero Vim','KMS','Marca','Modelo','Versión','Color del automóvil','Inspector'];
        $this->writeHeader($sheet, $headers);

        $row = 2;
        foreach ($list as $d) {
            if ($d->long_term_store <= 0) continue;
            $form = json_decode($d->formrequest);
            $sheet->fromArray([
                (string) $d->created_at, $d->chasis, 'kms', $d->marca, $d->modelo, $d->version,
                $d->colorexterior . '-' . $d->colorinterior,
                $form->v120 ?? '',
            ], null, "A{$row}");
            $row++;
        }
        $this->autosize($sheet, count($headers));
    }

    private function addPdiSheet(Spreadsheet $book, $list): void
    {
        $sheet = $book->createSheet();
        $sheet->setTitle('PDI');
        $headers = ['Marca temporal','Numero Vim','# Auto','KMS','Marca','Modelo','Versión','Color del automóvil','Inspector','Registro de fallas y reparaciones'];
        $this->writeHeader($sheet, $headers);

        $row = 2;
        foreach ($list as $d) {
            if ($d->pdi <= 0) continue;
            $form = json_decode($d->formrequest);
            $sheet->fromArray([
                (string) $d->created_at, $d->chasis,
                $form->v162 ?? '',
                ($form->v170 ?? '') . ' kms',
                $d->marca, $d->modelo, $d->version,
                $d->colorexterior . '-' . $d->colorinterior,
                $form->v164 ?? '',
                $form->v187 ?? '',
            ], null, "A{$row}");
            $row++;
        }
        $this->autosize($sheet, count($headers));
    }

    private function addBatterySheet(Spreadsheet $book, $list): void
    {
        $sheet = $book->createSheet();
        $sheet->setTitle('48V Battery');
        $headers = ['Marca temporal','Numero Vim','KMS','Marca','Modelo','Versión','Color del automóvil','Inspector'];
        $this->writeHeader($sheet, $headers);

        $row = 2;
        foreach ($list as $d) {
            if ($d->battery_inspection <= 0) continue;
            $form = json_decode($d->formrequest);
            $sheet->fromArray([
                (string) $d->created_at, $d->chasis,
                ($form->v170 ?? '') . ' kms',
                $d->marca, $d->modelo, $d->version,
                $d->colorexterior . '-' . $d->colorinterior,
                $form->v120 ?? '',
            ], null, "A{$row}");
            $row++;
        }
        $this->autosize($sheet, count($headers));
    }

    private function writeHeader($sheet, array $headers): void
    {
        $sheet->fromArray($headers, null, 'A1');
        $lastCol = $sheet->getHighestColumn();
        $sheet->getStyle("A1:{$lastCol}1")->getFont()->setBold(true)->getColor()->setRGB('FFFFFF');
        $sheet->getStyle("A1:{$lastCol}1")->getFill()
            ->setFillType(Fill::FILL_SOLID)
            ->getStartColor()->setRGB('246355');
        $sheet->getStyle("A1:{$lastCol}1")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
        $sheet->freezePane('A2');
    }

    private function autosize($sheet, int $columnCount): void
    {
        for ($i = 1; $i <= $columnCount; $i++) {
            $col = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($i);
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
    }
}
