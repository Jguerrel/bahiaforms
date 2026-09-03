{{-- Brand logo for a form header, picked from the vehicle's marca.
     Pass $marca (and optional $logoClass, default w-50). Falls back to Geely. --}}
@php
    $__m = strtoupper((string) ($marca ?? ''));
    $__logo = str_contains($__m, 'ZEEKR') ? 'img/zeekr.png'
        : (str_contains($__m, 'ACURA') ? 'img/acura.png'
        : (str_contains($__m, 'HONDA') ? 'img/honda.png'
        : 'img/geely.png'));
@endphp
<img src="{{ asset($__logo) }}" class="{{ $logoClass ?? 'w-50' }}" alt="{{ $__m ?: 'Logo' }}">
