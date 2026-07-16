{{-- One EV PDI section (A..E): a header row of Ok / Adjust-Repair columns
     followed by its check rows. $section and $formdata are passed in. --}}
<div class="container-sm border border-dark mb-2">
    <div class="row border border-dark">
        <div class="col-sm-8 border-end border-dark align-items-center p-1 text-start bg-secondary fw-bold">
            <p class="m-0 lh-sm">{{ $section['code'] }}. {{ $section['title'] }}</p>
        </div>
        <div class="col-sm-2 border-end border-dark align-items-center p-1 text-center">
            <p class="m-0 lh-sm fw-bold">Ok</p>
        </div>
        <div class="col-sm-2 align-items-center p-1 text-center">
            <p class="m-0 lh-sm fw-bold">Adjust<br>Repair</p>
        </div>
    </div>
    @foreach ($section['rows'] as $row)
        @if ($row['type'] === 'subheader')
            <div class="row border border-dark">
                <div class="col-sm-12 align-items-center p-1 text-start bg-light fw-bold">
                    <p class="m-0 lh-sm">{{ $row['label'] }}</p>
                </div>
            </div>
        @else
            <div class="row border border-dark">
                <div class="col-sm-8 border-end border-dark align-items-center p-1 text-start {{ ($row['indent'] ?? false) ? 'ps-4' : '' }}">
                    <p class="m-0 lh-sm">{{ $row['label'] }}</p>
                </div>
                <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                    <input name="{{ $row['key'] }}_ok" @if (data_get($formdata, $row['key'] . '_ok')) checked @endif
                        style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1">
                </div>
                <div class="col-sm-2 border-end p-1 text-center d-flex align-items-center">
                    <input name="{{ $row['key'] }}_rp" @if (data_get($formdata, $row['key'] . '_rp')) checked @endif
                        style="height: 40px;" class="form-check-input rounded-1 border-1 w-100" type="checkbox" value="1">
                </div>
            </div>
        @endif
    @endforeach
</div>
