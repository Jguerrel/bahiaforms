@extends('layouts.app')

@section('content')
    @php
        // On "Ver" only formrequest is posted, so resolve vehicle fields from the
        // saved JSON first and fall back to the request.
        $modelo = data_get($formdata, 'modelo', $request->modelo);
        $chasis = data_get($formdata, 'chasis', $request->chasis);
        $marca = data_get($formdata, 'marca', $request->marca);
        $motor = data_get($formdata, 'motor', $request->motor);
        $anio = data_get($formdata, 'anio', $request->anio);
        $version = data_get($formdata, 'version', $request->version);
        $colorexterior = data_get($formdata, 'colorexterior', $request->colorexterior);
        $colorinterior = data_get($formdata, 'colorinterior', $request->colorinterior);
        $opts = $cfg['result_options'];

        // Header fields we can auto-fill (from vehicle / technician / today), mapped via $cfg['autofill'].
        $auto = [
            'company'   => $request->company,
            'inspector' => optional(auth()->user())->name,
            'today'     => now()->format('Y-m-d'),
        ];
        $autofill = $cfg['autofill'] ?? [];
    @endphp

    <div class="container">
        <div class="row">
            <div class="col-9 p-0">
                <h1 class="fs-3 text-end fw-bold m-0">{{ $cfg['title'] }}</h1>
            </div>
            <div class="col-3 p-0 text-end align-self-center">
                <img src="{{ asset('img/zeekr.png') }}" class="w-50" alt="Zeekr">
            </div>
        </div>
    </div>
    <br>

    <form name="vehicleform" id="vehicleform" method="post" action="{{ route('vehicleform.store') }}">
        @csrf
        <input type="hidden" value="{{ $marca }}" name="marca">
        <input type="hidden" value="{{ $modelo }}" name="modelo">
        <input type="hidden" value="{{ $motor }}" name="motor">
        <input type="hidden" value="{{ $chasis }}" name="chasis">
        <input type="hidden" value="{{ $anio }}" name="anio">
        <input type="hidden" value="{{ $version }}" name="version">
        <input type="hidden" value="{{ $colorexterior }}" name="colorexterior">
        <input type="hidden" value="{{ $colorinterior }}" name="colorinterior">
        <input type="hidden" value="{{ $cfg['formname'] }}" name="formname">
        <input type="hidden" value=" " name="formrequest">
        <input type="hidden" value="zeekr_pdi" name="formid">
        <input type="hidden" value="{{ route('zeekr.pdi.view') }}" name="formaction">

        <div class="container">
            {{-- Header info fields --}}
            <div class="container-sm border border-dark p-0 mb-3">
                @foreach ($cfg['header'] as $hk => $hl)
                    @php $hkDefault = isset($autofill[$hk]) ? ($auto[$autofill[$hk]] ?? '') : ''; @endphp
                    <div class="row border-bottom border-dark m-0">
                        <div class="col-sm-4 border-end border-dark p-1 fw-bold"><p class="m-0 lh-sm">{{ $hl }}</p></div>
                        <div class="col-sm-8 p-1">
                            <input name="{{ $hk }}" value="{{ data_get($formdata, $hk, $hkDefault) }}"
                                type="{{ $hk === 'fecha' ? 'date' : 'text' }}"
                                class="form-control border-0 border-bottom p-0 w-100">
                        </div>
                    </div>
                @endforeach
                <div class="row m-0">
                    <div class="col-sm-4 border-end border-dark p-1 fw-bold"><p class="m-0 lh-sm">Modelo / VIN</p></div>
                    <div class="col-sm-8 p-1"><p class="m-0 lh-sm">{{ $modelo }} — {{ $chasis }}</p></div>
                </div>
            </div>

            {{-- Checklist --}}
            @php $n = 0; @endphp
            <div class="container-sm border border-dark p-0 mb-3">
                <div class="row bg-secondary fw-bold m-0 border-bottom border-dark">
                    <div class="col-1 border-end border-dark p-1 text-center"><p class="m-0 lh-sm">N.º</p></div>
                    <div class="col-5 border-end border-dark p-1"><p class="m-0 lh-sm">Marcar artículo</p></div>
                    @foreach ($opts as $ov => $ol)
                        <div class="col border-end border-dark p-1 text-center"><p class="m-0 lh-sm small">{{ $ol }}</p></div>
                    @endforeach
                    <div class="col-3 p-1 text-center"><p class="m-0 lh-sm">Observación</p></div>
                </div>

                @foreach ($cfg['sections'] as $section)
                    <div class="row bg-light fw-bold m-0 border-bottom border-dark">
                        <div class="col-12 p-1 text-center"><p class="m-0 lh-sm">{{ $section['title'] }}</p></div>
                    </div>
                    @foreach ($section['items'] as $item)
                        @php $n++; $key = 'x' . $n; @endphp
                        <div class="row m-0 border-bottom border-dark">
                            <div class="col-1 border-end border-dark p-1 d-flex align-items-center justify-content-center">
                                <p class="m-0 lh-sm">{{ $n }}</p>
                            </div>
                            <div class="col-5 border-end border-dark p-1 d-flex align-items-center">
                                <p class="m-0 lh-sm">{{ $item }}</p>
                            </div>
                            @foreach ($opts as $ov => $ol)
                                <div class="col border-end border-dark p-1 text-center d-flex align-items-center justify-content-center">
                                    <input type="radio" name="{{ $key }}_r" value="{{ $ov }}"
                                        @if (data_get($formdata, $key . '_r') === $ov) checked @endif
                                        style="height: 24px; width: 24px;" class="form-check-input border-1">
                                </div>
                            @endforeach
                            <div class="col-3 p-1">
                                <input name="{{ $key }}_o" value="{{ data_get($formdata, $key . '_o') }}" type="text"
                                    class="form-control form-control-sm border-0 border-bottom p-0">
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>

            {{-- Problem log --}}
            <div class="container-sm border border-dark p-0 mb-3">
                <div class="row bg-secondary fw-bold m-0 border-bottom border-dark">
                    <div class="col-12 p-1 text-center"><p class="m-0 lh-sm">Consultar los registros de problemas</p></div>
                </div>
                @for ($i = 1; $i <= 8; $i++)
                    <div class="row m-0 border-bottom border-dark">
                        <div class="col-12 p-1">
                            <input name="pl{{ $i }}" value="{{ data_get($formdata, 'pl' . $i) }}" type="text"
                                class="form-control form-control-sm border-0 border-bottom p-0">
                        </div>
                    </div>
                @endfor
            </div>

            {{-- Appearance diagram: full width so the tablero6 canvas isn't scaled
                 (scaling breaks the drawing coordinates), matching the normal PDI. --}}
            <div class="container-sm border border-dark p-0 mb-3">
                <div class="row bg-secondary fw-bold m-0 border-bottom border-dark">
                    <div class="col-12 p-1 text-center"><p class="m-0 lh-sm">Tabla de verificación de apariencia</p></div>
                </div>
                <div class="row m-0 text-center">
                    <div class="col-sm-12 border-end border-dark align-items-center p-2">
                        @if ($formdata === null)
                            {{-- Self-contained appearance drawing: red pen over pdi.png, same as the
                                 normal PDI but with robust image loading + coordinate handling. Saved into v300. --}}
                            <canvas id="zx_canvas" width="384" height="430" style="border:1px solid #ccc; max-width:100%; cursor:crosshair; touch-action:none;"></canvas>
                            <br>
                            <button type="button" class="btn btn-outline-secondary btn-sm mt-2" onclick="zxClear()">Borrar</button>
                            <input type="hidden" id="zx_data" name="v300" value="">
                            <script>
                                // Run on window 'load' — AFTER Vue mounts on #app and rebuilds the DOM,
                                // otherwise Vue wipes the canvas we drew on (the page's other inputs keep
                                // their static values, but canvas pixels are drawn imperatively and are lost).
                                window.addEventListener('load', function () {
                                    var canvas = document.getElementById('zx_canvas');
                                    if (!canvas) return;
                                    var ctx = canvas.getContext('2d');
                                    var drawing = false, bgReady = false;
                                    var bg = new Image();

                                    window.zxClear = function () {
                                        ctx.fillStyle = '#fff';
                                        ctx.fillRect(0, 0, canvas.width, canvas.height);
                                        if (bgReady) ctx.drawImage(bg, 0, 0, canvas.width, canvas.height);
                                        ctx.strokeStyle = 'red';
                                        ctx.lineWidth = 2;
                                        ctx.lineJoin = 'round';
                                        ctx.lineCap = 'round';
                                    };

                                    bg.onload = function () { canvas.width = bg.naturalWidth; canvas.height = bg.naturalHeight; bgReady = true; window.zxClear(); };
                                    bg.onerror = function () { bgReady = false; window.zxClear(); };
                                    bg.src = '/img/pdi.png';
                                    window.zxClear(); // white until the diagram loads

                                    function point(e) {
                                        var r = canvas.getBoundingClientRect();
                                        var src = (e.touches && e.touches[0]) ? e.touches[0] : e;
                                        return {
                                            x: (src.clientX - r.left) * (canvas.width / r.width),
                                            y: (src.clientY - r.top) * (canvas.height / r.height)
                                        };
                                    }
                                    function start(e) { drawing = true; var p = point(e); ctx.beginPath(); ctx.moveTo(p.x, p.y); e.preventDefault(); }
                                    function move(e) { if (!drawing) return; var p = point(e); ctx.lineTo(p.x, p.y); ctx.stroke(); e.preventDefault(); }
                                    function stop() { drawing = false; }

                                    canvas.addEventListener('mousedown', start);
                                    canvas.addEventListener('mousemove', move);
                                    window.addEventListener('mouseup', stop);
                                    canvas.addEventListener('touchstart', start, { passive: false });
                                    canvas.addEventListener('touchmove', move, { passive: false });
                                    canvas.addEventListener('touchend', stop);

                                    var form = canvas.closest('form');
                                    if (form) form.addEventListener('submit', function () {
                                        document.getElementById('zx_data').value = canvas.toDataURL('image/png');
                                    });
                                });
                            </script>
                        @else
                            <img name="v300" src="{{ data_get($formdata, 'v300') }}" border="1" alt="apariencia">
                        @endif
                    </div>
                </div>
                <div class="row m-0 border-top border-dark">
                    <div class="col-12 p-1"><p class="m-0 lh-sm small">{{ $cfg['appearance_legend'] }}</p></div>
                </div>
            </div>

            <div class="text-center my-3">
                <button type="submit" class="btn btn-primary px-5">Guardar</button>
            </div>
        </div>
    </form>
@endsection
