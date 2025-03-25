@props(['name', 'width' => 25, 'height' => 25, 'class' => ''])
<!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
<svg width="{{ $width }}" height="{{ $height }}" class="{{ $class }}">
    <use xlink:href="#{{ $name }}"></use>
</svg>

{{-- <svg width="25" height="25" class="position-absolute top-50 end-0 translate-middle-y me-3" style="cursor: pointer;">
    <use xlink:href="#eye"></use>
</svg>

<svg width="18" height="18">
    <use xlink:href="#arrow-right"></use>
</svg>
<svg class="social" width="16" height="16">
    <use xlink:href="#facebook"></use>
</svg> --}}