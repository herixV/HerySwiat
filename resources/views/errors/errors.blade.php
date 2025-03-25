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
    
    
    {{-- contend --}}
    @yield('breadcrumbs')

    @yield('content')
    {{-- contend --}}

    {{-- scrypts --}}
    @include('layouts.scripts')
</body>

</html>