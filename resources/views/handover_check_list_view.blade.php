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
    <div class="container">
        <div class="row">
            <div class="col-9 p-0">
                <h1 class="fs-2 text-end fw-bold m-0">Handover Check List <span class="fs-5">Lista de verificación de entrega</span></h1>
            </div>
            <div class="col-3 p-0 text-end align-self-center">
            <img src="{{ asset('img/geely.png') }}" class="w-50" alt="Geely">
            </div>
        </div>
    </div>
    <br>
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
    <input type="hidden" value="Handover Check List" id="formname" name="formname" >
    <input type="hidden" value=" " id="formrequest" name="formrequest" >
    <input type="hidden" value="handover_check_list" id="formid" name="formid" >
    <input type="hidden" value="{{ route('handover.check.view') }}" id="formaction" name="formaction" >
    <div class="container border border-dark">
        <div class="row bg-secondary d-flex align-items-stretch">
            <div class="col-sm-3 border border-dark d-flex align-items-center">
                <p class="text-center text-white m-0 w-100">Company/(compañia)</p>
            </div>
            <div class="col-sm-3 border border-dark d-flex align-items-center">
                <p class="text-center text-white m-0 w-100">Vehicle identification number (VIN) Chasis</p>
            </div>
            <div class="col-sm-3 border border-dark d-flex align-items-center">
                <p class="text-center text-white m-0 w-100">Inspection date Fecha</p>
            </div>
            <div class="col-sm-3 border border-dark d-flex align-items-center">
                <p class="text-center text-white m-0 w-100">R.O#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 p-0 border border-dark">
                <input name="v216" value="{{$formdata->v216}}" type="text" class="form-control border-0 rounded-0 text-center "  placeholder="">
            </div>
            <div class="col-sm-3 p-0 border border-dark">
                <input name="v217" value="{{$formdata->v217}}" type="text" class="form-control border-0 rounded-0 text-center " id="chasis" placeholder="" value="{{ $request->chasis; }}
