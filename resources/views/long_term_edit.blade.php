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

$formdata = json_decode($request->formrequest);

//dd($formdata);
//endif
?>
<div class="container">
    <div class="row">
        <div class="col-9 p-0">
            <h1 class="fs-2 text-end fw-bold m-0">Long-term Stored Vehicle Check Sheet</h1>
            @if(isset($title))
                <h3 class="fs-2 text-end fw-bold m-0">{{ $title }}</h3>
            @endif
        <div class="col-3 p-0 text-end align-self-center">
            <img src="{{ asset('img/geely.png') }}" class="w-50" alt="Geely">
        </div>
    </div>
</div>
<br>
<form name="vehicleform" id="vehicleform" method="post" action="{{ route('long.term.update',$request->id) }}">
    @csrf
    <input type="hidden" value="{{$request->marca}}" id="marca" name="marca">
    <input type="hidden" value="{{$request->modelo}}" id="modelo" name="modelo">
    <input type="hidden" value="{{$request->motor}}" id="motor" name="motor">
    <input type="hidden" value="{{$request->chasis}}" id="chasis" name="chasis">
    <input type="hidden" value="{{$request->anio}}" id="anio" name="anio">
    <input type="hidden" value="{{$request->version}}" id="version" name="version">
    <input type="hidden" value="{{$request->colorexterior}}" id="colorexterior" name="colorexterior">
    <input type="hidden" value="{{$request->colorinterior}}" id="colorinterior" name="colorinterior">
    <input type="hidden" value="Long-term Stored Vehicle Check Sheet" id="formname" name="formname">
    <input type="hidden" value=" " id="formrequest" name="formrequest">
    <input type="hidden" value="long_term_store" id="formid" name="formid">
    <input type="hidden" value="{{ route('long.term.view') }}" id="formaction" name="formaction">
    <div class="container border border-dark ">

        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-3 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">First stored date</p>
            </div>

            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Model</p>
            </div>
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Location</p>
            </div>
            <div class="col-sm-3  border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">VIN</p>
            </div>
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Sales date</p>
            </div>
        </div>
        <div class="row border border-dark ">
            <div class="col-sm-3 border-end border-dark align-items-center p-1 text-start ">
                <input name="v114" value="{{$formdata->v114}}" type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="">
            </div>

            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <input name="v115" value="{{$formdata->v115}}" type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="">
            </div>
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <input name="v116" value="{{$formdata->v116}}" type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="">
            </div>
            <div class="col-sm-3  border-end border-dark align-items-center p-1 text-center">
                <input name="v117" value="{{$formdata->v117}}" type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="">
            </div>
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <input name="v118" value="{{$formdata->v118}}" type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="">
            </div>
        </div>
    </div>
    <br>
    <div class="container border border-dark ">
        <div class="row border border-dark  fw-bold">
            <div class="col border-end border-dark align-items-center p-1 text-center ">
                <p class="m-0 lh-sm ">Inbound Check</p>
            </div>
        </div>
        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">Schedule</p>
            </div>

            <div class="col-sm-6 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check Item</p>
            </div>
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check</p>
            </div>
            <div class="col-sm-1  border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Repair</p>
            </div>
            <div class="col-sm-1 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Remark</p>
            </div>
        </div>
        <div class="row border border-dark ">

            <div class="col-sm-2 border-end border-dark align-items-center p-0 m-0 text-start ">
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspection date</p>
                    </div>
                </div>

                <div style="height: 50px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <input name="v119" value="{{$formdata->v119}}" type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <input name="v120" value="{{$formdata->v120}}" type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                    </div>
                </div>
                <div style="height: 40px;" class="row">
                    <div class="col">
                    </div>
                </div>

            </div>

            <div class="col-sm-6 border-end border-dark p-0">
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">1</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Tire pressure check</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">2</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">12V Battery Inspection (Voltage: 12.5V)</p>
                    </div>
                </div>
                <div style="height: 50px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">3</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">48V EMS battery voltage (min cell voltage≥3.3V)</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">4</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">48V EMS battery SOC ( ≥45%)</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">5</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">EV power battery SOC ( ≥50%)</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">6</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Close all lamps, doors and windows</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">7</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Unload the negative wire of 12V battery</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">8</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Wiper blade remove</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">9</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Remote key store</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 border-end border-dark  p-0">
                <div style="height: 75px;" class="row w-100 m-0 p-0">
                    <div class="col m-0 p-0">
                        <div class="row h-50 w-100 p-0 m-0">
                            <div class="col-6 border-bottom border-end border-dark">
                                <input class="form-control form-control-sm " type="text" name="v200" placeholder="LF" value="{{$formdata->v200}}">
                            </div>
                            <div class="col-6 border-bottom border-dark">
                                <input class="form-control form-control-sm" type="text" name="v201" placeholder="RF" value="{{$formdata->v201}}">
                            </div>
                        </div>
                        <div class="row h-50 border-bottom border-dark w-100 p-0 m-0">
                            <div class="col-6 border-end border-dark">
                                <input class="form-control form-control-sm" type="text" name="v202" placeholder="LR" value="{{$formdata->v202}}">
                            </div>
                            <div class="col-6 ">
                                <input class="form-control form-control-sm" type="text" name="v203" placeholder="RR" value="{{$formdata->v203}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input name="v121" value="{{$formdata->v121}}" type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 50px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input name="v122" value="{{$formdata->v122}}" type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v220" {{isset($formdata->v220)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v221" {{isset($formdata->v221)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v222" {{isset($formdata->v222)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v223" {{isset($formdata->v223)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v224" {{isset($formdata->v224)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v225" {{isset($formdata->v225)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v1" {{isset($formdata->v1)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v2" {{isset($formdata->v2)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 50px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v3" {{isset($formdata->v3)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v4" {{isset($formdata->v4)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v5" {{isset($formdata->v5)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v6" {{isset($formdata->v6)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v7" {{isset($formdata->v7)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v8" {{isset($formdata->v8)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v9" {{isset($formdata->v9)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
            </div>

            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v10" {{isset($formdata->v10)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v11" {{isset($formdata->v11)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 50px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v12" {{isset($formdata->v12)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v13" {{isset($formdata->v13)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v14" {{isset($formdata->v14)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v15" {{isset($formdata->v15)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v16" {{isset($formdata->v16)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v17" {{isset($formdata->v17)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v18" {{isset($formdata->v18)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container border border-dark">
        <div class="row border border-dark  fw-bold">
            <div class="col border-end border-dark align-items-center p-1 text-center ">
                <p class="m-0 lh-sm ">Regular Check</p>
            </div>
        </div>
        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">Schedule</p>
            </div>

            <div class="col-sm-6 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check Item</p>
            </div>
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check</p>
            </div>
            <div class="col-sm-1  border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Repair</p>
            </div>
            <div class="col-sm-1 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Remark</p>
            </div>
        </div>
        <div class="row border border-dark ">

            <div class="col-sm-2 border-end border-dark align-items-center p-0 -m-0 text-start ">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">3 months stored vehicle</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspection date</p>
                    </div>
                </div>

                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v125" value="{{$formdata->v125}}" type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="">
                    </div>
                </div>

                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v126" value="{{$formdata->v126}}" type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">

                    </div>
                </div>
            </div>

            <div class="col-sm-6 border-end border-dark p-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">1</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Battery Inspection (Voltage:12.5 V)</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">2</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Starting and warming-up</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">3</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">A/C Operation</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">4</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Exterior inspection</p>
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">5</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Move the vehicle to remove rust on brake disc and change tire-ground contact point at lesst 1/4 circle</p>
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">6</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Tire pressure check</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-2 border-end border-dark  p-0 m-0">

                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input name="v127" value="{{$formdata->v127}}" type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="">
                    </div>
                </div>

                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v226" {{isset($formdata->v226)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v227" {{isset($formdata->v227)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v228" {{isset($formdata->v228)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v229" {{isset($formdata->v229)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 75px;" class="row w-100 m-0 p-0">
                    <div class="col m-0 p-0 h-100">
                        <div class="row h-50 w-100 p-0 m-0">
                            <div class="col-6 border-bottom border-end border-dark">
                                <input class="form-control form-control-sm" type="text" name="v204" placeholder="LF" value="{{$formdata->v204}}">
                            </div>
                            <div class="col-6 border-bottom border-dark">
                                <input class="form-control form-control-sm" type="text" name="v205" placeholder="RF" value="{{$formdata->v205}}">
                            </div>
                        </div>
                        <div class="row h-50 border-bottom border-dark w-100 p-0 m-0">
                            <div class="col-6 border-end border-dark">
                                <input class="form-control form-control-sm" type="text" name="v206" placeholder="LR" value="{{$formdata->v206}}">
                            </div>
                            <div class="col-6 ">
                                <input class="form-control form-control-sm" type="text" name="v207" placeholder="RR" value="{{$formdata->v207}}">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v19" {{isset($formdata->v19)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v20" {{isset($formdata->v20)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v21" {{isset($formdata->v21)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v22" {{isset($formdata->v22)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v23" {{isset($formdata->v23)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v24" {{isset($formdata->v24)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>

            </div>

            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v25" {{isset($formdata->v25)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v26" {{isset($formdata->v26)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v27" {{isset($formdata->v27)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v28" {{isset($formdata->v28)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v29" {{isset($formdata->v29)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v30" {{isset($formdata->v30)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>

            </div>
        </div>
        <div class="row border border-dark ">

            <div class="col-sm-2 border-end border-dark align-items-center p-0 -m-0 text-start ">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">6 months stored vehicle</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspection date</p>
                    </div>
                </div>

                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v128" value="{{$formdata->v128}}" type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v129" value="{{$formdata->v129}}" type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v130" value="{{$formdata->v130}}" type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">

                    </div>
                </div>
            </div>

            <div class="col-sm-6 border-end border-dark p-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">1</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Battery Inspection (Voltage:12.5 V)</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">2</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Starting and warming-up</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">3</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Interior inspection (A/C Operation)</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">4</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Exterior inspection</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">5</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Under hood inspection</p>
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">6</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Move the vehicle to remove rust on brake disc and change tire-ground contact point at lesst 1/4 circle</p>
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">7</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Tire pressure check</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-2 border-end border-dark  p-0 m-0">

                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input name="v131" value="{{$formdata->v131}}" type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="">
                    </div>
                </div>

                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v230" {{isset($formdata->v230)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v231" {{isset($formdata->v231)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v232" {{isset($formdata->v232)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v233" {{isset($formdata->v233)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v234" {{isset($formdata->v234)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 75px;" class="row w-100 m-0 p-0">
                    <div class="col m-0 p-0 h-100">
                        <div class="row h-50 w-100 p-0 m-0">
                            <div class="col-6 border-bottom border-end border-dark">
                                <input class="form-control form-control-sm" type="text" name="v208" placeholder="LF" value="{{$formdata->v208}}">
                            </div>
                            <div class="col-6 border-bottom border-dark">
                                <input class="form-control form-control-sm" type="text" name="v209" placeholder="RF" value="{{$formdata->v209}}">
                            </div>
                        </div>
                        <div class="row h-50 border-bottom border-dark w-100 p-0 m-0">
                            <div class="col-6 border-end border-dark">
                                <input class="form-control form-control-sm" type="text" name="v210" placeholder="LR" value="{{$formdata->v210}}">
                            </div>
                            <div class="col-6 ">
                                <input class="form-control form-control-sm" type="text" name="v211" placeholder="RR" value="{{$formdata->v211}}">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v31" {{isset($formdata->v31)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v32" {{isset($formdata->v32)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v33" {{isset($formdata->v33)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v34" {{isset($formdata->v34)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v35" {{isset($formdata->v35)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v36" {{isset($formdata->v36)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v37" {{isset($formdata->v37)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>

            </div>

            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v38" {{isset($formdata->v38)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v39" {{isset($formdata->v39)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v40" {{isset($formdata->v40)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v41" {{isset($formdata->v41)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v42" {{isset($formdata->v42)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v43" {{isset($formdata->v43)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v44" {{isset($formdata->v44)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>

            </div>
        </div>
        <div class="row border border-dark ">

            <div class="col-sm-2 border-end border-dark align-items-center p-0 -m-0 text-start ">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">9 months stored vehicle</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspection date</p>
                    </div>
                </div>

                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v132" type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="">
                    </div>
                </div>

                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v133" type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">

                    </div>
                </div>
            </div>

            <div class="col-sm-6 border-end border-dark p-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">1</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Battery Inspection (Voltage:12.5 V)</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">2</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Starting and warming-up</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">3</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">A/C Operation</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">4</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Exterior inspection</p>
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">5</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Move the vehicle to remove rust on brake disc and change tire-ground contact point at lesst 1/4 circle</p>
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">6</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Tire pressure check</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-2 border-end border-dark  p-0 m-0">

                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input name="v134" type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="">
                    </div>
                </div>

                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v235" {{isset($formdata->v235)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v236" {{isset($formdata->v236)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v237" {{isset($formdata->v237)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v238" {{isset($formdata->v238)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 75px;" class="row w-100 m-0 p-0">
                    <div class="col m-0 p-0 h-100">
                        <div class="row h-50 w-100 p-0 m-0">
                            <div class="col-6 border-bottom border-end border-dark">
                                <input class="form-control form-control-sm" type="text" name="v212" placeholder="LF" value="{{$formdata->v212}}">
                            </div>
                            <div class="col-6 border-bottom border-dark">
                                <input class="form-control form-control-sm" type="text" name="v213" placeholder="RF" value="{{$formdata->v213}}">
                            </div>
                        </div>
                        <div class="row h-50 border-bottom border-dark w-100 p-0 m-0">
                            <div class="col-6 border-end border-dark">
                                <input class="form-control form-control-sm" type="text" name="v214" placeholder="LR" value="{{$formdata->v214}}">
                            </div>
                            <div class="col-6 ">
                                <input class="form-control form-control-sm" type="text" name="v215" placeholder="RR" value="{{$formdata->v215}}">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v45" {{isset($formdata->v45)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v46" {{isset($formdata->v46)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v47" {{isset($formdata->v47)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v48" {{isset($formdata->v48)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v49" {{isset($formdata->v49)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v50" {{isset($formdata->v50)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>

            </div>

            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v51" {{isset($formdata->v51)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v52" {{isset($formdata->v52)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v53" {{isset($formdata->v53)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v54" {{isset($formdata->v54)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v55" {{isset($formdata->v55)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v56" {{isset($formdata->v56)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-9 p-0">
                <h1 class="fs-2 text-end fw-bold m-0">Long-term Stored Vehicle Check Sheet</h1>
            </div>
            <div class="col-3 p-0 text-end align-self-center">
                <img src="{{ asset('img/geely.png') }}" class="w-50" alt="Geely">
            </div>
        </div>
    </div>
    <br>
    <div class="container border border-dark">
        <div class="row border border-dark  fw-bold">
            <div class="col border-end border-dark align-items-center p-1 text-center ">
                <p class="m-0 lh-sm ">Regular Check</p>
            </div>
        </div>
        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">Schedule</p>
            </div>

            <div class="col-sm-6 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check Item</p>
            </div>
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check</p>
            </div>
            <div class="col-sm-1  border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Repair</p>
            </div>
            <div class="col-sm-1 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Remark</p>
            </div>
        </div>
        <div class="row border border-dark ">

            <div class="col-sm-2 border-end border-dark align-items-center p-0 -m-0 text-start ">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">12 months stored vehicle</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspection date</p>
                    </div>
                </div>

                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v135" type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">12 months stored vehicle</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspection date</p>
                    </div>
                </div>

                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v136" type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v137" type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">

                    </div>
                </div>
            </div>

            <div class="col-sm-6 border-end border-dark p-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">1</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Battery Inspection (Voltage:12.5 V)</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">2</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Functional operation inspection</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">3</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Under vehicle inspection</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">4</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Under hood inspection</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">5</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Exterior inspection</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">6</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Interior inspection</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">7</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Road test and remove rust on brake disc</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">8</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Change tire-ground contact point at least 1/4 circle</p>
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">9</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">Move the vehicle ＆ tire pressure check</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-2 border-end border-dark  p-0 m-0">

                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input name="v57" type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="">
                    </div>
                </div>

                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v239" {{isset($formdata->v239)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v240" {{isset($formdata->v240)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v241" {{isset($formdata->v241)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>


                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v242" {{isset($formdata->v242)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v243" {{isset($formdata->v243)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v244" {{isset($formdata->v244)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v245" {{isset($formdata->v245)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 75px;" class="row w-100 m-0 p-0">
                    <div class="col m-0 p-0 h-100">
                        <div class="row h-50 w-100 p-0 m-0">
                            <div class="col-6 border-bottom border-end border-dark">
                                <input class="form-control form-control-sm" type="text" name="v216" placeholder="LF" value="{{$formdata->v216}}">
                            </div>
                            <div class="col-6 border-bottom border-dark">
                                <input class="form-control form-control-sm" type="text" name="v217" placeholder="RF" value="{{$formdata->v217}}">
                            </div>
                        </div>
                        <div class="row h-50 border-bottom border-dark w-100 p-0 m-0">
                            <div class="col-6 border-end border-dark">
                                <input class="form-control form-control-sm" type="text" name="v218" placeholder="LR" value="{{$formdata->v218}}">
                            </div>
                            <div class="col-6 ">
                                <input class="form-control form-control-sm" type="text" name="v219" placeholder="RR" value="{{$formdata->v219}}">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v58" {{isset($formdata->v58)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v59" {{isset($formdata->v59)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v60" {{isset($formdata->v60)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v61" {{isset($formdata->v61)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v62" {{isset($formdata->v62)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v63" {{isset($formdata->v3)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v4" {{isset($formdata->v64)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v65" {{isset($formdata->v65)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v66" {{isset($formdata->v66)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>

            </div>

            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v67" {{isset($formdata->v67)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v68" {{isset($formdata->v68)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v69" {{isset($formdata->v69)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v70" {{isset($formdata->v70)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v71" {{isset($formdata->v71)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v72" {{isset($formdata->v72)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v73" {{isset($formdata->v73)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v74" {{isset($formdata->v74)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v75" {{isset($formdata->v75)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>

            </div>
        </div>

    </div>
    <br>

    <div class="container border border-dark">
        <div class="row border border-dark  fw-bold">
            <div class="col border-end border-dark align-items-center p-1 text-center ">
                <p class="m-0 lh-sm ">New Technology Regular Check</p>
            </div>
        </div>
        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">Schedule</p>
            </div>

            <div class="col-sm-6 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check Item</p>
            </div>
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check</p>
            </div>
            <div class="col-sm-1  border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Repair</p>
            </div>
            <div class="col-sm-1 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Remark</p>
            </div>
        </div>
        <div class="row border border-dark ">

            <div class="col-sm-2 border-end border-dark align-items-center p-0 -m-0 text-start ">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">2 months</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspection date</p>

                        <input name="v138" type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>

                        <input name="v139" type="text" class=" form-control border-0 p-0 text-center letter" placeholder="" aria-label="">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 border-end border-dark p-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">1</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">EV power battery SOC ( ≥50%)</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">2</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">48V EMS battery voltage (min cell voltage≥3.3V）</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">3</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">48V EMS battery SOC ( ≥45%)</p>
                    </div>
                </div>


            </div>
            <div class="col-sm-2 border-end border-dark  p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v246" {{isset($formdata->v246)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input name="v140" type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="">
                    </div>
                </div>


                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v247" {{isset($formdata->v247)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>


            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v76" {{isset($formdata->v76)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v77" {{isset($formdata->v77)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v78" {{isset($formdata->v78)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>


            </div>

            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v79" {{isset($formdata->v79)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v80" {{isset($formdata->v80)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v81" {{isset($formdata->v81)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>


            </div>
        </div>
        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">Schedule</p>
            </div>

            <div class="col-sm-6 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check Item</p>
            </div>
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check</p>
            </div>
            <div class="col-sm-1  border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Repair</p>
            </div>
            <div class="col-sm-1 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Remark</p>
            </div>
        </div>
        <div class="row border border-dark ">

            <div class="col-sm-2 border-end border-dark align-items-center p-0 -m-0 text-start ">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">4 months</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspection date</p>

                        <input name="v141" value="{{$formdata->v141}}" type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>

                        <input name="v142" value="{{$formdata->v142}}" type="text" class=" form-control border-0 p-0 text-center letter" placeholder="" aria-label="">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 border-end border-dark p-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">1</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">EV power battery SOC ( ≥50%)</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">2</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">48V EMS battery voltage (min cell voltage≥3.3V）</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">3</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">48V EMS battery SOC ( ≥45%)</p>
                    </div>
                </div>


            </div>
            <div class="col-sm-2 border-end border-dark  p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v248" {{isset($formdata->v248)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input name="v143" value="{{$formdata->v143}}" type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="">
                    </div>
                </div>


                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v249" {{isset($formdata->v249)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>


            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v82" {{isset($formdata->v82)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v83" {{isset($formdata->v83)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v84" {{isset($formdata->v84)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>


            </div>

            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v85" {{isset($formdata->v85)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v86" {{isset($formdata->v86)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v87" {{isset($formdata->v87)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>


            </div>
        </div>
        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">Schedule</p>
            </div>

            <div class="col-sm-6 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check Item</p>
            </div>
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check</p>
            </div>
            <div class="col-sm-1  border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Repair</p>
            </div>
            <div class="col-sm-1 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Remark</p>
            </div>
        </div>
        <div class="row border border-dark ">

            <div class="col-sm-2 border-end border-dark align-items-center p-0 -m-0 text-start ">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">6 months</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspection date</p>

                        <input name="v144" value="{{$formdata->v144}}" type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>

                        <input name="v145" value="{{$formdata->v145}}" type="text" class=" form-control border-0 p-0 text-center letter" placeholder="" aria-label="">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 border-end border-dark p-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">1</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">EV power battery SOC ( ≥50%)</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">2</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">48V EMS battery voltage (min cell voltage≥3.3V）</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">3</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">48V EMS battery SOC ( ≥45%)</p>
                    </div>
                </div>


            </div>
            <div class="col-sm-2 border-end border-dark  p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v250" {{isset($formdata->v250)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input name="v146" value="{{$formdata->v146}}" type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="">
                    </div>
                </div>


                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v251" {{isset($formdata->v251)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>


            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v88" {{isset($formdata->v88)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v89" {{isset($formdata->v89)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v90" {{isset($formdata->v90)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>


            </div>

            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v91" {{isset($formdata->v91)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v92" {{isset($formdata->v92)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v93" {{isset($formdata->v93)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>


            </div>
        </div>
        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">Schedule</p>
            </div>

            <div class="col-sm-6 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check Item</p>
            </div>
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check</p>
            </div>
            <div class="col-sm-1  border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Repair</p>
            </div>
            <div class="col-sm-1 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Remark</p>
            </div>
        </div>
        <div class="row border border-dark ">

            <div class="col-sm-2 border-end border-dark align-items-center p-0 -m-0 text-start ">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">8 months</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspection date</p>

                        <input name="v147" value="{{$formdata->v147}}" type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>

                        <input name="v148" value="{{$formdata->v148}}" type="text" class=" form-control border-0 p-0 text-center letter" placeholder="" aria-label="">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 border-end border-dark p-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">1</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">EV power battery SOC ( ≥50%)</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">2</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">48V EMS battery voltage (min cell voltage≥3.3V）</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">3</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">48V EMS battery SOC ( ≥45%)</p>
                    </div>
                </div>


            </div>
            <div class="col-sm-2 border-end border-dark  p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v252" {{isset($formdata->v252)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input name="v150" value="{{$formdata->v150}}" type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="">
                    </div>
                </div>


                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v253" {{isset($formdata->v253)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>


            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v95" {{isset($formdata->v95)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v96" {{isset($formdata->v96)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v97" {{isset($formdata->v97)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>


            </div>

            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v98" {{isset($formdata->v98)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v99" {{isset($formdata->v99)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v100" {{isset($formdata->v100)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>


            </div>
        </div>
        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">Schedule</p>
            </div>

            <div class="col-sm-6 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check Item</p>
            </div>
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check</p>
            </div>
            <div class="col-sm-1  border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Repair</p>
            </div>
            <div class="col-sm-1 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Remark</p>
            </div>
        </div>
        <div class="row border border-dark ">

            <div class="col-sm-2 border-end border-dark align-items-center p-0 -m-0 text-start ">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">10 months</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspection date</p>

                        <input name="v151" value="{{$formdata->v151}}" type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>

                        <input name="v152" value="{{$formdata->v152}}" type="text" class=" form-control border-0 p-0 text-center letter" placeholder="" aria-label="">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 border-end border-dark p-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">1</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">EV power battery SOC ( ≥50%)</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">2</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">48V EMS battery voltage (min cell voltage≥3.3V）</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">3</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">48V EMS battery SOC ( ≥45%)</p>
                    </div>
                </div>


            </div>
            <div class="col-sm-2 border-end border-dark  p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v254" {{isset($formdata->v254)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input name="v153" value="{{$formdata->v153}}" type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="">
                    </div>
                </div>


                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v255" {{isset($formdata->v255)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>


            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v101" {{isset($formdata->v101)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v102" {{isset($formdata->v102)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v103" {{isset($formdata->v103)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>


            </div>

            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v104" {{isset($formdata->v104)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v105" {{isset($formdata->v105)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v106" {{isset($formdata->v106)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>


            </div>
        </div>
        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">Schedule</p>
            </div>

            <div class="col-sm-6 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check Item</p>
            </div>
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Check</p>
            </div>
            <div class="col-sm-1  border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Repair</p>
            </div>
            <div class="col-sm-1 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold">Remark</p>
            </div>
        </div>
        <div class="row border border-dark ">

            <div class="col-sm-2 border-end border-dark align-items-center p-0 -m-0 text-start ">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">12 months</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspection date</p>

                        <input name="v153" value="{{$formdata->v153}}" type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="">
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>

                        <input name="v154" value="{{$formdata->v154}}" type="text" class=" form-control border-0 p-0 text-center letter" placeholder="" aria-label="">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 border-end border-dark p-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">1</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">EV power battery SOC ( ≥50%)</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">2</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">48V EMS battery voltage (min cell voltage≥3.3V）</p>
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col-1 border-end border-dark">
                        <p class="lh-sm  ">3</p>
                    </div>
                    <div class="col border-end border-dark">
                        <p class="lh-sm ">48V EMS battery SOC ( ≥45%)</p>
                    </div>
                </div>


            </div>
            <div class="col-sm-2 border-end border-dark  p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v256" {{isset($formdata->v256)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input name="v155" value="{{$formdata->v155}}" type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="">
                    </div>
                </div>


                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input name="v257" {{isset($formdata->v257)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">

                    </div>

                </div>


            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v108" {{isset($formdata->v108)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v109" {{isset($formdata->v109)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v110" {{isset($formdata->v110)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>


            </div>

            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v111" {{isset($formdata->v111)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v112" {{isset($formdata->v112)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input name="v113" {{isset($formdata->v113)? __('checked') : __('') }} style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1" id="">
                    </div>

                </div>


            </div>
        </div>
    </div>

    <div class="container">
        <div style="height: 100px;" class="row ">
            <div class="h-100 col-md-12 d-flex align-items-center p-1 text-center">
                <button type="submit" class="btn btn-primary mh-100" style="width: 200px; height: 100px;">Editar Datos</button>
            </div>
        </div>
    </div>



</form>
<br>
@endsection
