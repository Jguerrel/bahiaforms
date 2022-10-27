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
<h1 class="fs-2 text-center fw-bold m-0"></h1>
<div class="container">
        <div class="row">
            <div class="col-9 p-0">
                <h1 class="fs-2 text-end fw-bold m-0">Pre-Delivery Inspection (PDI) checking list</h1>
            </div>
            <div class="col-3 p-0 text-end align-self-center">
            <img src="{{ asset('img/geely.png') }}" class="w-100" alt="Geely">
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
    <input type="hidden" value="Pre-Delivery Inspection (PDI) checking list" id="formname" name="formname" >
    <input type="hidden" value=" " id="formrequest" name="formrequest" >
    <input type="hidden" value="pdi_check_list" id="formid" name="formid" >
    <input type="hidden" value="{{ route('pdi.check.view') }}" id="formaction" name="formaction" >
<div class="container ">
    <div class="row border border-dark d-flex flex-row ">
        <div class="col-sm-6 p-2">
            <div class="container-sm border border-dark ">
                <div class="row border border-dark ">
                    <div class="col-sm-8 border-end border-dark align-items-center p-1 text-start bg-secondary fw-bold">
                        <p class="m-0 lh-sm ">A. Work preparation</p>
                    </div>
        
                    <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                        <p class="m-0 lh-sm fw-bold" >Ok</p>
                    </div>
                    <div class="col-sm-2 align-items-center p-1 text-center">
                        <p class="m-0 lh-sm fw-bold">Adjust<br>Repair</p>
                    </div>
                </div>    
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">01. Tyre gauge, Torque wrench, Tire socket, multimeter, Tools. 
                        <br><span class="text-danger"> Medidor de neumáticos, llave dinamométrica, toma de neumáticos, multímetro, herramientas</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v1" {{isset($formdata->v1)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v2" {{isset($formdata->v2)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start  ">
                        <p class="m-0 lh-sm">02. Chair cover, Steering wheel cover, foot pad, fender pad, cotton cloth 
                        <br><span class="text-danger">Funda para silla, funda para volante, almohadilla para pies, almohadilla para guardabarros, tela de algodón</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v3" {{isset($formdata->v3)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v4" {{isset($formdata->v4)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">03. Install / check accessories 
                        <br><span class="text-danger"> Instalar/comprobar accesorios</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v5" {{isset($formdata->v5)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v6" {{isset($formdata->v6)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center align-middle p-1 text-start">
                        <p class="m-0 lh-sm">04. Battery detector 
                        <br><span class="text-danger"> Detector de batería</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v7" {{isset($formdata->v7)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v8" {{isset($formdata->v8)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">05. Check safety compliance sticker, VIN, Engine number, vehicle identification label  
                        <br><span class="text-danger"> Verifique la etiqueta de cumplimiento de seguridad, VIN, número de motor, etiqueta de identificación del vehículo</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v9" {{isset($formdata->v9)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100  " type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v10" {{isset($formdata->v10)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100   " type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            </div>
            <div class="col-sm-6 p-2">
            <div class="container-sm  border border-dark ">
                <div class="row border border-dark ">
                    <div class="col-sm-8 border-end border-dark align-items-center p-1 text-start bg-secondary fw-bold">
                        <p class="m-0 lh-sm ">D. Check for chassis</p>
                    </div>
        
                    <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                        <p class="m-0 lh-sm fw-bold" >Ok</p>
                    </div>
                    <div class="col-sm-2 align-items-center p-1 text-center">
                        <p class="m-0 lh-sm fw-bold">Adjust<br>Repair</p>
                    </div>
                </div>    
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">01. The torque of the tire nut
                        <br><span class="text-danger">El torque de la tuerca del neumático</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v11" {{isset($formdata->v11)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v12" {{isset($formdata->v12)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">02. Adjust the tire pressure
                        <br><span class="text-danger">Ajustar la presión de los neumáticos</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v13" {{isset($formdata->v13)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v14" {{isset($formdata->v14)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">03. Check the tire damage
                        <br><span class="text-danger">Compruebe el daño del neumático</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v15" {{isset($formdata->v15)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v16" {{isset($formdata->v16)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">04. Install accessories 
                        <br><span class="text-danger">Instalar accesorios</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v17" {{isset($formdata->v17)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v18" {{isset($formdata->v18)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">05. Check the brake hose, ABS Sensor connector 
                        <br><span class="text-danger">Compruebe la manguera de freno, conector del sensor ABS</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v19" {{isset($formdata->v19)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v20" {{isset($formdata->v20)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">06. Check the oil leakage
                        <br><span class="text-danger">Compruebe la fuga de aceite</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v21" {{isset($formdata->v21)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v22" {{isset($formdata->v22)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1  w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">07. Check the mounting and fastening of chassis bolts
                        <br><span class="text-danger">Comprobar el montaje y la fijación de los tornillos del chasis</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v23" {{isset($formdata->v23)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v24" {{isset($formdata->v24)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">08. Check the chassis damage and rust
                        <br><span class="text-danger">Compruebe el daño del chasis y el óxido</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v25" {{isset($formdata->v25)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v26" {{isset($formdata->v26)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">09. Check the exhaust pipe is fixed
                        <br><span class="text-danger">Verifique que el tubo de escape esté fijo</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v27" {{isset($formdata->v27)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v28" {{isset($formdata->v28)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">10. Check the dust jacket on the drive shaft
                        <br><span class="text-danger">Compruebe la sobrecubierta en el eje de transmisión</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v29" {{isset($formdata->v29)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v30" {{isset($formdata->v30)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
        </div>
    </div >
    <div class="row border border-dark d-flex flex-row ">
        <div class="col-sm-6 p-2">
            <div class="container-sm  border border-dark ">
                <div class="row border border-dark ">
                    <div class="col-sm-8 border-end border-dark align-items-center p-1 text-start bg-secondary fw-bold">
                        <p class="m-0 lh-sm ">B. Visual inspection</p>
                    </div>
                    
                    <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                        <p class="m-0 lh-sm fw-bold" >Ok</p>
                    </div>
                    <div class="col-sm-2 align-items-center p-1 text-center">
                        <p class="m-0 lh-sm fw-bold">Adjust<br>Repair</p>
                    </div>
                </div>    
                <div class="row border border-dark">    
                <div class="col-sm-8 border-end border-dark align-items-center p-1 text-start bg-light fw-bold">
                        <p class="m-0 lh-sm ">Vehicle peripheral inspection</p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">01. Body paint, glass
                        <br><span class="text-danger">Pintura en carroceria, vidrio</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v31" {{isset($formdata->v31)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v32" {{isset($formdata->v32)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">02. Should check whether the wheel rim deformation 
                        <br><span class="text-danger"> Verificar si la llanta o rin estan deformados</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v33" {{isset($formdata->v33)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v34" {{isset($formdata->v34)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">03. Grab handle
                        <br><span class="text-danger"> manijas o maniguetas</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v35" {{isset($formdata->v35)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v36" {{isset($formdata->v36)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">04. Mirror and glass 
                        <br><span class="text-danger">espejos y vidrios</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v37" {{isset($formdata->v37)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v38" {{isset($formdata->v38)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">05. Headlight surface, Taillight surface
                        <br><span class="text-danger">cover de las luces internas</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v39" {{isset($formdata->v39)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v40" {{isset($formdata->v40)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">06. Hub trim cover plate（If equipped
                        <br><span class="text-danger">cubierta de la consola central</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v41" {{isset($formdata->v41)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v42" {{isset($formdata->v42)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">07. Door/glass seal rubber strip (No breakage, damage)
                        <br><span class="text-danger">caucho de goma que sella puerta/vidrio (sin roturas ni daños)</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v43" {{isset($formdata->v43)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v44" {{isset($formdata->v44)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Inspection of body electrical, interior, instrument indication</p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">01. Check the warning light, Horn(Key, Headlight) 
                        <br><span class="text-danger">Compruebe la luz de advertencia, bocina (llave, faro)</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v45" {{isset($formdata->v45)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v46" {{isset($formdata->v46)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">02. Check the engine performance, Stability, Noise and Vibration
                        <br><span class="text-danger">Comprueba el rendimiento del motor, la estabilidad, el ruido y la vibración.</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v47" {{isset($formdata->v47)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v48" {{isset($formdata->v48)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">03. Working condition of electrical components
                        <br><span class="text-danger">Condiciones de trabajo de los componentes eléctricos.</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v49" {{isset($formdata->v49)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v50" {{isset($formdata->v50)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm"> Headlights, clearance lights, Daytime running light, console lights
                        <br><span class="text-danger">Faros, luces de gálibo, luz diurna, luces de consola</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v51" {{isset($formdata->v51)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v52" {{isset($formdata->v52)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Tail lamp, License plate lamp
                        <br><span class="text-danger">Luz trasera, luz de matrícula</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v53" {{isset($formdata->v53)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v54" {{isset($formdata->v54)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Stop lamp, Backup lamp
                        <br><span class="text-danger">Luz de freno, luz de marcha atrás</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v55" {{isset($formdata->v55)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v56" {{isset($formdata->v56)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Turning light lamp, Alarm lamp
                        <br><span class="text-danger">Lámpara de luz de giro, lámpara de alarma</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v57" {{isset($formdata->v57)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v58" {{isset($formdata->v58)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Windshield wiper, Wipper nozzle, Horn
                        <br><span class="text-danger"> Limpiaparabrisas, boquilla limpiaparabrisas, bocina</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v59" {{isset($formdata->v59)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v60" {{isset($formdata->v60)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Defogging function, Cigarette lighter
                        <br><span class="text-danger">Función de desempañado, Encendedor de cigarrillos</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v61" {{isset($formdata->v61)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v62"{{isset($formdata->v62)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Clock(Set time)
                        <br><span class="text-danger">Reloj (Establecer hora)</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v63" {{isset($formdata->v63)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v64" {{isset($formdata->v64)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Sun Visor, Makeup light, Makeup mirror 
                        <br><span class="text-danger">Visera solar, luz de maquillaje, espejo de maquillaje</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v65" {{isset($formdata->v65)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v66" {{isset($formdata->v66)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Interior light
                        <br><span class="text-danger">Luz interior</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v67" {{isset($formdata->v67)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v68" {{isset($formdata->v68)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Car sunroof operation
                        <br><span class="text-danger">Funcionamiento del techo solar del coche</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v69" {{isset($formdata->v69)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v70" {{isset($formdata->v70)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">04. Check the inner mirror, Outer mirror(adjustable)
                        <br><span class="text-danger">Verifique el espejo interior, el espejo exterior (ajustable)</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v71" {{isset($formdata->v71)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v72" {{isset($formdata->v72)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">05. Check the steering wheel operation
                        <br><span class="text-danger">Comprobar el funcionamiento del volante</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v73" {{isset($formdata->v73)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v74" {{isset($formdata->v74)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Instrument language, time, each function indicator light
                        <br><span class="text-danger">Idioma del instrumento, tiempo, luz indicadora de cada función</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v75" {{isset($formdata->v75)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v76" {{isset($formdata->v76)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">07. Check storage containers, customer materials and cup holders
                        <br><span class="text-danger">Revise los contenedores de almacenamiento, los materiales del cliente y los portavasos</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v77" {{isset($formdata->v77)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v78" {{isset($formdata->v78)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">08. Check the operation and contamination of seats and seat belts
                        <br><span class="text-danger">Verificar el funcionamiento y contaminación de asientos y cinturones de seguridad</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v79" {{isset($formdata->v79)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v80" {{isset($formdata->v80)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">09. Check if the engine cover, trunk and fuel hole cover can be opened normally
                        <br><span class="text-danger">Compruebe si la tapa del motor, el maletero y la tapa del orificio de combustible se pueden abrir normalmente</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v81" {{isset($formdata->v81)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v82" {{isset($formdata->v82)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">10. Check the operation of the window glass lifter
                        <br><span class="text-danger">Comprobar el funcionamiento de los vidrios de las ventanas</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v83" {{isset($formdata->v83)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v84" {{isset($formdata->v84)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">11. Check the door lock,  Keyless entry system
                        <br><span class="text-danger">Verifique la cerradura de la puerta, el sistema de entrada sin llave</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v85" {{isset($formdata->v85)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v86" {{isset($formdata->v86)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">12. Check the child safety lock switch 
                        <br><span class="text-danger">Compruebe el interruptor de bloqueo de seguridad para niños</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v87" {{isset($formdata->v87)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v88" {{isset($formdata->v88)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">13. Check the trunk light
                        <br><span class="text-danger">Revisa la luz del maletero</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v89" {{isset($formdata->v89)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v90" {{isset($formdata->v90)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">14. Inspection of trunk lining and padding
                        <br><span class="text-danger">Inspección del revestimiento y acolchado del maletero.</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v91" {{isset($formdata->v91)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v92" {{isset($formdata->v92)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">15. Check the air pressure and immobilization of the spare tire
                        <br><span class="text-danger">Comprobar la presión de aire y la inmovilización de la rueda de repuesto</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v93" {{isset($formdata->v9389)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v94" {{isset($formdata->v94)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">16. Check the hydraulic truck jack, tool package, tripods and traction hooks
                        <br><span class="text-danger">Verifique el gato hidráulico del camión, el paquete de herramientas, los trípodes y los ganchos de tracción</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v95" {{isset($formdata->v95)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v96" {{isset($formdata->v96)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">17. Check the hood and door clearance
                        <br><span class="text-danger">Compruebe el espacio libre del capó y de la puerta</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v97" {{isset($formdata->v97)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v98" {{isset($formdata->v98)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">18. EPD, AUTO-HOLD</p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v99" {{isset($formdata->v99)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v100" {{isset($formdata->v100)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="container-sm  border border-dark ">
                <div class="row border border-dark ">
                    <div class="col-sm-8 border-end border-dark align-items-center p-1 text-start bg-secondary fw-bold">
                        <p class="m-0 lh-sm ">C. Check the  engine compartment 
                        <br><span class="text-danger">Revisa el compartimiento del motor</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                        <p class="m-0 lh-sm fw-bold" >Ok</p>
                    </div>
                    <div class="col-sm-2 align-items-center p-1 text-center">
                        <p class="m-0 lh-sm fw-bold">Adjust<br>Repair</p>
                    </div>
                </div>    
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">01. Check the quantity and quality of oil
                        <br><span class="text-danger">Comprobar la cantidad y calidad del aceite.</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v101" {{isset($formdata->v101)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v102" {{isset($formdata->v102)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Engine oil
                        <br><span class="text-danger">Aceite de Motor</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v103" {{isset($formdata->v103)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v104" {{isset($formdata->v104)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Steering pump oil pressure （Non-electronic power steering）
                        <br><span class="text-danger">Presión de aceite de la bomba de dirección (dirección asistida no electrónica)</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v105" {{isset($formdata->v105)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v106" {{isset($formdata->v106)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Brake Fluid
                        <br><span class="text-danger">líquido de los frenos</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v107" {{isset($formdata->v107)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v108" {{isset($formdata->v108)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Wiper cleaning fluid
                        <br><span class="text-danger">Líquido limpiaparabrisas</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v109" {{isset($formdata->v109)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v110" {{isset($formdata->v110)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">Cooling liquid
                        <br><span class="text-danger">Líquido refrigerante</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v111" {{isset($formdata->v111)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v112" {{isset($formdata->v112)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">02. Check the tubing connections and leakage.
                        <br><span class="text-danger">Compruebe las conexiones de los tubos y las fugas</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v113" {{isset($formdata->v113)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v114" {{isset($formdata->v114)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">03. Check the installation of battery pile head
                        <br><span class="text-danger">Verifique la instalación de la cabeza de pila de la batería</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v115" {{isset($formdata->v115)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v116" {{isset($formdata->v116)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">04. Measure the battery voltage (standard value ≥ 12. 5v), and use the battery detector to test and print and save the test results
                        <br><span class="text-danger">Mida el voltaje de la batería (valor estándar ≥ 12. 5v),y use el detector de batería para probar e imprimir y guardar los resultados de la prueba</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v117" {{isset($formdata->v117)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v118" {{isset($formdata->v118)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">05. Check the Battery level
                        <br><span class="text-danger">Compruebe el nivel de la batería</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v119" {{isset($formdata->v119)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v120" {{isset($formdata->v120)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">06. Wiring harness and plug (No extrusion, loosening)
                        <br><span class="text-danger">Arnés de cableado y enchufe (sin extrusión, aflojamiento)</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v121" {{isset($formdata->v121)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v122" {{isset($formdata->v122)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 p-2">
            <div class="container-sm  border border-dark ">
                <div class="row border border-dark ">
                    <div class="col-sm-8 border-end border-dark align-items-center p-1 text-start bg-secondary fw-bold">
                        <p class="m-0 lh-sm ">E. Driving test</p>
                    </div>
        
                    <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                        <p class="m-0 lh-sm fw-bold" >Ok</p>
                    </div>
                    <div class="col-sm-2 align-items-center p-1 text-center">
                        <p class="m-0 lh-sm fw-bold">Adjust<br>Repair</p>
                    </div>
                </div>    
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">01. Check the pedals are working properly
                        <br><span class="text-danger">Verifique que los pedales funcionen correctamente</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v123" {{isset($formdata->v123)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v124" {{isset($formdata->v124)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">02. Check the engine starting and idling
                        <br><span class="text-danger">Comprobar el arranque y el ralentí del motor</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v125" {{isset($formdata->v125)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v126" {{isset($formdata->v126)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">03. Driving performance (accelerate, constant speed, decelerate,sensitivity, etc. )
                        <br><span class="text-danger">Rendimiento de conducción (aceleración, velocidad constante, desaceleración, sensibilidad, etc.)</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v127" {{isset($formdata->v127)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v128" {{isset($formdata->v128)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">04. Check the working condition of instrument panel and indicator light 
                        <br><span class="text-danger">Compruebe el estado de funcionamiento del panel de instrumentos y la luz indicadora</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v129" {{isset($formdata->v129)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v130" {{isset($formdata->v130)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">05. Check the clutch and transmission bridge
                        <br><span class="text-danger">Revise el embrague y el puente de transmisión</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v131" {{isset($formdata->v131)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v132" {{isset($formdata->v132)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">06. Check the brake performance, abnormal noise, parking brake
                        <br><span class="text-danger">Verifique el rendimiento del freno, ruido anormal, freno de estacionamiento</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v134" {{isset($formdata->v134)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v135" {{isset($formdata->v135)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">07. Check the situation of steering
                        <br><span class="text-danger">Comprobar el estado de la dirección</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v136" {{isset($formdata->v136)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v137" {{isset($formdata->v137)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">08. Check the sound insulation, noise, vibration and stability
                        <br><span class="text-danger">Comprobar el aislamiento acústico, el ruido, las vibraciones y la estabilidad</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v138" {{isset($formdata->v138)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v139" {{isset($formdata->v139)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">09. Check the air conditions and heating unit for proper operation
                        <br><span class="text-danger">Compruebe las condiciones del aire y la unidad de calefacción para un funcionamiento adecuado</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v140" {{isset($formdata->v140)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v141" {{isset($formdata->v141)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">10. Check the Parking camera, radar system
                        <br><span class="text-danger">Verifique la cámara de estacionamiento, el sistema de radar</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v142" {{isset($formdata->v142)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v143" {{isset($formdata->v143)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="container-sm  border border-dark ">
                <div class="row border border-dark ">
                    <div class="col-sm-8 border-end border-dark align-items-center p-1 text-start bg-secondary fw-bold">
                        <p class="m-0 lh-sm ">F. Final check & Clean </p>
                    </div>
        
                    <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                        <p class="m-0 lh-sm fw-bold" >Ok</p>
                    </div>
                    <div class="col-sm-2 align-items-center p-1 text-center">
                        <p class="m-0 lh-sm fw-bold">Adjust<br>Repair</p>
                    </div>
                </div>    
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">01. Remove the car label and cover
                        <br><span class="text-danger">Retire la etiqueta y la cubierta del automóvil.</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v144" {{isset($formdata->v144)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v145" {{isset($formdata->v145)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">*02. Check the installation and defece of the car interior
                        <br><span class="text-danger">Comprobar la instalación y defensa del interior del coche</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v146" {{isset($formdata->v146)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v147" {{isset($formdata->v147)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">*03. Confirm the relevant materials such as user manual
                        <br><span class="text-danger">Confirme los materiales relevantes, como el manual del usuario.</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v148" {{isset($formdata->v148)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v149" {{isset($formdata->v149)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">04. Car cleaning (Interior,Exteriors)
                        <br><span class="text-danger">Limpieza de autos (Interiores,Exteriores)</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v150" {{isset($formdata->v150)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v151" {{isset($formdata->v151)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">05. Use an exclusive diagnostic device to check out the fault codes
                        <br><span class="text-danger">Use un dispositivo de diagnóstico exclusivo para verificar los códigos de falla</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v152" {{isset($formdata->v152)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v153" {{isset($formdata->v153)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">06. Check the warning lights
                        <br><span class="text-danger">Revisa las luces de advertencia</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v154" {{isset($formdata->v154)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v155" {{isset($formdata->v155)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">07.Set up maintenance mileage using a special diagnostic instrument
                        <br><span class="text-danger">Configure el kilometraje de mantenimiento utilizando un instrumento de diagnóstico especial</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v156" {{isset($formdata->v156)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v157" {{isset($formdata->v157)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                
            </div>
            <div class="container-sm  border border-dark ">
                <div class="row border border-dark ">
                    <div class="col-sm-12 border-end border-dark align-items-center p-1 text-start bg-secondary fw-bold">
                        <p class="m-0 lh-sm ">G. Appearance remark: the damaged part of the car body is marked with red pen in the picture below </p>
                        <br><span class="text-danger">Observación de apariencia: la parte dañada de la carrocería del automóvil está marcada con un bolígrafo rojo en la imagen a continuación</span></p>
                    </div>
        
                  
                </div> 
                <div class="row border border-dark ">
                    <div class="col-sm-12 border-end border-dark align-items-center  ">
                        <img src="{{ asset('img/pdi.png') }}" class="w-100" alt="pdi">
                    </div>
                </div>
            </div>    
            <div class="container-sm  border border-dark ">
                <div class="row border border-dark ">
                    <div class="col-sm-8 border-end border-dark align-items-center p-1 text-start bg-secondary fw-bold">
                        <p class="m-0 lh-sm ">H. Check the new technology </p>
                    </div>
        
                    <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                        <p class="m-0 lh-sm fw-bold" >Ok</p>
                    </div>
                    <div class="col-sm-2 align-items-center p-1 text-center">
                        <p class="m-0 lh-sm fw-bold">Adjust<br>Repair</p>
                    </div>
                </div> 
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-center">
                        <p class="m-0 lh-sm">EV</p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">01. Measure the power battery SOC (standard value ≥ 50%)
                        <br><span class="text-danger">Retire la etiqueta y la cubierta del automóvil.</span></p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v158" {{isset($formdata->v158)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v159" {{isset($formdata->v159)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-center">
                        <p class="m-0 lh-sm">48V EMS system</p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                    </div>
                </div>
                <div class="row border border-dark">    
                    <div class="col-sm-8 border-end border-dark  align-items-center p-1 text-start">
                        <p class="m-0 lh-sm">02.Measure 48V battery (standard: cell voltage≥3.3v and SOC value ≥45%)</p>
                    </div>
        
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v160" {{isset($formdata->v160)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                    <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                        <input name="v161" {{isset($formdata->v161)? __('checked') : __('') }} style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="container-sm  border border-dark ">
                <div class="row border  ">
                    <div class="col-sm-3 border-end  align-items-center p-1 text-start fw-bold">
                        <p class="m-0 lh-sm ">Job Card </p>
                    </div>
                    <div class="col-sm-3 border-end  align-items-center p-1 text-start fw-bold">
                    <input name="v162" value="{{$formdata->v162}}" type="text" class="form-control rounded-0 border-bottom h-100" id="" placeholder="">
                    </div>
                    <div class="col-sm-3 border-end  align-items-center p-1 text-start fw-bold">
                        <p class="m-0 lh-sm ">Engine Number </p>
                    </div>
                    <div class="col-sm-3 border-end  align-items-center p-1 text-start fw-bold">
                        <input name="v163" value="{{$formdata->v163}}" type="text" class="form-control rounded-0 border-bottom h-100" id="" placeholder="">
                    </div>
                </div> 
                <div class="row border ">    
                <div class="col-sm-3 border-end  align-items-center p-1 text-start fw-bold">
                        <p class="m-0 lh-sm ">Inspector</p>
                    </div>
                    <div class="col-sm-3 border-end  align-items-center p-1 text-start fw-bold">
                        <input name="v164" value="{{ $formdata->v164 }}" type="text" class="form-control rounded-0 border-bottom h-100" id="" placeholder="">
                    </div>
                    <div class="col-sm-3 border-end  align-items-center p-1 text-start fw-bold">
                        <p class="m-0 lh-sm ">Quality Inspector</p>
                    </div>
                    <div class="col-sm-3 border-end  align-items-center p-1 text-start fw-bold">
                        <input name="v165" value="{{$formdata->v165}}" type="text" class="form-control rounded-0 border-bottom h-100" id="" placeholder="">
                    </div>
                </div>
                <div class="row border ">    
                    <div class="col-sm-4 border-end  align-items-center p-1 text-start fw-bold">
                        <p class="m-0 lh-sm ">VIN</p>
                    </div>
                    <div class="col-sm-8 border-end  align-items-center p-1 text-start fw-bold">
                        <input name="v166" value="{{$formdata->v166}}" type="text" class="form-control rounded-0 border-bottom h-100" id="" placeholder="">
                    </div>
                </div>
                <div class="row border ">    
                <div class="col-sm-3 border-end  align-items-center p-1 text-start fw-bold">
                        <p class="m-0 lh-sm ">Retailer</p>
                    </div>
                    <div class="col-sm-3 border-end  align-items-center p-1 text-start  fw-bold">
                        <input name="v167" value="{{$formdata->v167}}" type="text" class="form-control rounded-0 border-bottom h-100" id="" placeholder="">
                    </div>
                    <div class="col-sm-3 border-end  align-items-center p-1 text-start  fw-bold">
                        <p class="m-0 lh-sm ">Stamp</p>
                    </div>
                    <div class="col-sm-3 border-end  align-items-center p-1 text-start fw-bold">
                        <input name="v168" value="{{$formdata->v168}}" type="text" class="form-control rounded-0 border-bottom h-100" id="" placeholder="">
                    </div>
                </div>
                <div class="row border ">    
                    <div class="col-sm-4 border-end  align-items-center p-1 text-start  fw-bold">
                        <p class="m-0 lh-sm ">Date</p>
                    </div>
                    <div class="col-sm-8 border-end  align-items-center p-1 text-start  fw-bold">
                        <input name="v169" value="{{$formdata->v169}}" type="text" class="form-control rounded-0 border-bottom h-100" id="" placeholder="">
                    </div>
                </div>
                <div class="row border ">    
                    <div class="col-sm-4 border-end  align-items-center p-1 text-start  fw-bold">
                        <p class="m-0 lh-sm ">Kilometer</p>
                    </div>
                    <div class="col-sm-8 border-end  align-items-center p-1 text-start fw-bold">
                        <input name="v170" value="{{$formdata->v170}}" type="text" class="form-control rounded-0 border-bottom h-100" id="" placeholder="">
                    </div>
                </div>
            </div>         
                
        </div>
    </div>
    <div class="row border border-dark d-flex flex-row ">
        
        <div class="col-sm-12 border-end border-dark align-items-center p-1 text-start  fw-bold">
            <p class="m-0 lh-sm ">Note:</p>
        </div>
        <div class="col-sm-12 border-end border-dark align-items-center p-1 text-start  fw-bold">
            <p class="m-0 lh-sm ">1.  The items with " * " asterisk mark should be done in both distributor and dealer; 
            <span class="text-danger">Los elementos con la marca de asterisco "*" deben realizarse tanto en el distribuidor como en el concesionario;</span></p>
        </div>
        <div class="col-sm-12 border-end border-dark align-items-center p-1 text-start  fw-bold">
            <p class="m-0 lh-sm ">2.  For the distributor mode, the rest items should be done in distributor; 
            <span class="text-danger">Para el modo distribuidor, los demás ítems deben hacerse en distribuidor;</span></p>
        </div>
        <div class="col-sm-12 border-end border-dark align-items-center p-1 text-start  fw-bold">
            <p class="m-0 lh-sm ">3.  For the dealer mode, the rest items should be done in dealer; 
            <span class="text-danger">Para el modo tienda, el resto de elementos deben hacerse en tienda;</span></p>
        </div>
    </div>
</div>
<br>
<div class="container">
        <div class="row">
            <div class="col-9 p-0">
                <h1 class="fs-2 text-end fw-bold m-0">Pre-Delivery Inspection (PDI) checking list</h1>
            </div>
            <div class="col-3 p-0 text-end align-self-center">
            <img src="{{ asset('img/geely.png') }}" class="w-50" alt="Geely">
            </div>
        </div>
    </div>
    <br>
    <div class="container-sm  border border-dark ">
        <div class="row border border-dark ">
            <div class="col-sm border-end border-dark align-items-center p-1 text-start bg-secondary fw-bold">
                <p class="m-0 lh-sm ">Fault codes record</p>
            </div>
        </div>
        <div class="row border border-dark ">
            <div class="col-sm-1  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">1.
                
            </div>
            <div class="col-sm-2  align-items-center p-1 text-start  fw-bold">
                <input name="v171" value="{{$formdata->v171}}" type="text" class="form-control rounded-0 border-bottom " id="" placeholder=""></p>
            </div>
            <div class="col-sm-1  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">2.
                
            </div>
            <div class="col-sm-2  align-items-center p-1 text-start  fw-bold">
                <input name="v172" value="{{$formdata->v172}}" type="text" class="form-control rounded-0 border-bottom " id="" placeholder=""></p>
            </div>
            <div class="col-sm-1  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">3.
                
            </div>
            <div class="col-sm-2  align-items-center p-1 text-start  fw-bold">
                <input name="v173" value="{{$formdata->v173}}" type="text" class="form-control rounded-0 border-bottom " id="" placeholder=""></p>
            </div>
            <div class="col-sm-1  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">4.
                
            </div>
            <div class="col-sm-2  align-items-center p-1 text-start  fw-bold">
                <input name="v174" value="{{$formdata->v174}}" type="text" class="form-control rounded-0 border-bottom " id="" placeholder=""></p>
            </div>
        </div>
        <div class="row border border-dark ">
            <div class="col-sm-1  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">5.
                
            </div>
            <div class="col-sm-2  align-items-center p-1 text-start  fw-bold">
                <input name="v175" value="{{$formdata->v175}}" type="text" class="form-control rounded-0 border-bottom " id="" placeholder=""></p>
            </div>
            <div class="col-sm-1  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">6.
                
            </div>
            <div class="col-sm-2  align-items-center p-1 text-start  fw-bold">
                <input name="v176" value="{{$formdata->v176}}" type="text" class="form-control rounded-0 border-bottom " id="" placeholder=""></p>
            </div>
            <div class="col-sm-1  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">7.
                
            </div>
            <div class="col-sm-2  align-items-center p-1 text-start  fw-bold">
                <input name="v177" value="{{$formdata->v177}}" type="text" class="form-control rounded-0 border-bottom " id="" placeholder=""></p>
            </div>
            <div class="col-sm-1  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">8.
                
            </div>
            <div class="col-sm-2  align-items-center p-1 text-start  fw-bold">
                <input name="v178" value="{{$formdata->v178}}" type="text" class="form-control rounded-0 border-bottom " id="" placeholder=""></p>
            </div>
        </div>
        <div class="row border border-dark ">
            <div class="col-sm border-end border-dark align-items-center p-1 text-start bg-secondary fw-bold">
                <p class="m-0 lh-sm ">Voltage / SOC value record</p>
            </div>
        </div>
        <div class="row border border-dark ">
            <div class="col-sm-2  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">12V battery voltage:</p>
                
            </div>
            <div class="col-sm-4  align-items-center p-1 text-start  fw-bold">
                <input name="v179"  type="text" class="form-control rounded-0 border-bottom " id="" placeholder="">
            </div>
            <div class="col-sm-2  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">EV power battery SOC:</p>
                
            </div>
            <div class="col-sm-4  align-items-center p-1 text-start  fw-bold">
                <input name="v180" value="{{$formdata->v180}}"  type="text" class="form-control rounded-0 border-bottom " id="" placeholder="">
            </div>
        </div>
        <div class="row border border-dark ">
            <div class="col-sm-2  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">48V EMS system battery min cell voltage:</p>
                
            </div>
            <div class="col-sm-4  align-items-center p-1 text-start  fw-bold">
                <input name="v181" value="{{$formdata->v181}}" type="text" class="form-control rounded-0 border-bottom " id="" placeholder="">
            </div>
            <div class="col-sm-2  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">48V EMS system battery SOC:</p>
                
            </div>
            <div class="col-sm-4  align-items-center p-1 text-start  fw-bold">
                <input name="v182" value="{{$formdata->v182}}" type="text" class="form-control rounded-0 border-bottom " id="" placeholder="">
            </div>
        </div>
        <div class="row border border-dark ">
            <div class="col-sm border-end border-dark align-items-center p-1 text-start bg-secondary fw-bold">
                <p class="m-0 lh-sm ">Tire Pressure Record</p>
            </div>
        </div>
        <div class="row border border-dark ">
            <div class="col-sm-2  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">LH</p>
                
            </div>
            <div class="col-sm-4  align-items-center p-1 text-start  fw-bold">
                <input name="v183" value="{{$formdata->v183}}" type="text" class="form-control rounded-0 border-bottom " id="" placeholder="">
            </div>
            <div class="col-sm-2  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">RH</p>
                
            </div>
            <div class="col-sm-4  align-items-center p-1 text-start  fw-bold">
                <input name="v184" value="{{$formdata->v184}}" type="text" class="form-control rounded-0 border-bottom " id="" placeholder="">
            </div>
        </div>
        <div class="row border border-dark ">
            <div class="col-sm-2  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">LR</p>
                
            </div>
            <div class="col-sm-4  align-items-center p-1 text-start  fw-bold">
                <input name="v185" value="{{$formdata->v185}}" type="text" class="form-control rounded-0 border-bottom " id="" placeholder="">
            </div>
            <div class="col-sm-2  align-items-center p-1 text-end  fw-bold">
                <p class="m-0 lh-sm ">RR</p>
                
            </div>
            <div class="col-sm-4  align-items-center p-1 text-start  fw-bold">
                <input name="v186" value="{{$formdata->v186}}" type="text" class="form-control rounded-0 border-bottom " id="" placeholder="">
            </div>
        </div>
        <div class="row border border-dark ">
            <div class="col-sm border-end border-dark align-items-center p-1 text-start bg-secondary fw-bold">
                <p class="m-0 lh-sm ">Faulty and repair record</p>
            </div>
        </div>
        <div class="row border border-dark ">
            
            <textarea readonly class="form-control w-200" name="v187"  rows="10" >{{$formdata->v187}}</textarea>

        </div>
    </div>  
    
    

</form>      
@endsection
