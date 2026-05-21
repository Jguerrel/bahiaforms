<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicleform;
class VehicleFormsController extends Controller
{
    public function create()
    {
        return view('form');

    }

    public function store(Request $request)
    {

        //$request->formrequest=$request;

        $request->merge(['formrequest' => json_encode($request->all())]);
        //Systems::create($data);


        vehicleform::create([
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

        return redirect('/home')->with('success', 'Formulario guardado satisfactoriamente');
    }
    public function index()
    {
        $shows = vehicleform::all();

        return view('home', ['shows'=>$shows]);
    }


}
