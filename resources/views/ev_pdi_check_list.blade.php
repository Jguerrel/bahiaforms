@extends('layouts.app')

@section('content')
    @php
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
                <h1 class="fs-2 text-end fw-bold m-0">EV: Pre-Delivery Inspection (PDI) checking list</h1>
            </div>
            <div class="col-3 p-0 text-end align-self-center">
                <img src="{{ asset('img/geely.png') }}" class="w-50" alt="Geely">
            </div>
        </div>
    </div>
    <br>
    <form name="vehicleform" id="vehicleform" method="post" action="{{ route('vehicleform.store') }}">
        @csrf
        <input type="hidden" value="{{ $marca }}" id="marca" name="marca">
        <input type="hidden" value="{{ $modelo }}" id="modelo" name="modelo">
        <input type="hidden" value="{{ $motor }}" id="motor" name="motor">
        <input type="hidden" value="{{ $chasis }}" id="chasis" name="chasis">
        <input type="hidden" value="{{ $anio }}" id="anio" name="anio">
        <input type="hidden" value="{{ $version }}" id="version" name="version">
        <input type="hidden" value="{{ $colorexterior }}" id="colorexterior" name="colorexterior">
        <input type="hidden" value="{{ $colorinterior }}" id="colorinterior" name="colorinterior">
        <input type="hidden" value="EV: Pre-Delivery Inspection (PDI) checking list" id="formname" name="formname">
        <input type="hidden" value=" " id="formrequest" name="formrequest">
        <input type="hidden" value="ev_pdi_check_list" id="formid" name="formid">
        <input type="hidden" value="{{ route('ev.pdi.check.view') }}" id="formaction" name="formaction">

        <div class="container">
            {{-- Vehicle summary --}}
            <div class="row border border-dark">
                <div class="col-sm-3 border-end border-dark p-1"><strong>Model:</strong> {{ $modelo }}</div>
                <div class="col-sm-5 border-end border-dark p-1"><strong>VIN:</strong> {{ $chasis }}</div>
                <div class="col-sm-2 border-end border-dark p-1"><strong>Year:</strong> {{ $anio }}</div>
                <div class="col-sm-2 p-1"><strong>Version:</strong> {{ $version }}</div>
            </div>

            {{-- A + B on the left, C + D + E + F on the right --}}
            <div class="row d-flex flex-row">
                <div class="col-sm-6 p-2">
                    @foreach ($sections['left'] as $section)
                        @include('partials.ev_pdi_section', ['section' => $section, 'formdata' => $formdata])
                    @endforeach
                </div>
                <div class="col-sm-6 p-2">
                    @foreach ($sections['right'] as $section)
                        @include('partials.ev_pdi_section', ['section' => $section, 'formdata' => $formdata])
                    @endforeach

                    {{-- F. Appearance remark: interactive car-body diagram (draw damage on pdi.png),
                         placed directly below section E. Entry mode shows the drawing canvas;
                         view mode shows the saved image. --}}
                    <div class="container-sm border border-dark mb-2">
                        <div class="row border border-dark bg-secondary fw-bold">
                            <div class="col-sm-12 p-1">
                                <p class="m-0 lh-sm">F. Appearance remark: the damaged part of the car body is marked with red pen in the picture below</p>
                                <span class="text-danger">Observación de apariencia: la parte dañada de la carrocería del automóvil está marcada con un bolígrafo rojo en la imagen a continuación</span>
                            </div>
                        </div>
                        <div class="row border border-dark">
                            <div class="col-sm-12 p-2 text-center">
                                @if ($formdata === null)
                                    @include('canvas/tablero6')
                                    <input type="hidden" id="myText6" name="v300" value="no guarda">
                                @else
                                    <img name="v300" src="{{ data_get($formdata, 'v300') }}" border="1" alt="appearance">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Records --}}
            <div class="container-sm border border-dark mb-2">
                <div class="row border border-dark bg-secondary fw-bold">
                    <div class="col-sm-12 p-1"><p class="m-0 lh-sm">Fault codes record</p></div>
                </div>
                <div class="row border border-dark">
                    @for ($i = 1; $i <= 8; $i++)
                        <div class="col-sm-3 border-end p-1 d-flex align-items-center">
                            <span class="me-1">{{ $i }}.</span>
                            <input name="fc{{ $i }}" value="{{ data_get($formdata, 'fc' . $i) }}" type="text"
                                class="form-control rounded-0 border-bottom">
                        </div>
                    @endfor
                </div>
                <div class="row border border-dark bg-secondary fw-bold">
                    <div class="col-sm-12 p-1"><p class="m-0 lh-sm">Voltage / SOC value record</p></div>
                </div>
                <div class="row border border-dark">
                    <div class="col-sm-3 border-end p-1 align-self-center"><p class="m-0 lh-sm">12V battery SOC:</p></div>
                    <div class="col-sm-3 border-end p-1">
                        <input name="rec_12v" value="{{ data_get($formdata, 'rec_12v') }}" type="text"
                            class="form-control rounded-0 border-bottom">
                    </div>
                    <div class="col-sm-3 border-end p-1 align-self-center"><p class="m-0 lh-sm">EV power battery SOC:</p></div>
                    <div class="col-sm-3 p-1">
                        <input name="rec_hv" value="{{ data_get($formdata, 'rec_hv') }}" type="text"
                            class="form-control rounded-0 border-bottom">
                    </div>
                </div>
                <div class="row border border-dark bg-secondary fw-bold">
                    <div class="col-sm-12 p-1"><p class="m-0 lh-sm">Tire pressure record</p></div>
                </div>
                <div class="row border border-dark">
                    @foreach (['tp_lh' => 'LH', 'tp_rh' => 'RH', 'tp_lr' => 'LR', 'tp_rr' => 'RR'] as $tk => $tl)
                        <div class="col-sm-3 border-end p-1 d-flex align-items-center">
                            <span class="me-1">{{ $tl }}</span>
                            <input name="{{ $tk }}" value="{{ data_get($formdata, $tk) }}" type="text"
                                class="form-control rounded-0 border-bottom">
                        </div>
                    @endforeach
                </div>
                <div class="row border border-dark bg-secondary fw-bold">
                    <div class="col-sm-12 p-1"><p class="m-0 lh-sm">Fault and repair record</p></div>
                </div>
                <div class="row border border-dark">
                    <div class="col-sm-12 p-1">
                        <textarea name="fault_repair" rows="3" class="form-control rounded-0">{{ data_get($formdata, 'fault_repair') }}</textarea>
                    </div>
                </div>
            </div>

            {{-- Sign-off --}}
            <div class="container-sm border border-dark mb-2">
                <div class="row border border-dark">
                    <div class="col-sm-3 border-end p-1 fw-bold align-self-center"><p class="m-0 lh-sm">Job Card / # Auto</p></div>
                    <div class="col-sm-3 border-end p-1">
                        <input name="numeroauto" value="{{ data_get($formdata, 'numeroauto', $request->numeroauto) }}" type="text"
                            class="form-control rounded-0 border-bottom">
                    </div>
                    <div class="col-sm-3 border-end p-1 fw-bold align-self-center"><p class="m-0 lh-sm">KMS</p></div>
                    <div class="col-sm-3 p-1">
                        <input name="kms" value="{{ data_get($formdata, 'kms') }}" type="text"
                            class="form-control rounded-0 border-bottom">
                    </div>
                </div>
                <div class="row border border-dark">
                    <div class="col-sm-3 border-end p-1 fw-bold align-self-center"><p class="m-0 lh-sm">Inspector</p></div>
                    <div class="col-sm-3 border-end p-1">
                        <input name="inspector" value="{{ data_get($formdata, 'inspector') }}" type="text"
                            class="form-control rounded-0 border-bottom">
                    </div>
                    <div class="col-sm-3 border-end p-1 fw-bold align-self-center"><p class="m-0 lh-sm">Date</p></div>
                    <div class="col-sm-3 p-1">
                        <input name="insp_date" value="{{ data_get($formdata, 'insp_date') }}" type="date"
                            class="form-control rounded-0 border-bottom">
                    </div>
                </div>
            </div>

            <div class="text-center my-3">
                <button type="submit" class="btn btn-primary px-5">Guardar</button>
            </div>
        </div>
    </form>
@endsection
