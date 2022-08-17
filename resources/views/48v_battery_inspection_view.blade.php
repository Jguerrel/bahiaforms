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
    <input type="hidden" value="{{ route('battery.inspection') }}" id="formaction" name="formaction" >

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
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v1" value="{{$formdata->v1}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v2" value="{{$formdata->v2}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v3" value="{{$formdata->v3}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v4" value="{{$formdata->v4}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v5" value="{{$formdata->v5}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v6" value="{{$formdata->v6}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v7" value="{{$formdata->v7}}">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v8" value="{{$formdata->v8}}">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">2</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v9" value="{{$formdata->v9}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v10" value="{{$formdata->v10}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v11" value="{{$formdata->v11}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v12" value="{{$formdata->v12}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v13" value="{{$formdata->v13}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v14" value="{{$formdata->v14}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v15" value="{{$formdata->v15}}">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v16" value="{{$formdata->v16}}">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">3</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v17" value="{{$formdata->v17}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v18" value="{{$formdata->v18}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v19" value="{{$formdata->v19}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v20" value="{{$formdata->v20}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v21" value="{{$formdata->v21}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v22" value="{{$formdata->v22}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v23" value="{{$formdata->v23}}">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v24" value="{{$formdata->v24}}">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">4</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v25" value="{{$formdata->v25}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v26" value="{{$formdata->v26}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v27" value="{{$formdata->v27}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v28" value="{{$formdata->v28}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v29" value="{{$formdata->v29}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v30" value="{{$formdata->v30}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v31" value="{{$formdata->v31}}">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v32" value="{{$formdata->v32}}">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">5</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v33" value="{{$formdata->v33}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v34" value="{{$formdata->v34}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v35" value="{{$formdata->v35}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v36" value="{{$formdata->v36}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v37" value="{{$formdata->v37}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v38" value="{{$formdata->v38}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v39" value="{{$formdata->v39}}">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v40" value="{{$formdata->v40}}">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">6</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v41" value="{{$formdata->v41}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v42" value="{{$formdata->v42}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v43" value="{{$formdata->v43}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v44" value="{{$formdata->v44}}" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v45" value="{{$formdata->v45}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v46" value="{{$formdata->v46}}" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v47" value="{{$formdata->v47}}" >
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v48" value="{{$formdata->v48}}">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">7</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v49" value="{{$formdata->v49}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v50" value="{{$formdata->v50}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v51" value="{{$formdata->v51}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v52" value="{{$formdata->v52}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v53" value="{{$formdata->v53}}" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v54" value="{{$formdata->v54}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v55" value="{{$formdata->v55}}">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v56" value="{{$formdata->v56}}">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">8</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v57" value="{{$formdata->v57}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v58" value="{{$formdata->v58}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v59" value="{{$formdata->v59}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v60" value="{{$formdata->v60}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v61" value="{{$formdata->v61}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v62" value="{{$formdata->v62}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v63" value="{{$formdata->v63}}">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v64" value="{{$formdata->v64}}">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">9</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v65" value="{{$formdata->v65}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v66" value="{{$formdata->v66}}" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v67" value="{{$formdata->v67}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v68" value="{{$formdata->v68}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v69" value="{{$formdata->v69}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v70" value="{{$formdata->v70}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v71" value="{{$formdata->v71}}">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v72" value="{{$formdata->v72}}">
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">10</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" name="v73" value="{{$formdata->v73}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v74" value="{{$formdata->v74}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v75" value="{{$formdata->v75}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v76" value="{{$formdata->v76}}">
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v77" value="{{$formdata->v77}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v78" value="{{$formdata->v78}}">
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v79" value="{{$formdata->v79}}">
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" name="v80" value="{{$formdata->v80}}">
            </div>
        </div>
        
    </div>
    
    

</form>
@endsection
