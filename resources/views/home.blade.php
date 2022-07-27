@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
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

                    <div class="card-body">
                    @if (isset($data))
                    <input type="text" value="{{$data->marca}}"  id="marca"  name="marca" readonly class="border-1 rounded-1 text-start ">
                                        <input type="text" value="{{$data->modelo}}" id="modelo" name="modelo" readonly>
                                        <input type="text" value="{{$data->motor}}" id="motor" name="motor" readonly>
                                        <input type="text" value="{{$data->chasis}}" id="chasis" name="chasis" readonly>
                                        <input type="text" value="{{$data->anio}}" id="anio" name="anio" readonly>
                                        <input type="text" value="{{$data->version}}" id="version" name="version" readonly>
                                        <input type="text" value="{{$data->colorexterior}}" id="colorexterior" name="colorexterior" readonly>
                                        <input type="text" value="{{$data->colorinterior}}" id="colorinterior" name="colorinterior" readonly>
                                        <br>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                        
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
                                        <button type="submit" class="btn btn-primary">Handover Check List</button>
                                    
                                    </form> 
                                </div>
                                <div class="col-md-4">
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
                                        <button type="submit" class="btn btn-primary">PDI Check List</button>
                                    </form>
                                </div>
                                <div class="col-md-4">
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
            
                                        <button type="submit" class="btn btn-primary">48v Battery</button>
                                    </form>    
                                </div>
                            </div>
                        </div>
                    @endif

                        
                    </div>
                </div>
        </div>
    </div>
    
            <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="card-header">{{ __('Seleccione el formulario que desea realizar') }}</div>
                    <div class="card-body">
                     
                          
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
