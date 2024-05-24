<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicleform;

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
    public function long_term_store_view(Request $request)
    {
        //dd($request->marca);

        return view('long_term_store_view',['request' => $request]);
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