">
            </div>
            <div class="col-sm-3 p-0 border border-dark">
                <input name="v218" value="{{$formdata->v218}}" type="date" class="form-control border-0 rounded-0"  placeholder="">
            </div>
            <div class="col-sm-3 p-0 border border-dark">
                <input name="v219" value="{{$formdata->v219}}" type="text" class="form-control border-0 rounded-0 text-center "  placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 border border-dark">
                <p>*Company: distributor, insurance company, shipping agent, etc. Empresa: distribuidor, compañía de seguros, agente marítimo, etc.</p>
                <p>External inspection Inspección externa</p>
                <p>Circle the part of vehicle that has problem or defect. Encierre en un círculo la parte del vehículo que tiene el problema o defecto.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 border border-dark text-center">
                <p><b>Sedan</b></p>
                <img src="{{ asset('img/sedan.png') }}" alt="Sedan">
            </div>
            <div class="col-12 col-sm-6 border border-dark text-center">
                <p><b>SUV</b></p>
                <img src="{{ asset('img/suv.png') }}" alt="SUV">
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12">
                <label for="" class="form-label">► Describe each problem or defect, and indicate the completion state on the right side after parts replacement or repair. Describa cada problema o defecto e indique el estado de finalización en el lado derecho después del reemplazo o reparación de piezas</label>
            </div>
            <div class="col-6">
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" >1) </span>
                    <input name="v1" value="{{$formdata->v1}}" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" >2) </span>
                    <input name="v2" value="{{$formdata->v2}}" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" >3) </span>
                    <input name="v3"value="{{$formdata->v3}}" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" >4) </span>
                    <input name="v4" value="{{$formdata->v4}}" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" >5) </span>
                    <input name="v5" value="{{$formdata->v5}}" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" >6) </span>
                    <input name="v6" value="{{$formdata->v6}}" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" >7) </span>
                    <input name="v7" value="{{$formdata->v7}}" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" >8) </span>
                    <input name="v8" value="{{$formdata->v8}}" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" >9) </span>
                    <input name="v9" value="{{$formdata->v9}}" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" >10) </span>
                    <input name="v10" value="{{$formdata->v10}}" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
            </div>
            <div class="col-12">
                <p>🞛Inspection of vehicle-mounted parts Inspección de piezas montadas en vehículos</p>
            </div>
            <div class="col-12 mb-3">
                <label for="" class="form-label">► Write down the items that new cars should have had but are missing. Anote los artículos que deberían haber tenido los autos nuevos pero faltan</label>
                <textarea class="form-control rounded-0 border border-dark" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-12 mb-4">
                <p>※ Vehicle-mounted parts (vary with vehicle type and optional item) Piezas montadas en el vehículo (varían según el tipo de vehículo y el artículo opcional)</p>
                <p>Owner’s Manual, tool kit, cigarette lighter, jack, remote controller, spare wheel, etc. Manual de instrucciones, juego de herramientas, encendedor, gato, mando a distancia, rueda de repuesto, etc.</p>
            </div>
            <div class="col-6">
                <center>
                    <input name="v11" value="{{$formdata->v11}}" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark mb-2 text-center w-75" placeholder="" aria-label="" aria-describedby="">
                    <p class="form-label">Signature of inspector</p>
                </center>
            </div>
            <div class="col-6">
                <center>
                    <input name="v12" value="{{$formdata->v12}}" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark mb-2 text-center w-75" placeholder="" aria-label="" aria-describedby="">
                    <p class="form-label">Signature of distributor</p>
                </center>
            </div>
        </div>
    </div>
    <br>
    <div class="container border border-dark">
        <div class="row border border-dark">
            <div class="col-6 d-flex align-items-center">
                <img src="{{ asset('img/geely.png') }}" class="w-25" alt="Geely">
            </div>
            <div class="col-6">
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-0 ps-0" >Waybill No.: </span>
                    <input name="v13" value="{{$formdata->v13}}" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-0 ps-0" >(BOL).: </span>
                    <input name="v220" value="{{$formdata->v220}}" type="text" class="form-control rounded-0 border-0" placeholder="" aria-label="" aria-describedby="">
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center">
                <div class="input-group d-block">
                    <span class="input-group-text p-0 bg-transparent border-0" id="basic-addon1">No.</span>
                    <input name="v14" value="{{$formdata->v14}}" type="text" class="form-control w-100 ps-0 border-0 rounded-0" placeholder="1" aria-label="" aria-describedby="">
                </div>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center">
                <div class="input-group d-block">
                    <span class="input-group-text p-0 bg-transparent border-0" id="basic-addon1">Model</span>
                    <input name="v15" value="{{$formdata->v15}}" type="text" class="form-control w-100 ps-0 border-0 rounded-0" placeholder="" value="{{$request->modelo}}" aria-label="" aria-describedby="">
                </div>
            </div>
            <div class="col-2 border-start border-end border-dark d-flex align-items-center">
                <div class="input-group d-block">
                    <span class="input-group-text p-0 bg-transparent border-0" >Configuration</span>
                    <select name="v16" value="{{$formdata->v16}}" class="form-select ps-0 pe-0 border-0 rounded-0 w-100" >
                        <option selected>Choose...</option>
                        <option value="1">Manual</option>
                        <option value="2">Automatic</option>
                    </select>
                </div>
            </div>
            <div class="col-8 border-start border-dark d-flex align-items-center p-0">
                <p class="text-center m-0 w-100">VIN</p>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-4 border-end border-dark d-flex align-items-center pe-0">
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-0 ps-0" >Kilometraje (Km)</span>
                    <input name="v17" value="{{$formdata->v17}}" type="number" class="form-control rounded-0 border-0 border-start border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
            </div>
            <div class="col-8 border-start border-dark d-flex align-items-center p-0" id="phoneInput">
                <div class="input-group h-100">
                    <input name="v18" value="{{$formdata->v18}}" type="text" class="form-control border-0 p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v19" value="{{$formdata->v19}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v20" value="{{$formdata->v20}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v21" value="{{$formdata->v21}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v22" value="{{$formdata->v22}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v23" value="{{$formdata->v23}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v24" value="{{$formdata->v24}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v25" value="{{$formdata->v25}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v26" value="{{$formdata->v26}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v27" value="{{$formdata->v27}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v28" value="{{$formdata->v28}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v29" value="{{$formdata->v29}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v30" value="{{$formdata->v30}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v31" value="{{$formdata->v31}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v32" value="{{$formdata->v32}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v33" value="{{$formdata->v33}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v34" value="{{$formdata->v34}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v35" value="{{$formdata->v35}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v36" value="{{$formdata->v36}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v37" value="{{$formdata->v37}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v38" value="{{$formdata->v38}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v39" value="{{$formdata->v39}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v40" value="{{$formdata->v40}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v41" value="{{$formdata->v41}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v42" value="{{$formdata->v42}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v43" value="{{$formdata->v43}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v44" value="{{$formdata->v44}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v45" value="{{$formdata->v45}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v46" value="{{$formdata->v46}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input name="v47" value="{{$formdata->v47}}" type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-6 border-end border-dark pt-3 pb-3">
                <img src="{{ asset('img/partes.png') }}" class="img-fluid" alt="Partes del Auto">
            </div>
            <div class="col-6 border-start border-dark d-flex align-items-center">
                <div>
                    <p>Necessities for vehicle Necesidades para vehiculo</p>
                    <ol type="A" class="ps-4">
                        <li>Emergency stop sign Señal de parada de emergencia</li>
                        <li>Jack Gato</li>
                        <li>Tow hook Gancho de remolque</li>
                        <li>Driver's tools herramientas del conductor</li>
                        <li>Spare wheel Rueda de repuesto</li>
                        <li>Ignition key Llave de ignición</li>
                        <li>Other Otros</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark">
                <p class="m-0">Inspection point<br>Puntos de inspeccion</p>
            </div>
            <div class="col-12 col-sm-3 border-start border-end border-dark">
                <p class="m-0">Distributor inspection<br>Inspección del distribuidor</p>
            </div>
            <div class="col-12 col-sm-3 border-start border-end border-dark">
                <p class="m-0">Transporter inspection<br>Inspección del transportista</p>
            </div>
            <div class="col-12 col-sm-3 border-start border-dark">
                <p class="m-0">Dealer inspection<br>Inspeccion del distribuidor</p>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-1 col-sm-3 border-end border-dark  align-items-center">
                <p class="m-0 lh-sm">Defect No.</p>
            </div>
            <div class="col-11 col-sm-9 border-start border-dark">
            
                <div style="height:200px" class="row">
                    <div class="col-1 border-end border-dark  ">
                        <div style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-1">Vehicle No</div>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark ">
                        <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-1">Defect location ubicacion del defecto</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark ">
                        <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-1">Defect code código del defecto</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark ">
                        <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-1">Defect degree and damage area grado del defecto y area del daño</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark ">
                        <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-1">Vehicle No</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark ">
                        <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-1">Defect location</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark ">
                        <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-1">Defect code</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark ">
                        <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-1">Defect degree and damage area</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark ">
                        <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-1">Vehicle No</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark ">
                        <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-1">Defect location</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark ">
                        <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-1">Defect code</p>
                    </div>
                    <div class="col-1 border-start border-dark ">
                        <p style="transform: rotate(90deg);transform-origin: top left;width: 180px;margin-left: 30px; margin-top: 5px;" class="lh-1">Defect degree and damage area</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">A - Wear</p>
            </div>
            <div class="col-12 col-sm-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v48" {{isset($formdata->v48)? __('checked') : __('') }}  class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v49" {{isset($formdata->v49)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v50" {{isset($formdata->v50)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v51" {{isset($formdata->v51)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v52" {{isset($formdata->v52)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v53" {{isset($formdata->v53)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v54" {{isset($formdata->v54)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v55" {{isset($formdata->v55)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v56" {{isset($formdata->v56)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v57" {{isset($formdata->v57)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v58" {{isset($formdata->v58)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v59" {{isset($formdata->v59)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">B – Damage Daño</p>
            </div>
            <div class="col-12 col-sm-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v60" {{isset($formdata->v60)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v61" {{isset($formdata->v61)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v62" {{isset($formdata->v62)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v63" {{isset($formdata->v63)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v64" {{isset($formdata->v64)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v65" {{isset($formdata->v65)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v66" {{isset($formdata->v66)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v67" {{isset($formdata->v67)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v68" {{isset($formdata->v68)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v69" {{isset($formdata->v69)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v70" {{isset($formdata->v70)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v71" {{isset($formdata->v71)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">C – Notch muesca/corte</p>
            </div>
            <div class="col-12 col-sm-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v72" {{isset($formdata->v72)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v73" {{isset($formdata->v73)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v74" {{isset($formdata->v74)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v75" {{isset($formdata->v75)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v76" {{isset($formdata->v76)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v77" {{isset($formdata->v77)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v78" {{isset($formdata->v78)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v79" {{isset($formdata->v79)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v80" {{isset($formdata->v80)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v81" {{isset($formdata->v81)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v82" {{isset($formdata->v82)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v83" {{isset($formdata->v83)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">D – Pit picadura</p>
            </div>
            <div class="col-12 col-sm-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v84" {{isset($formdata->v84)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v85" {{isset($formdata->v85)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v86" {{isset($formdata->v86)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v87" {{isset($formdata->v87)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v88" {{isset($formdata->v88)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v89" {{isset($formdata->v89)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v90" {{isset($formdata->v90)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v91" {{isset($formdata->v91)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v221" {{isset($formdata->v221)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v92" {{isset($formdata->v92)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v93" {{isset($formdata->v93)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v94" {{isset($formdata->v94)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">G - Glass damage daño en vidrios</p>
            </div>
            <div class="col-12 col-sm-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v95" {{isset($formdata->v95)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v96" {{isset($formdata->v96)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v97" {{isset($formdata->v97)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v98" {{isset($formdata->v98)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v99" {{isset($formdata->v99)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v100" {{isset($formdata->v100)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v222" {{isset($formdata->v222)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v101" {{isset($formdata->v101)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v102" {{isset($formdata->v102)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v103" {{isset($formdata->v103)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v104" {{isset($formdata->v104)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v105" {{isset($formdata->v105)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">I - Body corrosion corrosión en carrocería</p>
            </div>
            <div class="col-12 col-sm-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v106" {{isset($formdata->v106)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v107" {{isset($formdata->v107)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v108" {{isset($formdata->v108)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v109" {{isset($formdata->v109)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v110" {{isset($formdata->v110)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v111" {{isset($formdata->v111)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v112" {{isset($formdata->v112)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v223" {{isset($formdata->v223)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v113" {{isset($formdata->v113)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v114" {{isset($formdata->v114)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v115" {{isset($formdata->v115)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v116" {{isset($formdata->v116)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">M - Missing parts partes faltantes</p>
            </div>
            <div class="col-12 col-sm-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v117" {{isset($formdata->v117)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v118" {{isset($formdata->v118)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v119" {{isset($formdata->v119)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v120" {{isset($formdata->v120)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v121" {{isset($formdata->v121)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v122" {{isset($formdata->v122)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v123" {{isset($formdata->v123)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v124" {{isset($formdata->v124)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v125" {{isset($formdata->v125)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v126" {{isset($formdata->v126)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v127" {{isset($formdata->v127)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v128" {{isset($formdata->v128)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">S – Scratch rayas o rasguños</p>
            </div>
            <div class="col-12 col-sm-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v129" {{isset($formdata->v129)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v130" {{isset($formdata->v130)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v131" {{isset($formdata->v131)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v132" {{isset($formdata->v132)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v133" {{isset($formdata->v133)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v134" {{isset($formdata->v134)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v135" {{isset($formdata->v135)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v136" {{isset($formdata->v136)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v137" {{isset($formdata->v137)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v138" {{isset($formdata->v138)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v139" {{isset($formdata->v139)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v140" {{isset($formdata->v140)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">Remarks Observaciones</p>
            </div>
            <div class="col-12 col-sm-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v141" {{isset($formdata->v141)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v142" {{isset($formdata->v142)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v143" {{isset($formdata->v143)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v144" {{isset($formdata->v144)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v145" {{isset($formdata->v145)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v146" {{isset($formdata->v146)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v147" {{isset($formdata->v147)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v148" {{isset($formdata->v148)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v149" {{isset($formdata->v149)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v150" {{isset($formdata->v150)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v151" {{isset($formdata->v151)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input name="v152" {{isset($formdata->v152)? __('checked') : __('') }}" class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox"  >
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark d-flex align-items-center text-center">
                <p class="m-0 text-start lh-sm">Confirmed by delivery side:<br>Confirmado por la parte que entrega<br>Signature firma:</p>
            </div>
            <div class="col-12 col-sm-9 border-start border-dark d-flex align-items-center text-center p-0">
                <input name="v224" value="{{$formdata->v224}}" type="text" class="form-control rounded-0 border-0 h-100"  placeholder="">
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark d-flex align-items-center text-center">
                <p class="m-0 text-start lh-sm">Confirmed by receiving party:<br>Confirmado por la parte que recibe<br>Signature firma:</p>
            </div>
            <div class="col-12 col-sm-9 border-start border-dark d-flex align-items-center text-center p-0">
                <input name="v153" value="{{$formdata->v153}}" type="text" class="form-control rounded-0 border-0 h-100"  placeholder="">
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark d-flex align-items-center text-center">
                <p class="m-0 text-start lh-sm">Inspection date fecha de inspección</p>
            </div>
            <div class="col-12 col-sm-9 border-start border-dark d-flex align-items-center text-center p-0">
                <input name="v154" value="{{$formdata->v154}}" type="date" class="form-control rounded-0 border-0 h-100"  placeholder="">
            </div>
        </div>
    </div> 
    <br>
    <div class="container">
        <div class="row border-bottom border-dark">
            <div class="col-12 p-0">
                <p class="fw-bold">Damage location code: codigo de ubicación del daño</p>
            </div>
        </div>
    </div>
    <div class="container border border-dark">
        <!-- 1 - 22 - 42  -->
        <div class="row border border-top-0 border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center ">
                <div class="position-relative d-flex align-items-center w-100 h-100" >
                    <p class="m-0 align-self-center text-center w-100 lh-sm">1</p>
                    <div class="position-absolute top-50 start-50 translate-middle" >
                        <input name="v155" {{isset($formdata->v155)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark  mt-0 check-r" type="checkbox"  >
                    </div>
                    

                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front bumper LH defensa delantera lado izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">22</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v156" {{isset($formdata->v156)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark  mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear lamp LH lámpara trasera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">42</p>
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <input name="v157" {{isset($formdata->v157)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front bumper RH defense delantera lado derecho</p>
            </div>
        </div>
        <!-- 2 - 23 - 43  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">2</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v158" {{isset($formdata->v158)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front spoiler LH moldura delantera lado izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">23</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v159" {{isset($formdata->v159)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear lamp RH lámpara trasera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">43</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v160" {{isset($formdata->v160)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front spoiler RH moldura delantera lado derecho</p>
            </div>
        </div>
        <!-- 3 - 24 - 44  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">3</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v161" {{isset($formdata->v161)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front wing LH guardafango delatero izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">24</p>
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <input name="v162" {{isset($formdata->v162)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear door/boot door puerta del maletero</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">44</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v163" {{isset($formdata->v163)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front spoiler spoiler delantero</p>
            </div>
        </div>
        <!-- 4 - 25 - 45  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">4</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v164" {{isset($formdata->v164)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front wheel arch LH pollera delantera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">25</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v165" {{isset($formdata->v165)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear glass vidrio trasero</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">45</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v166" {{isset($formdata->v166)? __('checked') : __('') }}" style="width: 40px !important;"   class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front bumper defense delantera</p>
            </div>
        </div>
        <!-- 5 - 26 - 46  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">5</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v167" {{isset($formdata->v167)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front rim LH rin delantero izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">26</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v168" {{isset($formdata->v168)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear spoiler RH moldura trasera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">46</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v169" {{isset($formdata->v169)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front lamp LH and left steering lamp luz delantera y luz direccional izquierda</p>
            </div>
        </div>
        <!-- 6 - 27 - 47  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">6</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v170" {{isset($formdata->v170)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front tire LH llanta delantera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">27</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v171" {{isset($formdata->v171)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear bumper RH defense trasera lado derecho</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">47</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v172" {{isset($formdata->v172)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front lamp RH and right steering lamp luz delantera y luz direccional derecha</p>
            </div>
        </div>
        <!-- 7 - 28 - 48  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">7</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v173" {{isset($formdata->v173)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Left rearview retrovisor izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">28</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v174" {{isset($formdata->v174)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear panel RH guardafango trasero derecho</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">48</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v175" {{isset($formdata->v175)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Searchlight (if installed) Reflector (si está instalado)</p>
            </div>
        </div>
        <!-- 8 - 29 - 49  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">8</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v176" {{isset($formdata->v176)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Body carrocería</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">29</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v177" {{isset($formdata->v177)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Fuel tank cap and frame tapa de combustible</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">49</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v178" {{isset($formdata->v178)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front grill parrilla delantera</p>
            </div>
        </div>
        <!-- 9 - 30 - 50  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">9</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v179" {{isset($formdata->v179)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front door LH puerta delantera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">30</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v180" {{isset($formdata->v180)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear wheel arch RH pollera trasera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">50</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v181" {{isset($formdata->v181)? __('checked') : __('') }}" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Engine bonnet tapa o capo del motor</p>
            </div>
        </div>
        <!-- 10 - 31 - 51  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">10</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v182" {{isset($formdata->v182)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front door sill LH moldura de la puerta delantera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">31</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v183" {{isset($formdata->v184)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear rim RH rin trasero derecho</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">51</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v184" {{isset($formdata->v184)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front panel panel frontal</p>
            </div>
        </div>
        <!-- 11 - 32 - 52  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">11</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v185" {{isset($formdata->v185)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear door LH (B post only for four-door car) puerta trasera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">32</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v186" {{isset($formdata->v186)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear tire RH llanta trasera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">52</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v187" {{isset($formdata->v187)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Wiper limpiaparabrisas</p>
            </div>
        </div>
        <!-- 12 - 33 - 53  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">12</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v188" {{isset($formdata->v188)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear door sill LH moldura de la puerta trasera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">33</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v189" {{isset($formdata->v189)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear door RH (B post only for four-door car) puerta trasera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">53</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v190" {{isset($formdata->v190)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Windshield and A post parabrisas y poste</p>
            </div>
        </div>
        <!-- 13 - 34 - 54  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">13</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v191" {{isset($formdata->v191)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear wheel arch LH pollera trasera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">34</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v192" {{isset($formdata->v192)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear door sill RH moldura de la puerta tarsera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">54</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v193" {{isset($formdata->v193)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Headlining (or sunroof if installed) Revestimiento del techo (o techo corredizo si está instalado)</p>
            </div>
        </div>
        <!-- 14 - 35 - 55 fbdfbdf -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">14</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v194" {{isset($formdata->v194)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear rim LH rin trasero izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">35</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v195" {{isset($formdata->v195)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front door RH puerta delantera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">55</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v196" {{isset($formdata->v196)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Spare wheel llanta de repuesto</p>
            </div>
        </div>
        <!-- 15 - 36 - 56  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">15</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v197" {{isset($formdata->v197)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear tire LH llanta trasera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">36</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v198" {{isset($formdata->v198)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front door sill RH moldura de la puerta delantera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">56</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v199" {{isset($formdata->v199)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Tools and fittings Herramientas y accesorios</p>
            </div>
        </div>
        <!-- 16 - 37 - 57  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">16</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v200" {{isset($formdata->v200)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear wing LH guardafango trasero izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">37</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v201" {{isset($formdata->v201)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Right rearview retrovisor derecho</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">57</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v202" {{isset($formdata->v202)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Radio</p>
            </div>
        </div>
        <!-- 17 - 38 - 58  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">17</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v203" {{isset($formdata->v203)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear bumper LH defense trasera lado izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">38</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v204" {{isset($formdata->v204)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front wheel arch RH pollera delantera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">58</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v205" {{isset($formdata->v205)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Battery Batería</p>
            </div>
        </div>
        <!-- 18 - 39 - 59  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">18</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v206" {{isset($formdata->v206)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear spoiler LH moldura trasera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">39</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v207" {{isset($formdata->v207)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front wing RH guardafango delantero derecho</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">59</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v208" {{isset($formdata->v208)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Key Llaves</p>
            </div>
        </div>
        <!-- 19 - 40 - 60  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">19</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v209" {{isset($formdata->v209)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear tail moldura trasera</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">40</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v210" {{isset($formdata->v210)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front rim RH rin delantero derecho</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">60</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v211" {{isset($formdata->v211)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Body bottom and exhaust pipe parte inferior del auto, tubo de escape</p>
            </div>
        </div>
        <!-- 20 - 41 - 61  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">20</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v212" {{isset($formdata->v212)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear bumper defense trasera</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">41</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v213" {{isset($formdata->v213)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front tire RH llanta delantera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">61</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v214" {{isset($formdata->v214)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rest parts resto de partes del auto</p>
            </div>
        </div>
        <!-- 21 - 42 - 62  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">21</p>
                    <div class="position-absolute top-50 start-50 translate-middle ">
                        <input name="v215" {{isset($formdata->v215)? __('checked') : __('') }}" style="width: 40px !important;"  class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox"  >
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Back door trim board Tablero de moldura de la puerta trasera</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 p-0">
                <p class="fw-bold">Damage code:</p>
            </div>
        </div>
    </div>
    <div class="container border border-dark">
        <div class="row border-start border-end border-dark">
            <div class="col-1 border border-start-0 border-dark">
                <p class="m-0">1. </p>
            </div>
            <div class="col-11 border border-end-0 border-dark">
                <p class="m-0">General defect Defecto general</p>
            </div>
            <div class="col-1 border border-start-0 border-dark">
                <p class="m-0">2. </p>
            </div>
            <div class="col-11 border border-end-0 border-dark">
                <p class="m-0">Scratch and pit (paint repair) rayas y picadas (reparación de pintura)</p>
            </div>
            <div class="col-1 border border-start-0 border-dark">
                <p class="m-0">3. </p>
            </div>
            <div class="col-11 border border-end-0 border-dark">
                <p class="m-0">Panel replacement (not inferior to production quality) Reemplazo del panel (no inferior a la calidad de producción)</p>
            </div>
            <div class="col-1 border border-start-0 border-dark">
                <p class="m-0">4. </p>
            </div>
            <div class="col-11 border border-end-0 border-dark">
                <p class="m-0">Below standard Por debajo del estándar</p>
            </div>
            <div class="col-1 border border-start-0 border-dark">
                <p class="m-0">5. </p>
            </div>
            <div class="col-11 border border-end-0 border-dark">
                <p class="m-0">Scrapping desechar, desmantelar</p>
            </div>
        </div>
    </div>
    
    

</form>
    <style>
        input[type="checkbox"] {
            min-height: 30px;
        }
        .check-r {
            background: transparent
        }
        .check-r:checked[type=checkbox] {
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>

    <script type="text/javascript">
        $('#phoneInput').letteringInput({
            forbiddenKeyCodes: [ 9, 16, 17, 18, 20, 27, 32, 33, 34, 38, 40, 45, 144 ]
        });
        $('#phoneInput').letteringInput({
            inputClass: 'letter',
            onFocusLetter: function() {},
            onBlurLetter: function() {},
            onLetterKeyup: function($item, event) {},
            onSet: function($el, event, value) {}
        });
    </script>

@endsection
