@extends('layouts.app')

@section('content')
    @php
        // Edit mode: when $updateId is set we are editing an existing record, so
        // the form updates it in place; otherwise it creates a new record.
        $updateId = $updateId ?? null;
        $formAction = $updateId ? route('long.term.update', $updateId) : route('vehicleform.store');

        // On "Ver" the saved-forms list posts only formrequest (the stored JSON),
        // so resolve vehicle fields from $formdata first and fall back to $request.
        $marca = data_get($formdata, 'marca', $request->marca);
        $modelo = data_get($formdata, 'modelo', $request->modelo);
        $motor = data_get($formdata, 'motor', $request->motor);
        $chasis = data_get($formdata, 'chasis', $request->chasis);
        $anio = data_get($formdata, 'anio', $request->anio);
        $version = data_get($formdata, 'version', $request->version);
        $colorexterior = data_get($formdata, 'colorexterior', $request->colorexterior);
        $colorinterior = data_get($formdata, 'colorinterior', $request->colorinterior);
    @endphp
    <h1 class="fs-2 text-center fw-bold m-0"></h1>
    <div class="container">
        <div class="row">
            <div class="col-9 p-0">
                <h1 class="fs-2 text-end fw-bold m-0">EV: Long-term Stored Vehicle Check Sheet</h1>
            </div>
            <div class="col-3 p-0 text-end align-self-center">
                @include('partials.brand_logo', ['marca' => $marca ?? data_get($formdata ?? null, 'marca', $request->marca ?? null), 'logoClass' => 'w-50'])
            </div>
        </div>
    </div>
    <br>
    <form name="vehicleform" id="vehicleform" method="post" action="{{ $formAction }}">
        @csrf
        <input type="hidden" value="{{ $marca }}" id="marca" name="marca">
        <input type="hidden" value="{{ $modelo }}" id="modelo" name="modelo">
        <input type="hidden" value="{{ $motor }}" id="motor" name="motor">
        <input type="hidden" value="{{ $chasis }}" id="chasis" name="chasis">
        <input type="hidden" value="{{ $anio }}" id="anio" name="anio">
        <input type="hidden" value="{{ $version }}" id="version" name="version">
        <input type="hidden" value="{{ $colorexterior }}" id="colorexterior" name="colorexterior">
        <input type="hidden" value="{{ $colorinterior }}" id="colorinterior" name="colorinterior">
        {{-- Standard long-term identity so EV sheets share the existing view/edit
             cycle and reports; the EV vs combustion content is chosen server-side. --}}
        <input type="hidden" value="Long-term Stored Vehicle Check Sheet" id="formname" name="formname">
        <input type="hidden" value=" " id="formrequest" name="formrequest">
        <input type="hidden" value="long_term_store" id="formid" name="formid">
        <input type="hidden" value="{{ route('long.term.view') }}" id="formaction" name="formaction">

        <div class="container">
            {{-- Vehicle-info header table, matching the original long-term sheet. --}}
            <div class="container border border-dark p-0 mb-3">
                <div class="row border border-dark bg-secondary fw-bold m-0">
                    <div class="col-sm-3 border-end border-dark p-1 text-start"><p class="m-0 lh-sm">First stored date</p></div>
                    <div class="col-sm-2 border-end border-dark p-1 text-center"><p class="m-0 lh-sm">Model</p></div>
                    <div class="col-sm-2 border-end border-dark p-1 text-center"><p class="m-0 lh-sm">Location</p></div>
                    <div class="col-sm-3 border-end border-dark p-1 text-center"><p class="m-0 lh-sm">VIN</p></div>
                    <div class="col-sm-2 p-1 text-center"><p class="m-0 lh-sm">Sales date</p></div>
                </div>
                <div class="row border border-dark m-0">
                    <div class="col-sm-3 border-end border-dark p-1">
                        <input name="first_stored_date" value="{{ data_get($formdata, 'first_stored_date') }}"
                            type="date" class="form-control border-0 p-0 text-center w-100">
                    </div>
                    <div class="col-sm-2 border-end border-dark p-1 text-center d-flex align-items-center justify-content-center">{{ $modelo }}</div>
                    <div class="col-sm-2 border-end border-dark p-1">
                        <input name="location" value="{{ data_get($formdata, 'location') }}" type="text"
                            class="form-control border-0 p-0 text-center w-100">
                    </div>
                    <div class="col-sm-3 border-end border-dark p-1 text-center d-flex align-items-center justify-content-center">{{ $chasis }}</div>
                    <div class="col-sm-2 p-1">
                        <input name="sales_date" value="{{ data_get($formdata, 'sales_date') }}" type="date"
                            class="form-control border-0 p-0 text-center w-100">
                    </div>
                </div>
            </div>

            @foreach ($sections as $section)
                @include('partials.ev_longterm_block', ['section' => $section, 'formdata' => $formdata])
            @endforeach

            <div class="container-sm border border-dark mb-2">
                <div class="row">
                    <div class="col-sm-12 p-2">
                        <p class="m-0 lh-sm small">※ During the inspection: 1. Fill in the Check &amp; Repair column with a
                            ✓ mark. 2. For battery SOC and tyre pressure, fill in the actual value you measure. 3. Fill in
                            any faulty problem/part and anything else in the Remark column.<br>
                            ※ Tyre pressure standard: please refer to the latest TSB for the tyre pressure standard.</p>
                    </div>
                </div>
            </div>

            <div class="text-center my-3">
                <button type="submit" class="btn btn-primary px-5">Guardar</button>
            </div>
        </div>
    </form>
@endsection
