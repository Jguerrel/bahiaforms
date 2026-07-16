{{-- One EV long-term schedule block, laid out like the original long-term sheet:
     a section banner, then a left "Schedule" column (Inspection date + Inspector)
     beside the "Check Item / Check / Repair / Remark" columns. Value rows (SOC)
     and tyre rows put their inputs in the Check column. $section and $formdata
     are passed in. --}}
<div class="container border border-dark mb-3 p-0">
    <div class="row border border-dark fw-bold m-0">
        <div class="col align-items-center p-1 text-center">
            <p class="m-0 lh-sm">{{ $section['code'] }}</p>
        </div>
    </div>
    <div class="row m-0">
        {{-- Schedule column --}}
        <div class="col-sm-2 border-end border-dark p-1">
            <p class="m-0 lh-sm fw-bold">Schedule</p>
            <p class="m-0 lh-sm mt-2">{{ $section['schedule'] }}</p>
            <input name="{{ $section['key'] }}_date" value="{{ data_get($formdata, $section['key'] . '_date') }}"
                type="date" class="form-control border-0 border-bottom p-0 text-center w-100">
            <p class="m-0 lh-sm fw-bold mt-2">Inspector</p>
            <input name="{{ $section['key'] }}_inspector" value="{{ data_get($formdata, $section['key'] . '_inspector') }}"
                type="text" class="form-control border-0 border-bottom p-0 text-center w-100">
        </div>

        {{-- Check Item / Check / Repair / Remark (nested 12-grid). Check, Repair
             and Remark are equal width (col-2 each) so the two check boxes line up. --}}
        <div class="col-sm-10 p-0">
            <div class="row bg-secondary fw-bold m-0">
                <div class="col-6 border-end border-dark p-1"><p class="m-0 lh-sm">Check Item</p></div>
                <div class="col-2 border-end border-dark p-1 text-center"><p class="m-0 lh-sm">Check</p></div>
                <div class="col-2 border-end border-dark p-1 text-center"><p class="m-0 lh-sm">Repair</p></div>
                <div class="col-2 p-1 text-center"><p class="m-0 lh-sm">Remark</p></div>
            </div>

            @foreach ($section['rows'] as $row)
                <div class="row border-top border-dark m-0">
                    <div class="col-6 border-end border-dark p-1 d-flex align-items-center">
                        <p class="m-0 lh-sm">{{ $row['label'] }}</p>
                    </div>

                    @if ($row['type'] === 'value')
                        <div class="col-2 border-end border-dark p-1 d-flex align-items-center">
                            <span class="me-1 text-nowrap small">{{ $row['unit'] ?? '' }}</span>
                            <input name="{{ $row['key'] }}_v" value="{{ data_get($formdata, $row['key'] . '_v') }}"
                                type="text" class="form-control form-control-sm border-0 border-bottom p-0">
                        </div>
                        <div class="col-2 border-end border-dark p-1"></div>
                        <div class="col-2 p-1">
                            <input name="{{ $row['key'] }}_rm" value="{{ data_get($formdata, $row['key'] . '_rm') }}"
                                type="text" class="form-control form-control-sm border-0 border-bottom p-0">
                        </div>
                    @elseif ($row['type'] === 'tyres')
                        <div class="col-2 border-end border-dark p-1">
                            <div class="row g-1">
                                @foreach (['lf' => 'LF', 'rf' => 'RF', 'lr' => 'LR', 'rr' => 'RR'] as $sub => $lbl)
                                    <div class="col-6 d-flex align-items-center">
                                        <span class="me-1 small">{{ $lbl }}</span>
                                        <input name="{{ $row['key'] }}_{{ $sub }}"
                                            value="{{ data_get($formdata, $row['key'] . '_' . $sub) }}" type="text"
                                            class="form-control form-control-sm border-0 border-bottom p-0">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-2 border-end border-dark p-1"></div>
                        <div class="col-2 p-1">
                            <input name="{{ $row['key'] }}_rm" value="{{ data_get($formdata, $row['key'] . '_rm') }}"
                                type="text" class="form-control form-control-sm border-0 border-bottom p-0">
                        </div>
                    @else
                        <div class="col-2 border-end border-dark p-1 text-center d-flex align-items-center justify-content-center">
                            <input name="{{ $row['key'] }}_ok" @if (data_get($formdata, $row['key'] . '_ok')) checked @endif
                                style="height: 30px; width: 30px;" class="form-check-input rounded-1 border-1" type="checkbox" value="1">
                        </div>
                        <div class="col-2 border-end border-dark p-1 text-center d-flex align-items-center justify-content-center">
                            <input name="{{ $row['key'] }}_rp" @if (data_get($formdata, $row['key'] . '_rp')) checked @endif
                                style="height: 30px; width: 30px;" class="form-check-input rounded-1 border-1" type="checkbox" value="1">
                        </div>
                        <div class="col-2 p-1">
                            <input name="{{ $row['key'] }}_rm" value="{{ data_get($formdata, $row['key'] . '_rm') }}"
                                type="text" class="form-control form-control-sm border-0 border-bottom p-0">
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
