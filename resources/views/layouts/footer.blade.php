<section id="footer">
    <div class="container-fluid padding-side  pt-0" data-aos="fade-up">
        <footer class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                {{-- <img src="./assets/img/main-logo-footer.png" alt="logo-footer" class="img-fluid"> --}}
                <h3 class="display-5 fw-normal">{{ $company->name}}</h3>
                <p class="mt-3">{{ $company->description }}</p>

                    <h4 class="display-6 fw-normal">Our Info</h4>
                    <ul class="nav flex-column">
                        <li class="location text-capitalize d-flex align-items-center">
                            <i class="fa-solid fa-location-dot color me-1"></i>{{ $company->address }}
                        </li>
                        <li class="phone text-capitalize d-flex align-items-center mt-2">
                            <i class="fa-solid fa-phone color me-1"></i>{{ $company->phone }}
                        </li>
                        <li class="email text-capitalize d-flex align-items-center mt-2">
                            <i class="fa-solid fa-envelope color me-1"></i>{{ $company->email }}
                        </li>
                    </ul>
                
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <h4 class="display-6 fw-normal">Quick links</h4>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="#" class="p-0 "> Home </a></li>
                    <li class="nav-item"><a href="#" class="p-0 "> About </a></li>
                    <li class="nav-item"><a href="#" class="p-0 "> Gallery </a></li>
                    <li class="nav-item"><a href="#" class="p-0 "> Services</a></li>
                    <li class="nav-item"><a href="#" class="p-0 "> Contact us </a></li>
                    <li class="nav-item"><a href="#" class="p-0 "> Support </a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <h4 class="display-6 fw-normal">Services</h4>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="#" class="p-0 "> Spa </a></li>
                    <li class="nav-item"><a href="#" class="p-0 "> Pool </a></li>
                    <li class="nav-item"><a href="#" class="p-0 "> Yoga </a></li>
                    <li class="nav-item"><a href="#" class="p-0 "> Gym</a></li>
                    <li class="nav-item"><a href="#" class="p-0 "> News </a></li>
                    <li class="nav-item"><a href="#" class="p-0 "> Terms & Conditions </a></li>
                </ul>
            </div>
        
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <h4 class="display-6 fw-normal">Join Our Newsletter</h4>
                <p>Sign up to our newsletter to receive latest news.</p>
                <form class=" position-relative">
                    <input type="text" class="form-control px-4 py-3 bg-transparent mb-3" placeholder="Your Name">
                    <input type="email" class="form-control px-4 py-3 bg-transparent" placeholder="Your email">
                    <div class="d-grid">
                        <x-button title="Subscribe Now" />
                    </div>
                </form>
                <ul class="social-links d-flex flex-wrap list-unstyled mt-4 mb-0">
                    @foreach ($socialNetworks as $socialNetwork)
                        <li class="social me-4" style=" font-size: 20px;">
                            <a href="{{ $socialNetwork->url }}">
                                {!! $socialNetwork->icon !!}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            
            
        </footer>
    </div>
    <hr class="text-black">
    <div class="container-fluid padding-side " data-aos="fade-up">
        <footer >
            
            <div class="col-md-6 col-lg-12 mb-4 mb-lg-3">
                <p class="m-0">© Copyright 2024 {{ $company->name }} Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
</section>