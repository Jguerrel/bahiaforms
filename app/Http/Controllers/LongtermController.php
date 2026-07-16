<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\vehicleform;

class LongtermController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Whether a vehicle is electric (Geely EV drive-unit codes start with "TZ",
     * the version says ELECTRIC, or the model is a Geometry). Electric vehicles
     * get the EV long-term check sheet; everything else keeps the original one.
     */
    private function isEv($marca, $modelo, $motor, $version): bool
    {
        return Str::startsWith(strtoupper((string) $motor), 'TZ')
            || Str::contains(strtoupper((string) $version), 'ELECTRIC')
            || Str::contains(strtoupper((string) $modelo), 'GEOMETRY');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function long_term_store(Request $request)
    {
        if ($this->isEv($request->marca, $request->modelo, $request->motor, $request->version)) {
            return view('ev_long_term_store', [
                'request'  => $request,
                'formdata' => null,
                'sections' => EvLongtermController::sections(),
                'updateId' => null,
            ]);
        }

        return view('long_term_store', ['request' => $request]);
    }

    public function long_term_store_view(Request $request)
    {
        $formdata = json_decode($request->formrequest);

        if ($this->isEv(
            data_get($formdata, 'marca', $request->marca),
            data_get($formdata, 'modelo', $request->modelo),
            data_get($formdata, 'motor', $request->motor),
            data_get($formdata, 'version', $request->version)
        )) {
            return view('ev_long_term_store', [
                'request'  => $request,
                'formdata' => $formdata,
                'sections' => EvLongtermController::sections(),
                'updateId' => null,
            ]);
        }

        return view('long_term_store_view', ['request' => $request]);
    }

    public function edit($id)
    {
        $form = vehicleform::findOrFail($id);
        $title = request('title', null); // Obtener el parámetro 'title' de la URL
        $type = request('type', null); // Obtener el parámetro 'type' de la URL

        // Validar que hayan pasado 24 horas desde la creación del formulario
        $createdAt = $form->created_at;
        $currentTime = now();

        // Calcular la diferencia en horas
        $hoursDifference = $currentTime->diffInHours($createdAt);

        if ($hoursDifference < 24 && $type == 2) {
            return redirect('/home')->with('error', 'No han pasado 24 horas desde la creación del formulario.');
        }

        $formrequest = json_decode($form->formrequest);

        // Electric vehicles use the EV check sheet (same content as the EV
        // "Long-term Stored Vehicle Check Sheet"); it updates this record in place.
        if ($this->isEv($form->marca, $form->modelo, $form->motor, $form->version)) {
            return view('ev_long_term_store', [
                'request'  => $form,
                'formdata' => $formrequest,
                'sections' => EvLongtermController::sections(),
                'updateId' => $form->id,
                'title'    => $title,
            ]);
        }

        return view('long_term_edit', ['request' => $form, 'formdata' => $formrequest, 'title' => $title]);
    }


    public function update(Request $request, $id)
    {
        // Encuentra el registro existente en la base de datos
        $vehicleform = vehicleform::findOrFail($id);

        // Combina los datos del formulario en un solo JSON
        $request->merge(['formrequest' => json_encode($request->all())]);

        // Actualiza el registro en la base de datos
        $vehicleform->update([
            'marca' => $request['marca'] ?? 'NA',
            'modelo' => $request['modelo'] ?? 'NA',
            'motor' => $request['motor'] ?? 'NA',
            'chasis' => $request['chasis'] ?? 'NA',
            'anio' => $request['anio'] ?? 'NA',
            'version' => $request['version'] ?? 'NA',
            'colorexterior' => $request['colorexterior'] ?? 'NA',
            'colorinterior' => $request['colorinterior'] ?? 'NA',
            'formname' => $request['formname'] ?? 'NA',
            'formrequest' => $request['formrequest'] ?? 'NA',
            'formid' => $request['formid'] ?? 'NA',
            'formaction' => $request['formaction'] ?? 'NA',
            'imagen' => $request['imagen'] ?? 'NA',
        ]);

        return redirect('/home')->with('success', 'Formulario actualizado satisfactoriamente');
    }
}
