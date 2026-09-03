@extends('layouts.app')

@section('content')
    @php
        $modelo = data_get($formdata, 'modelo', $request->modelo);
        $chasis = data_get($formdata, 'chasis', $request->chasis);
        $marca = data_get($formdata, 'marca', $request->marca);
        $motor = data_get($formdata, 'motor', $request->motor);
        $anio = data_get($formdata, 'anio', $request->anio);
        $version = data_get($formdata, 'version', $request->version);
        $colorexterior = data_get($formdata, 'colorexterior', $request->colorexterior);
        $colorinterior = data_get($formdata, 'colorinterior', $request->colorinterior);
        $cols = $cfg['cols'];
        $infoPairs = array_chunk($cfg['info'], 2, true);

        // Values we can auto-fill header fields with, resolved from the searched vehicle,
        // the logged-in technician, and today. Mapped per-field via $cfg['autofill'].
        // Zeekr vehicles handled by Bay Motors are serviced at Coastal Motors' PDI center.
        $auto = [
            'company'       => $request->company === 'Bay Motors' ? 'Coastal Motors S.A' : $request->company,
            'modelo'        => $modelo,
            'version'       => $version,
            'colorexterior' => $colorexterior,
            'colorinterior' => $colorinterior,
            'motor'         => $motor,
            'inspector'     => optional(auth()->user())->name,
            'today'         => now()->format('Y-m-d'),
        ];
        $autofill = $cfg['autofill'] ?? [];
    @endphp

    <div class="container">
        <div class="row">
            <div class="col-9 p-0">
                <h1 class="fs-3 text-end fw-bold m-0">{{ $cfg['title'] }}</h1>
            </div>
            <div class="col-3 p-0 text-end align-self-center">
                @include('partials.brand_logo', ['marca' => $marca ?? data_get($formdata ?? null, 'marca', $request->marca ?? null), 'logoClass' => 'w-50'])
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
            {{-- Information sheet --}}
            <div class="container-sm border border-dark p-0 mb-3">
                <div class="row bg-secondary fw-bold m-0 border-bottom border-dark">
                    <div class="col-12 p-1"><p class="m-0 lh-sm">{{ $cfg['info_title'] }}</p></div>
                </div>
                <div class="row m-0 border-bottom border-dark">
                    <div class="col-sm-3 border-end border-dark p-1 fw-bold"><p class="m-0 lh-sm">Modelo / VIN</p></div>
                    <div class="col-sm-9 p-1"><p class="m-0 lh-sm">{{ $modelo }} — {{ $chasis }}</p></div>
                </div>
                @foreach ($infoPairs as $pair)
                    <div class="row m-0 border-bottom border-dark">
                        @foreach ($pair as $ik => $il)
                            @php $ikDefault = isset($autofill[$ik]) ? ($auto[$autofill[$ik]] ?? '') : ''; @endphp
                            <div class="col-sm-2 border-end border-dark p-1 fw-bold"><p class="m-0 lh-sm">{{ $il }}</p></div>
                            <div class="col-sm-4 border-end border-dark p-1">
                                <input name="{{ $ik }}" value="{{ data_get($formdata, $ik, $ikDefault) }}" type="text"
                                    class="form-control form-control-sm border-0 border-bottom p-0 w-100">
                            </div>
                        @endforeach
                    </div>
                @endforeach
                @if (!empty($cfg['level_desc']))
                    <div class="row m-0">
                        <div class="col-12 p-1"><p class="m-0 lh-sm small">{{ $cfg['level_desc'] }}</p></div>
                    </div>
                @endif
            </div>

            {{-- Classification checklist --}}
            @php $n = 0; @endphp
            <div class="container-sm border border-dark p-0 mb-3">
                <div class="row bg-secondary fw-bold m-0 border-bottom border-dark">
                    <div class="col-6 border-end border-dark p-1"><p class="m-0 lh-sm">{{ $cfg['item_col'] ?? 'PDI check item' }}</p></div>
                    @foreach ($cols as $c)
                        <div class="col-2 border-end border-dark p-1 text-center"><p class="m-0 lh-sm small">{{ $c }}</p></div>
                    @endforeach
                </div>

                @foreach ($cfg['groups'] as $group)
                    <div class="row bg-light fw-bold m-0 border-bottom border-dark">
                        <div class="col-12 p-1"><p class="m-0 lh-sm">{{ $group['class'] }}</p></div>
                    </div>
                    @foreach ($group['items'] as $item)
                        @php $n++; $key = 'c' . $n; @endphp
                        @php
                            $resVal = data_get($formdata, $key . '_res');
                            $lvlVal = data_get($formdata, $key . '_lvl');
                            $catVal = data_get($formdata, $key . '_cat');
                        @endphp
                        <div class="row m-0 border-bottom border-dark">
                            <div class="col-6 border-end border-dark p-1 d-flex align-items-center">
                                <p class="m-0 lh-sm">{{ $item }}</p>
                            </div>
                            {{-- Check result: Bueno / Requiere inspección --}}
                            <div class="col-2 border-end border-dark p-1">
                                <select name="{{ $key }}_res" data-key="{{ $key }}" class="form-select form-select-sm zk-res">
                                    <option value=""></option>
                                    <option value="bueno" {{ $resVal === 'bueno' ? 'selected' : '' }}>Bueno</option>
                                    <option value="requiere" {{ $resVal === 'requiere' ? 'selected' : '' }}>Requiere inspección</option>
                                </select>
                            </div>
                            {{-- Level: Crítico / Leve --}}
                            <div class="col-2 border-end border-dark p-1">
                                <select name="{{ $key }}_lvl" class="form-select form-select-sm">
                                    <option value=""></option>
                                    <option value="critico" {{ $lvlVal === 'critico' ? 'selected' : '' }}>Crítico</option>
                                    <option value="leve" {{ $lvlVal === 'leve' ? 'selected' : '' }}>Leve</option>
                                </select>
                            </div>
                            {{-- Categorization: N/A when "Bueno"; Mecánica/Chapistería when "Requiere inspección".
                                 Options are set by JS (below) based on the check result. --}}
                            <div class="col-2 p-1">
                                <select name="{{ $key }}_cat" data-key="{{ $key }}" data-saved="{{ $catVal }}"
                                    class="form-select form-select-sm zk-cat"></select>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>

            {{-- Footer --}}
            <div class="container-sm border border-dark p-0 mb-3">
                <div class="row m-0 border-bottom border-dark">
                    <div class="col-sm-3 border-end border-dark p-1 fw-bold"><p class="m-0 lh-sm">{{ $cfg['footer']['final'] }}</p></div>
                    <div class="col-sm-9 p-1">
                        <input name="final_result" value="{{ data_get($formdata, 'final_result') }}" type="text"
                            class="form-control form-control-sm border-0 border-bottom p-0 w-100">
                    </div>
                </div>
                <div class="row m-0 border-bottom border-dark">
                    <div class="col-sm-3 border-end border-dark p-1 fw-bold"><p class="m-0 lh-sm">{{ $cfg['footer']['remark'] }}</p></div>
                    <div class="col-sm-9 p-1">
                        <textarea name="remarks" rows="2" class="form-control form-control-sm rounded-0">{{ data_get($formdata, 'remarks') }}</textarea>
                        @if (!empty($cfg['remark_hint']))
                            <p class="m-0 lh-sm text-muted" style="font-size: 10px;">{{ $cfg['remark_hint'] }}</p>
                        @endif
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-sm-3 border-end border-dark p-1 fw-bold"><p class="m-0 lh-sm">{{ $cfg['footer']['operator'] }}</p></div>
                    <div class="col-sm-9 p-1">
                        <input name="operator" value="{{ data_get($formdata, 'operator') }}" type="text"
                            class="form-control form-control-sm border-0 border-bottom p-0 w-100">
                    </div>
                </div>
            </div>

            <div class="text-center my-3">
                <button type="submit" class="btn btn-primary px-5">Guardar</button>
            </div>
        </div>
    </form>

    <script>
        // Runs on window 'load' (after Vue mounts on #app and rebuilds the DOM, otherwise the
        // dynamically-built options and change listeners would be wiped). For each row the
        // Categorization dropdown depends on the Check result:
        //   Bueno              -> N/A (fixed)
        //   Requiere inspección -> Mecánica / Chapistería (user chooses)
        //   (nothing selected)  -> empty & disabled
        window.addEventListener('load', function () {
            function buildCat(resVal, cat) {
                var saved = cat.getAttribute('data-saved') || '';
                if (resVal === 'bueno') {
                    cat.innerHTML = '<option value="na">N/A</option>';
                    cat.value = 'na';
                    cat.disabled = false;
                } else if (resVal === 'requiere') {
                    cat.innerHTML = '<option value=""></option>'
                        + '<option value="mecanica">Mecánica</option>'
                        + '<option value="chapisteria">Chapistería</option>';
                    cat.value = (saved === 'mecanica' || saved === 'chapisteria') ? saved : '';
                    cat.disabled = false;
                } else {
                    cat.innerHTML = '<option value=""></option>';
                    cat.value = '';
                    cat.disabled = true;
                }
            }
            document.querySelectorAll('.zk-res').forEach(function (res) {
                var key = res.getAttribute('data-key');
                var cat = document.querySelector('.zk-cat[data-key="' + key + '"]');
                if (!cat) return;
                buildCat(res.value, cat);
                res.addEventListener('change', function () { buildCat(res.value, cat); });
            });
        });
    </script>
@endsection
