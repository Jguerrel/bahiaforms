@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
                <div class="card">
                    <div class="card-header">{{ __('Ingrese el número de chasis') }}</div>
                    <form name="vin-search" id="vin-search" method="post" action="{{ route('search.vin') }}">
                    @csrf
                    <div class="card-body">
            
                    <input type="text" class="form-control border-1 rounded-1 text-start " id="vin" name="vin" placeholder="" value="5KBRL6860HO900094"> 
                    <br>
                    <button type="submit" class="btn btn-primary">Buscar</button>

                    </div>
                    </form>
                </div>
                @if (isset($data)) 
                <div class="card">
                    <div class="card-header">{{ __('Información del Vehículo') }}</div>
                    <div class="card-body">
                    
                        <div class="container ">
                            <div class="row justify-content-center ">
                                <div class="col-md-4 ">                    
                                <strong>Marca: </strong>{{$data->marca}}
                                </div>
                                <div class="col-md-4">                    
                                <strong>Modelo: </strong>{{$data->modelo}}
                                </div>
                                <div class="col-md-4">                    
                                <strong>Motor: </strong>{{$data->motor}}
                                </div>
                            
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-4">                    
                                <strong>VIM: </strong>{{$data->chasis}}
                                </div>
                                <div class="col-md-4">                    
                                <strong>Año: </strong>{{$data->anio}}
                                </div>
                                <div class="col-md-4">                    
                                <strong>Versión: </strong>{{$data->version}}
                                </div>
                            </div>
                            <div class="row justify-content-center">    
                                <div class="col-md-6">                    
                                <strong>Color Exterior: </strong>{{$data->colorexterior}}
                                </div>
                                <div class="col-md-6">                    
                                <strong>Color Interior: </strong>{{$data->colorinterior}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">{{ __('Indique el formulario que desea realizar') }}</div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-3" >
                        
                                    <form name="handover_check_list" id="handover_check_list" method="post" action="{{ route('handover.check') }}">    
                                    @csrf
                                    <input type="hidden" value="{{$data->marca}}"  id="marca"  name="marca" readonly class="border-1 rounded-1 text-start ">
                                        <input type="hidden" value="{{$data->modelo}}" id="modelo" name="modelo" readonly>
                                        <input type="hidden" value="{{$data->motor}}" id="motor" name="motor" readonly>
                                        <input type="hidden" value="{{$data->chasis}}" id="chasis" name="chasis" readonly>
                                        <input type="hidden" value="{{$data->anio}}" id="anio" name="anio" readonly>
                                        <input type="hidden" value="{{$data->version}}" id="version" name="version" readonly>
                                        <input type="hidden" value="{{$data->colorexterior}}" id="colorexterior" name="colorexterior" readonly>
                                        <input type="hidden" value="{{$data->colorinterior}}" id="colorinterior" name="colorinterior" readonly>
                                        <button type="submit" class="btn btn-primary mh-100" style="height: 100px;">Handover Check List</button>
                                    
                                    </form> 
                                </div>
                                <div class="col-md-3">
                                    <form name="pdi_check_list" id="pdi_check_list" method="post" action="{{ route('pdi.check') }}">    
                                    @csrf
                                        <input type="hidden" value="{{$data->marca}}"  id="marca"  name="marca" readonly class="border-1 rounded-1 text-start ">
                                        <input type="hidden" value="{{$data->modelo}}" id="modelo" name="modelo" readonly>
                                        <input type="hidden" value="{{$data->motor}}" id="motor" name="motor" readonly>
                                        <input type="hidden" value="{{$data->chasis}}" id="chasis" name="chasis" readonly>
                                        <input type="hidden" value="{{$data->anio}}" id="anio" name="anio" readonly>
                                        <input type="hidden" value="{{$data->version}}" id="version" name="version" readonly>
                                        <input type="hidden" value="{{$data->colorexterior}}" id="colorexterior" name="colorexterior" readonly>
                                        <input type="hidden" value="{{$data->colorinterior}}" id="colorinterior" name="colorinterior" readonly>
                                        <button type="submit" class="btn btn-primary mh-100" style="height: 100px;">Pre-Delivery Inspection (PDI) Checking List</button>
                                    </form>
                                </div>
                                <div class="col-md-3">
                                    <form name="48v_battery" id="48v_battery" method="post" action="{{ route('battery.inspection') }}">    
                                    @csrf
                                        <input type="hidden" value="{{$data->marca}}"  id="marca"  name="marca" readonly class="border-1 rounded-1 text-start ">
                                        <input type="hidden" value="{{$data->modelo}}" id="modelo" name="modelo" readonly>
                                        <input type="hidden" value="{{$data->motor}}" id="motor" name="motor" readonly>
                                        <input type="hidden" value="{{$data->chasis}}" id="chasis" name="chasis" readonly>
                                        <input type="hidden" value="{{$data->anio}}" id="anio" name="anio" readonly>
                                        <input type="hidden" value="{{$data->version}}" id="version" name="version" readonly>
                                        <input type="hidden" value="{{$data->colorexterior}}" id="colorexterior" name="colorexterior" readonly>
                                        <input type="hidden" value="{{$data->colorinterior}}" id="colorinterior" name="colorinterior" readonly>
            
                                        <button type="submit" class="btn btn-primary mh-100" style="height: 100px;">48v Battery Vehicule Inspection and charging Record Form</button>
                                    </form>    
                                </div>
                                <div class="col-md-3">
                                    <form name="48v_battery" id="48v_battery" method="post" action="{{ route('battery.inspection') }}">    
                                    @csrf
                                        <input type="hidden" value="{{$data->marca}}"  id="marca"  name="marca" readonly class="border-1 rounded-1 text-start ">
                                        <input type="hidden" value="{{$data->modelo}}" id="modelo" name="modelo" readonly>
                                        <input type="hidden" value="{{$data->motor}}" id="motor" name="motor" readonly>
                                        <input type="hidden" value="{{$data->chasis}}" id="chasis" name="chasis" readonly>
                                        <input type="hidden" value="{{$data->anio}}" id="anio" name="anio" readonly>
                                        <input type="hidden" value="{{$data->version}}" id="version" name="version" readonly>
                                        <input type="hidden" value="{{$data->colorexterior}}" id="colorexterior" name="colorexterior" readonly>
                                        <input type="hidden" value="{{$data->colorinterior}}" id="colorinterior" name="colorinterior" readonly>
            
                                        <button type="submit" class="btn btn-primary mh-100" style="height: 100px;">Long Term Stored Vehicle Check Sheet</button>
                                    </form>    
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            @endif
        </div>
    </div>
    
</div>
@endsection
