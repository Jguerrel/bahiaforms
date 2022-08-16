@extends('layouts.app')

@section('content')
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
    <input type="hidden" value="Long-term Stored Vehicle Check Sheet" id="formname" name="formname" >
    <input type="hidden" value=" " id="formrequest" name="formrequest" >
    <div class="container border border-dark ">
        
        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-3 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">First stored date</p>
            </div>

            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold" >Model</p>
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
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
            </div>

            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <input value="{{$request->modelo}}" type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="col-sm-3  border-end border-dark align-items-center p-1 text-center">
                <input value="{{$request->chasis}}" type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
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
                <p class="m-0 lh-sm fw-bold" >Check Item</p>
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
                        <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
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
                        <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
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
            <div  class="col-sm-2 border-end border-dark  p-0">
                <div style="height: 75px;" class="row w-100 m-0 p-0">
                    <div class="col m-0 p-0">
                    <div class="row h-50 w-100 p-0 m-0">
                            <div class="col-6 border-bottom border-end border-dark">
                                <p class="lh-sm  ">LF</p>
                            </div>
                            <div class="col-6 border-bottom border-dark">
                                <p class="lh-sm ">RF</p>
                            </div>
                        </div>
                        <div class="row h-50 border-bottom border-dark w-100 p-0 m-0">
                            <div class="col-6 border-end border-dark">
                                <p class="lh-sm  ">LR</p>
                            </div>
                            <div class="col-6 ">
                                <p class="lh-sm ">RR</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="" >
                    </div>
                </div>
                <div style="height: 50px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="" >
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                   
                </div>
                <div style="height: 50px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                  
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
            </div>
            
            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 50px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                  
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
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
                <p class="m-0 lh-sm fw-bold" >Check Item</p>
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
                        <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
                    </div>
                </div>
                
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <p class="m-0 lh-sm fw-bold">Inspector</p>
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
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
            <div  class="col-sm-2 border-end border-dark  p-0 m-0">
                
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="" >
                    </div>
                </div>
                
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 75px;" class="row w-100 m-0 p-0">
                    <div class="col m-0 p-0 h-100">
                        <div class="row h-50 w-100 p-0 m-0">
                            <div class="col-6 border-bottom border-end border-dark">
                                <p class="lh-sm  ">LF</p>
                            </div>
                            <div class="col-6 border-bottom border-dark">
                                <p class="lh-sm ">RF</p>
                            </div>
                        </div>
                        <div class="row h-50 border-dark w-100 p-0 m-0">
                            <div class="col-6 border-end border-dark">
                                <p class="lh-sm  ">LR</p>
                            </div>
                            <div class="col-6 ">
                                <p class="lh-sm ">RR</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
            </div>
            
            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
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
                        <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <p class="m-0 lh-sm fw-bold">Inspector</p>
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
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
            <div  class="col-sm-2 border-end border-dark  p-0 m-0">
                
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="" >
                    </div>
                </div>
                
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 75px;" class="row w-100 m-0 p-0">
                    <div class="col m-0 p-0 h-100">
                        <div class="row h-50 w-100 p-0 m-0">
                            <div class="col-6 border-bottom border-end border-dark">
                                <p class="lh-sm  ">LF</p>
                            </div>
                            <div class="col-6 border-bottom border-dark">
                                <p class="lh-sm ">RF</p>
                            </div>
                        </div>
                        <div class="row h-50 border-dark w-100 p-0 m-0">
                            <div class="col-6 border-end border-dark">
                                <p class="lh-sm  ">LR</p>
                            </div>
                            <div class="col-6 ">
                                <p class="lh-sm ">RR</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
            </div>
            
            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
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
                        <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
                    </div>
                </div>
                
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <p class="m-0 lh-sm fw-bold">Inspector</p>
                    </div>
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
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
            <div  class="col-sm-2 border-end border-dark  p-0 m-0">
                
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="" >
                    </div>
                </div>
                
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 75px;" class="row w-100 m-0 p-0">
                    <div class="col m-0 p-0 h-100">
                        <div class="row h-50 w-100 p-0 m-0">
                            <div class="col-6 border-bottom border-end border-dark">
                                <p class="lh-sm  ">LF</p>
                            </div>
                            <div class="col-6 border-bottom border-dark">
                                <p class="lh-sm ">RF</p>
                            </div>
                        </div>
                        <div class="row h-50 border-dark w-100 p-0 m-0">
                            <div class="col-6 border-end border-dark">
                                <p class="lh-sm  ">LR</p>
                            </div>
                            <div class="col-6 ">
                                <p class="lh-sm ">RR</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
            </div>
            
            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
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
                <p class="m-0 lh-sm fw-bold" >Check Item</p>
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
                        <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
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
                        <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <p class="m-0 lh-sm fw-bold">Inspector</p>
                    </div>
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
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
            <div  class="col-sm-2 border-end border-dark  p-0 m-0">
                
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="" >
                    </div>
                </div>
                
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>
                                        
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 75px;" class="row w-100 m-0 p-0">
                    <div class="col m-0 p-0 h-100">
                        <div class="row h-50 w-100 p-0 m-0">
                            <div class="col-6 border-bottom border-end border-dark">
                                <p class="lh-sm  ">LF</p>
                            </div>
                            <div class="col-6 border-bottom border-dark">
                                <p class="lh-sm ">RF</p>
                            </div>
                        </div>
                        <div class="row h-50 border-dark w-100 p-0 m-0">
                            <div class="col-6 border-end border-dark">
                                <p class="lh-sm  ">LR</p>
                            </div>
                            <div class="col-6 ">
                                <p class="lh-sm ">RR</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
            </div>
            
            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 75px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
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
                <p class="m-0 lh-sm fw-bold" >Check Item</p>
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
                    
                        <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>
                    
                        <input type="text" class=" form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
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
            <div  class="col-sm-2 border-end border-dark  p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="" >
                    </div>
                </div>
                
                
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
                
            </div>
            
            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
                
            </div>
        </div>
        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">Schedule</p>
            </div>

            <div class="col-sm-6 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold" >Check Item</p>
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
                    
                        <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>
                    
                        <input type="text" class=" form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
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
            <div  class="col-sm-2 border-end border-dark  p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="" >
                    </div>
                </div>
                
                
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
                
            </div>
            
            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
                
            </div>
        </div>
        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">Schedule</p>
            </div>

            <div class="col-sm-6 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold" >Check Item</p>
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
                    
                        <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>
                    
                        <input type="text" class=" form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
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
            <div  class="col-sm-2 border-end border-dark  p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="" >
                    </div>
                </div>
                
                
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
                
            </div>
            
            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
                
            </div>
        </div>
        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">Schedule</p>
            </div>

            <div class="col-sm-6 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold" >Check Item</p>
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
                    
                        <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>
                    
                        <input type="text" class=" form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
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
            <div  class="col-sm-2 border-end border-dark  p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="" >
                    </div>
                </div>
                
                
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
                
            </div>
            
            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
                
            </div>
        </div>
        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">Schedule</p>
            </div>

            <div class="col-sm-6 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold" >Check Item</p>
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
                    
                        <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>
                    
                        <input type="text" class=" form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
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
            <div  class="col-sm-2 border-end border-dark  p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="" >
                    </div>
                </div>
                
                
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
                
            </div>
            
            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
                
            </div>
        </div>
        <div class="row border border-dark bg-secondary fw-bold">
            <div class="col-sm-2 border-end border-dark align-items-center p-1 text-start ">
                <p class="m-0 lh-sm ">Schedule</p>
            </div>

            <div class="col-sm-6 border-end border-dark align-items-center p-1 text-center">
                <p class="m-0 lh-sm fw-bold" >Check Item</p>
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
                    
                        <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
                    </div>
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0">
                    <div class="col">
                        <p class="m-0 lh-sm fw-bold">Inspector</p>
                    
                        <input type="text" class=" form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
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
            <div  class="col-sm-2 border-end border-dark  p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col   m-0 p-0">
                        <p class="lh-sm ">Voltage:</p>
                    </div>
                    <div class="col   m-0 p-0">
                        <input type="text" class="w-100 form-control border-1 p-0  " placeholder="" aria-label="" >
                    </div>
                </div>
                
                
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col ">
                    </div>                    
                   
                </div>
                

            </div>
            <div class="col-sm-1  border-end border-dark align-items-center text-center p-0 m-0">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
                
            </div>
            
            <div class="col-sm-1 border-end border-dark align-items-center p-0 m-0 text-center">
                <div style="height: 40px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                        <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                    
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                <div style="height: 60px;" class="row border-bottom border-dark w-100 m-0 p-0">
                    <div class="col">
                    <input style="height: 30px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="" id="">                    
                    </div>
                   
                </div>
                
                
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
    <br>
@endsection
