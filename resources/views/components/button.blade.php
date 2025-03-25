@props([
    'route' => null,         // Si se define, se genera un <a>, de lo contrario un <button>
    'title' => '',           // Texto del botón
    'variant' => 'primary',  // Valores posibles: 'primary', 'link', 'simple'
    'type' => 'button',      // Solo para <button>
    'name' => null,          // Solo para <button>
    'class' => ''            // Clases adicionales opcionales
])

@php
    // Según el variant definimos los estilos base y extra para el span
    if ($variant === 'simple') {
        $baseClass = 'btn btn-arrow';
        $variantClass = 'btn-primary mt-3';
        $spanClass = '';
    } elseif ($variant === 'link') {
        $baseClass = ' btn-arrow';
        $variantClass = ' border-0';
        $spanClass = 'text-decoration-underline';
    } else { // 'primary' para </button>
    $baseClass = 'btn btn-arrow';
        $variantClass = 'btn-primary mt-3';
        $spanClass = '';
    }

    // Concatenamos las clases base, las de la variante y las adicionales
    $classes = trim($baseClass . ' ' . $variantClass . ' ' . $class);
@endphp

@if($route)
    <a href="{{ $route ?? '#' }}" class="{{ $classes }}">
        &nbsp;
        <span class="{{ $spanClass }}">
            {{ $title }}
            <svg width="18" height="18">
                <use xlink:href="#arrow-right"></use>
            </svg>
        </span>
    </a>
@else
    <button type="{{ $type }}" name="{{ $name }}" class="{{ $classes }}">
        <span>
            {{ $title }}
            <svg width="18" height="18">
                <use xlink:href="#arrow-right"></use>
            </svg>
        </span>
    </button>
@endif



{{-- button
<a href="index.html" class="btn btn-arrow btn-primary mt-3">
    <span>More Blog
        <svg width="18" height="18">
            <use xlink:href="#arrow-right"></use>
        </svg>
    </span>
</a>
services link
<a href="service-details.html" class="btn btn-arrow border-0">
    <span class="text-decoration-underline">Read More
        <svg width="18" height="18">
            <use xlink:href="#arrow-right"></use>
        </svg>
    </span>
</a> --}}

{{-- ====================== buttons ====================== --}}
{{-- faqs 
<button class="btn btn-arrow btn-primary mt-3">
    <span>Submit 
        <svg width="18" height="18">
            <use xlink:href="#arrow-right"></use>
        </svg>
    </span>
</button>
blog single
<button type="submit" class="btn btn-arrow btn-primary mt-3"> 
    <span>Submit
        <svg width="18" height="18">
            <use xlink:href="#arrow-right"></use>
        </svg>
    </span>
</button>
contact 
<button type="submit" name="submit" class="btn btn-arrow btn-primary mt-3">
    <span>Submit 
        <svg width="18" height="18">
            <use xlink:href="#arrow-right"></use>
        </svg>
    </span>
</button>
footer
<button href="#" class="btn btn-arrow btn-primary mt-3">
    <span>Subscribe Now
        <svg width="18" height="18">
            <use xlink:href="#arrow-right"></use>
        </svg>
    </span>
</button> --}}
