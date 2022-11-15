@extends('layouts.app')

@section('content')
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
<form name="vehicleform" id="vehicleform" method="post" action="{{ route('vehicleform.store') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" value="{{$request->marca}}" id="marca" name="marca">
    <input type="hidden" value="{{$request->modelo}}" id="modelo" name="modelo">
    <input type="hidden" value="{{$request->motor}}" id="motor" name="motor">
    <input type="hidden" value="{{$request->chasis}}" id="chasis" name="chasis">
    <input type="hidden" value="{{$request->anio}}" id="anio" name="anio">
    <input type="hidden" value="{{$request->version}}" id="version" name="version">
    <input type="hidden" value="{{$request->colorexterior}}" id="colorexterior" name="colorexterior">
    <input type="hidden" value="{{$request->colorinterior}}" id="colorinterior" name="colorinterior">
    <input type="hidden" value="Handover Check List" id="formname" name="formname">
    <input type="hidden" value=" " id="formrequest" name="formrequest">
    <input type="hidden" value="handover_check_list" id="formid" name="formid">
    <input type="hidden" value="{{ route('handover.check.view') }}" id="formaction" name="formaction">
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
                <input name="v216" type="text" class="form-control border-0 rounded-0 text-center " placeholder="" value="{{ $request->company; }}">
            </div>
            <div class="col-sm-3 p-0 border border-dark">
                <input name="v217" type="text" class="form-control border-0 rounded-0 text-center " id="chasis" placeholder="" value="{{ $request->chasis; }}">
            </div>
            <div class="col-sm-3 p-0 border border-dark">
                <input name="v218" type="date" class="form-control border-0 rounded-0" placeholder="">
            </div>
            <div class="col-sm-3 p-0 border border-dark">
                <input name="v219" type="text" class="form-control border-0 rounded-0 text-center " placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 border border-dark">
                <p>*Company: distributor, insurance company, shipping agent, etc. Empresa: distribuidor, compañía de seguros, agente marítimo, etc.</p>
                <p>External inspection Inspección externa</p>
                <p>Circle the part of vehicle that has problem or defect. Encierre en un círculo la parte del vehículo que tiene el problema o defecto.</p>
            </div>
        </div>
        <!-- ------------>
        <div class="row">
            <div class="col-12 col-sm-6 border border-dark text-center">
                <p><b>Sedan</b></p>
                @include('canvas/tablero1')
                <input type="hidden" id="myText" name="v302" value="no guarda">
            </div>
            <div class="col-12 col-sm-6 border border-dark text-center">
                <p><b>SUV</b></p>
                @include('canvas/tablero2')
                <input type="hidden" id="myText2" name="v303" value="no guarda">
            </div>
        </div>
        <!-- <button type='button' onclick='allfuncion()'>Borrar</button> -->
        <!--  ------------>
        <div class="row border border-dark">
            <div class="col-12">
                <label for="" class="form-label">► Describe each problem or defect, and indicate the completion state on the right side after parts replacement or repair. Describa cada problema o defecto e indique el estado de finalización en el lado derecho después del reemplazo o reparación de piezas</label>
            </div>
            <div class="col-6">
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0">1) </span>
                    <input name="v1" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0">2) </span>
                    <input name="v2" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0">3) </span>
                    <input name="v3" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0">4) </span>
                    <input name="v4" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0">5) </span>
                    <input name="v5" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0">6) </span>
                    <input name="v6" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0">7) </span>
                    <input name="v7" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0">8) </span>
                    <input name="v8" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0">9) </span>
                    <input name="v9" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0">10) </span>
                    <input name="v10" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
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
                    <input name="v11" value="{{ auth()->user()->name }}" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark mb-2 text-center w-75" placeholder="" aria-label="" aria-describedby="">
                    <p class="form-label">Signature of inspector</p>
                </center>
            </div>
            <div class="col-6">
                <center>
                    @include('canvas/tablero3')
                    <input type="hidden" id="myText3" name="v12" value="no guarda">
                    <div class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark mb-2 text-center w-75"></div>
                    <button class="btn btn-primary mh-100" type='button' onclick='LimpiarTrazado3()'>Borrar</button>
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
                    <span class="input-group-text bg-transparent border-0 ps-0">Waybill No.: </span>
                    <input name="v13" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-0 ps-0">(BOL).: </span>
                    <input name="v220" type="text" class="form-control rounded-0 border-0" placeholder="" aria-label="" aria-describedby="">
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center">
                <div class="input-group d-block">
                    <span class="input-group-text p-0 bg-transparent border-0" id="basic-addon1">No.</span>
                    <input name="v14" type="text" class="form-control w-100 ps-0 border-0 rounded-0" placeholder="1" aria-label="" aria-describedby="">
                </div>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center">
                <div class="input-group d-block">
                    <span class="input-group-text p-0 bg-transparent border-0" id="basic-addon1">Model</span>
                    <input name="v15" type="text" class="form-control w-100 ps-0 border-0 rounded-0" placeholder="" value="{{$request->modelo}}" aria-label="" aria-describedby="">
                </div>
            </div>
            <div class="col-2 border-start border-end border-dark d-flex align-items-center">
                <div class="input-group d-block">
                    <span class="input-group-text p-0 bg-transparent border-0">Configuration</span>
                    <select name="v16" class="form-select ps-0 pe-0 border-0 rounded-0 w-100">
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
                    <span class="input-group-text bg-transparent border-0 ps-0">Kilometraje (Km)</span>
                    <input name="v17" type="number" class="form-control rounded-0 border-0 border-start border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
            </div>
            <div class="col-8 border-start border-dark d-flex align-items-center p-0" id="phoneInput">
                <div class="input-group h-100">
                    <input name="v18" value="{{ $request->chasis; }}" type="text" class="form-control border-0 p-0 text-center letter" placeholder="" aria-label="">

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
                    <div class="col-1  border-end border-dark" style="padding-left: 1px;padding-right: 1px; ">
                        <textarea name="v48" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                        <textarea name="v49" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                        <textarea name="v50" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                        <textarea name="v51" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                      <textarea name="v52" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v53" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;"> 
                    <textarea name="v54" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v55" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v56" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v57" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v58" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start  border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v59" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
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
                    <div class="col-1  border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v60" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v61" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v62" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v63" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v64" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v65" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v66" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;"> 
                    <textarea name="v67" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v68" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v69" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v70" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start  border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v71" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
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
                    <div class="col-1  border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v72" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v73" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v74" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v75" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v76" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v77" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v78" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v79" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v80" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v81" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v82" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start  border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v83" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
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
                    <div class="col-1  border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v84" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v85" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v86" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v87" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v88" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v89" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v90" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v91" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v221" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v92" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v93" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start  border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v94" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
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
                    <div class="col-1  border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v95" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v96" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v97" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v98" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v99" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v100" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v222" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v101" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v102" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v103" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v104" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start  border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v105" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
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
                    <div class="col-1  border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v106" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v107" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v108" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v109" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v110" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v111" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v112" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v223" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v113" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v114" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v115" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start  border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v116" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
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
                    <div class="col-1  border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v117" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v118" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v119" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v120" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v121" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v122" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v123" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v124" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v125" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v126" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v127" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start  border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v128" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
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
                    <div class="col-1  border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v129" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;"> 
                    <textarea  name="v130" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v131" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v132" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v133" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v134" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v135" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                        <textarea name="v136" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v137" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v138" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v139" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start  border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v140" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
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
                    <div class="col-1  border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v141" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v142" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v143" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v144" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v145" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v146" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v147" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v148" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea name="v149" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v150" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start border-end border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v151" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                    <div class="col-1 border-start  border-dark" style="padding-left: 1px;padding-right: 1px;">
                    <textarea  name="v152" class="form-control" type="text" value="" style="padding-left: 1px;padding-right: 1px;  font-size: 10px;"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark d-flex align-items-center text-center">
                <p class="m-0 text-start lh-sm">Confirmed by delivery side:<br>Confirmado por la parte que entrega<br>Signature firma:</p>
            </div>
            <div class="col-12 col-sm-9 border-start border-dark d-flex align-items-center text-center p-0">
                @include('canvas/tablero4')
                <button class="btn btn-primary mh-100" type='button' onclick='LimpiarTrazado4()'>Borrar</button>
                <input type="hidden" id="myText4" name="v224" value="no guarda">
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark d-flex align-items-center text-center">
                <p class="m-0 text-start lh-sm">Confirmed by receiving party:<br>Confirmado por la parte que recibe<br>Signature firma:</p>
            </div>
            <div class="col-12 col-sm-9 border-start border-dark d-flex align-items-center text-center p-0">
                @include('canvas/tablero5')
                <button class="btn btn-primary mh-100" type='button' onclick='LimpiarTrazado5()'>Borrar</button>
                <input type="hidden" id="myText5" name="v153" value="no guarda">
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-sm-3 border-end border-dark d-flex align-items-center text-center">
                <p class="m-0 text-start lh-sm">Inspection date fecha de inspección</p>
            </div>
            <div class="col-12 col-sm-9 border-start border-dark d-flex align-items-center text-center p-0">
                <input name="v154" type="date" class="form-control rounded-0 border-0 h-100" placeholder="">
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
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">1</p>
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <input name="v155" style="width: 40px !important;" class="form-check-input rounded-circle border-dark  mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v156" style="width: 40px !important;" class="form-check-input rounded-circle border-dark  mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v157" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v158" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v159" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v160" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v161" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v162" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v163" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v164" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v165" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v166" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v167" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v168" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v169" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v170" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v171" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v172" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v173" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v174" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v175" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v176" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v177" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v178" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v179" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v180" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v181" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v182" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v183" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v184" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v185" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v186" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v187" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v188" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v189" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v190" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v191" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v192" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v193" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v194" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v195" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v196" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v197" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v198" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v199" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v200" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v201" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v202" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v203" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v204" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v205" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v206" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v207" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v208" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v209" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v210" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v211" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v212" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v213" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v214" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
                        <input name="v215" style="width: 40px !important;" class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="1">
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
    <div class="container">
        <div style="height: 100px;" class="row ">
            <div class="h-100 col-md-12 d-flex align-items-center p-1 text-center">
                <button onclick="allfuncion()" type="submit" class="btn btn-primary mh-100" style="width: 200px; height: 100px;">Guardar</button>
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
        forbiddenKeyCodes: [9, 16, 17, 18, 20, 27, 32, 33, 34, 38, 40, 45, 144]
    });
    $('#phoneInput').letteringInput({
        inputClass: 'letter',
        onFocusLetter: function() {},
        onBlurLetter: function() {},
        onLetterKeyup: function($item, event) {},
        onSet: function($el, event, value) {}
    });

    function allfuncion() {
        b64img();
        b64img2();
        b64img3();
        b64img4()
        b64img5();
    }
</script>

@endsection