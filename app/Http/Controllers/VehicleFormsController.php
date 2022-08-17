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
        //dd($request);
        $validatedData = $request->validate([
            'marca' => 'required|max:255',
            'modelo' => 'required|max:255',
            'motor' => 'required|max:255',
            'chasis' => 'required|max:255',
            'anio' => 'required|max:255',
            'version' => 'required|max:255',
            'colorexterior' => 'required|max:255',
            'colorinterior' => 'required|max:255',
            'formname' => 'required|max:255',
            'formrequest' => 'required',
            'formid' => 'required|max:255',
            'formaction' => 'required|max:255',
        ]);
        vehicleform::create($validatedData);
   
        return redirect('/home')->with('success', 'Formulario guardado satisfactoriamente');   
    }
    public function index()
    {
        $shows = vehicleform::all();

        return view('home', ['shows'=>$shows]);
    }
}
