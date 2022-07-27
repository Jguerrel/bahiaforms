@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-9 p-0">
                <h1 class="fs-2 text-end fw-bold m-0">48V Battery Vechicle Inspection and charging Record Form</h1>
            </div>
            
        </div>
    </div>
    
    <br>
    <div class="container border border-dark">
        
        <div class="row border border-dark ">
            <div class="col-md-4  ">
                <p class="m-0">VIN No: {{ $request->chasis; }}</p>
            </div>
            <div class="col-md-4 >
                <p class="m-0">The Date Of First Receiving：</p>
            </div>
            <div class="col-md-4 ">
                <p class="m-0">Vehicle production date：</p>
            </div>

        </div>
        <div class="row border border-dark">
            <div class="col-md border-end border-dark d-flex align-items-center">
            <h1 class="fs-2 text-end fw-bold m-0">Number / <span class="fs-5">Project</span></h1>
            </div>
  
            <div class="col-md border-end border-dark d-flex align-items-center p-1 text-center">
                <p class="m-0 lh-sm">Checking Date</p>
            </div>
            <div class="col-md border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <p class="m-0 lh-sm">Minimum Cell Voltage/<br> Voltaje mínimo de celda</p>
            </div>
            <div class="col-md border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <p class="m-0 lh-sm"> SOC Value</p>
            </div>
            <div class="col-md border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <p class="m-0 lh-sm">"Whether  Need To Charge<br> (Yes or No)<br> Si necesita cargar"</p>
            </div>
            <div class="col-md border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <p class="m-0 lh-sm">"Minimum Cell Voltage<br>（After Charging ）<br>Voltaje mínimo de celda<br>(Después de cargar)"</p>
            </div>
            <div class="col-md border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <p class="m-0 lh-sm">"SOC Value<br>（After Charging ）<br>despues de la carga"</p>
            </div>
            <div class="col-md border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <p class="m-0 lh-sm">Operator</p>
            </div>
            <div class="col-md border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <p class="m-0 lh-sm">"Remarks <br>Observaciones"</p>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-md border-end border-dark d-flex align-items-center">
                <h1 class="fs-2 text-end fw-bold m-0 ">1</h1>
            </div>
            <div class="col-md border-end border-dark d-flex align-items-center p-1 text-center">
                <input type="date" class="form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="col-md border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="col-md border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="col-md border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="col-md border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="col-md border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="col-md border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
            <div class="col-md border-start  border-start border-dark d-flex align-items-center p-1 text-center">
                <input type="text" class="form-control border-0 p-0 text-center letter" placeholder="" aria-label="" >
            </div>
        </div>
        
    </div>

       

@endsection
