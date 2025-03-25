<header id="header">
    <nav class="header-top bg-secondary py-1">
        <div class="container-fluid padding-side">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <ul class="info d-flex flex-wrap list-unstyled m-0">
                    <li class="location text-capitalize d-flex align-items-center me-4" style="font-size: 14px;">
                        <svg class="color me-1" width="15" height="15">
                            <use xlink:href="#location"></use>
                        </svg>{{$company->address}}
                    </li>
                    <li class="phone d-flex align-items-center me-4" style="font-size: 14px;">
                        <svg class="color me-1" width="15" height="15">
                            <use xlink:href="#phone"></use>
                        </svg>{{$company->phone}}
                    </li>
                    <li class="time d-flex align-items-center me-4" style="font-size: 14px;">
                        <svg class="color me-1" width="15" height="15">
                                <use xlink:href="#email"></use>
                            </svg>{{$company->email}}
                    </li>
                </ul>
                <ul class="social-links d-flex flex-wrap list-unstyled m-0 ">
                    @foreach ($socialNetworks as $socialNetwork)
                        <li class="social ms-4">
                            <a href="{{ $socialNetwork->url }}">
                                {!! $socialNetwork->icon !!}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <ul class="info d-flex flex-wrap list-unstyled m-0">
                    <!-- Botones de sesión más compactos -->
                    <a href="{{ url('/login') }}" class="btn-smaller"><b>Log In </b></a>
                    &nbsp;
                    <a href="{{ url('/register') }}" class="btn-smaller"><b>Register</b></a>
                </ul>
            </div>
        </div>
    </nav>

    <nav id="primary-header" class="navbar navbar-expand-lg py-4">
        <div class="container-fluid padding-side">
            <div class="d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand" href="/">
                    @if($company->logo)
                    <img src="{{ asset('assets/img/company/' . $company->logo) }}" class="logo img-fluid">
                    @else
                    {{-- style="background-color: #d27848b9;" --}}
                    <div class="display-5 fw-normal" >
                        <h6 class="display-5 fw-normal">{{ $company->name }}</h6>
                    </div>
                    @endif
                </a>
                <button class="navbar-toggler border-0 d-flex d-lg-none order-3 p-2 shadow-none" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar"
                    aria-expanded="false">
                    <svg class="navbar-icon" width="60" height="60">
                        <use xlink:href="#navbar-icon"></use>
                    </svg>
                </button>
                <div class="header-bottom offcanvas offcanvas-end " id="bdNavbar"
                    aria-labelledby="bdNavbarOffcanvasLabel">
                    <div class="offcanvas-header px-4 pb-0">
                        <button type="button" class="btn-close btn-close-black mt-2" data-bs-dismiss="offcanvas"
                            aria-label="Close" data-bs-target="#bdNavbar"></button>
                    </div>
                    <div class="offcanvas-body align-items-center justify-content-center">
                        <div class="search d-block d-lg-none m-5">
                            <form class=" position-relative">
                                <input type="text" class="form-control bg-secondary border-0 rounded-5 px-4 py-2"
                                    placeholder="Search...">
                                <a href="#" class="position-absolute top-50 end-0 translate-middle-y p-1 me-3">
                                    <svg class="" width="20" height="20">
                                        <use xlink:href="#search"></use>
                                    </svg>
                                </a>
                            </form>
                        </div>
                        <ul class="navbar-nav align-items-center mb-2 mb-lg-0">
                            <li class="nav-item px-3">
                                <a class="nav-link p-0 {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                                    href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link p-0 {{ Request::is('about') ? 'active' : '' }}"
                                    href="{{ url('/about') }}">About</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link p-0 {{ Request::is('gallery') ? 'active' : '' }}"
                                    href="{{ url('/gallery') }}">Gallery</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link p-0 {{ Request::is('models') ? 'active' : '' }}"
                                    href="{{ url('/models') }}">models</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link p-0 {{ Request::is('services') ? 'active' : '' }}"
                                    href="{{ url('/services') }}">Services</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link p-0 {{ Request::is('blog') ? 'active' : '' }}"
                                    href="{{ url('/blog') }}">Blog</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link p-0 {{ Request::is('contact') ? 'active' : '' }}"
                                    href="{{ url('/contact') }}">Contact</a>
                            </li>
                            <li class="nav-item px-3 dropdown">
                                <a class="nav-link p-0 dropdown-toggle text-center " data-bs-toggle="dropdown"
                                    href="#" role="button" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu dropdown-menu-end animate slide mt-3 border-0 shadow">
                                    <li>
                                        <a href="{{ url('/sitemap') }}"
                                            class="dropdown-item  {{ Request::is('sitemap') ? 'active' : '' }}">sitemap
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/reviews') }}"
                                            class="dropdown-item {{ Request::is('reviews') ? 'active' : '' }}">Reviews
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/faqs') }} "
                                            class="dropdown-item {{ Request::is('faqs') ? 'active' : '' }}">FAQs </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="search d-lg-block d-none">
                    <form class=" position-relative">
                        <input type="text" class="form-control bg-secondary border-0 rounded-5 px-4 py-2"
                            placeholder="Search...">
                        <a href="#" class="position-absolute top-50 end-0 translate-middle-y p-1 me-3">
                            <svg class="" width="20" height="20">
                                <use xlink:href="#search"></use>
                            </svg>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
