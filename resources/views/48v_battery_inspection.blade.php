@extends('layouts.app')

@section('content')
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <?php
        //if(isset($request->formrequest))
            
            $formdata=json_decode($request->formrequest);
            
            //dd($formdata);
        //endif
    ?>

<form name="vehicleform" id="vehicleform" method="post" action="{{ route('vehicleform.store') }}">    
@csrf

    <input type="hidden" value="{{$request->marca}}"  id="marca"  name="marca"  >
    <input type="hidden" value="{{$request->modelo}}" id="modelo" name="modelo" >
    <input type="hidden" value="{{$request->motor}}" id="motor" name="motor" >
    <input type="hidden" value="{{$request->chasis}}" id="chasis" name="chasis" >
    <input type="hidden" value="{{$request->anio}}" id="anio" name="anio" >
    <input type="hidden" value="{{$request->version}}" id="version" name="version" >
    <input type="hidden" value="{{$request->colorexterior}}" id="colorexterior" name="colorexterior" >
    <input type="hidden" value="{{$request->colorinterior}}" id="colorinterior" name="colorinterior" >
    <input type="hidden" value="48V Battery Vechicle Inspection and charging Record Form" id="formname" name="formname" >
    <input type="hidden" value=" " id="formrequest" name="formrequest" >
    <input type="hidden" value="battery_inspection" id="formid" name="formid" >
    <input type="hidden" value="{{ route('battery.inspection.view') }}" id="formaction" name="formaction" >

    <div class="container">
        <div class="row">
            <div class="col-9 p-0">
                <h5 class=" text-end fw-bold m-0">48V Battery Vehicle Inspection and charging Record Form</h5>
            </div>
            <div class="col-3 p-0 text-end align-self-center">
                <img src="{{ asset('img/geely.png') }}" class="w-50" alt="Geely">
            </div>
        </div>
    </div>
    
    <br>
    <div class="container border border-dark">
        
        <div class="row border border-dark ">
            <div class="col-sm-4  ">
                <p class="fw-bold ">VIN No: <span class="fs-6">{{ $request->chasis; }}</span></p>
            </div>
           
            
            <div class="col-sm-4" >
                <p class="fw-bold ">The Date Of First Receiving：</p>
                <input type="date" class="form-control border-0 rounded-0" id="" placeholder="">
            </div>
            <div class="col-sm-4 ">
                <p class="fw-bold ">Vehicle production date：</p>
                <input type="date" class="form-control border-0 rounded-0" id="" placeholder="">
            </div>

        </div>
        <div style="height: 200px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark">
                <h1 style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="fs-5 fw-bold "> <span class="fs-6">Project</span>/ Number</h1>
            </div>
  
            <div class="col-md-2 border-end border-dark">
                <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 60px; margin-top: 5px;" class="lh-sm">Checking Date</p>
            </div>
            <div class="col-md-1 border-start border-end border-dark">
                <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-sm">Minimum Cell Voltage/<br>
                <span class="text-danger">Voltaje mínimo de celda</span></p>
            </div>
            <div class="col-md-1 border-start border-end border-dark">
                <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-sm">SOC Value</p>
            </div>
            <div class="col-md-2 border-start border-end border-dark">
                <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 60px; margin-top: 5px;" class="lh-sm">Whether  Need To Charge (Yes or No)<br> <span class="text-danger">Si necesita cargar</span></p>
            </div>
            <div class="col-md-2 border-start border-end border-dark">
                <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 70px; margin-top: 5px;" class="lh-sm">Minimum Cell Voltage（After Charging）<br><span class="text-danger">Voltaje mínimo de celda (Después de cargar)<span></span></p>
            </div>
            <div class="col-md-1 border-start border-end border-dark">
                <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 40px; margin-top: 5px;" class="lh-sm text-wrap">SOC Value（After Charging）<br><span class="text-danger">despues de la carga</span></p>
            </div>
            <div class="col-md-1 border-start border-end border-dark">
                <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-sm">Operator</p>
            </div>
            <div class="col-md-1 border-start border-dark">
                <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-sm">Remarks <br><span class="text-danger">Observaciones</span></p>
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">1</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v1" value="">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v2" value="">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v3" value="">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v4" value="">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v5" value="">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v6" value="">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v7" value="">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v8" value="">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">2</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v9">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v10">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label=""name="v11" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v12">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v13">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v14">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v15">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v16">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">3</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v17">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v18">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v19">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v20">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v21">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v22">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v23">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v24">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">4</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v25">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v26">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v27">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v28">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v29">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v30">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v31">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v32">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">5</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v33">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v34">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v35">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v36">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v37">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v38">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v39">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v40">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">6</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v41">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v42">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v43">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v44">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v45">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v46">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v47">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v48">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">7</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v49">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v50">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v51">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v52">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v53">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v54">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v55">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v56">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">8</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v57">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v58">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v59">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v60">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v61">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v62">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v63">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v64">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">9</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v65">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v66">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v67">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v68">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v69">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v70">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v71">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v72">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">10</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v73">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v74">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v75">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v76">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v77">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v78">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v79">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v80">
            </div>
        </div>
        
    </div>
    <div class="container">
        <div style="height: 100px;" class="row ">
            <div class="h-100 col-md-12 d-flex align-items-center p-1 text-center">
                <button type="submit" class="btn btn-primary mh-100" style="width: 200px; height: 100px;">Guardar</button>
            </div>
        </div>
    </div>
    

</form>
@endsection
