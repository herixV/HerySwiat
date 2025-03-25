<!DOCTYPE html>
<html>

<head>
    {{-- head --}}
    @include('layouts.head')
</head>

<body>
    {{-- svg --}}
    @include('layouts.svg')
    {{-- preloader --}}
    @include('layouts.preloader')
    
    {{-- header --}}
    @include('layouts.header')
    
    {{-- contend --}}
    @yield('breadcrumbs')

    @yield('content')
    {{-- contend --}}

    {{-- footer --}}
    @include('layouts.footer')

    {{-- scrypts --}}
    @include('layouts.scripts')
</body>

</html>