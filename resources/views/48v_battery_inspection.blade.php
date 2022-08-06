@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-9 p-0">
                <h5 class=" text-end fw-bold m-0">48V Battery Vechicle Inspection and charging Record Form</h5>
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
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">2</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">3</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">4</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">5</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">6</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">7</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">8</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">9</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
        </div>
        <div style="height: 100px;" class="row border border-dark">
            <div class="col-md-1 border-end border-dark d-flex align-items-center">
                <h1 class="fs-5 text-end fw-bold m-0 ">10</h1>
            </div>
            <div class="col-md-2 border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class=" form-control border-0 p-0 text-center letter w-100" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-2 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="h-100 col-md-1 border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="h-100 form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
        </div>
    </div>

       

@endsection
