@extends('layouts.app')

@section('content')

@section('breadcrumbs')
<section id="slider" data-aos="fade-up" class="aos-init aos-animate">
    <div class="container-fluid padding-side">
      <div class="d-flex rounded-5" style="background-image: url(./assets/img/slider-image1.jpg); background-size: cover; background-repeat: no-repeat; height: 50vh; background-position: center;">
          <div class="row align-items-center m-auto">
            <div class="d-flex flex-wrap flex-column justify-content-center align-items-center">
              <h2 class="display-1 fw-normal">Sitemap</h2>
              <nav class="breadcrumb">
                <a class="breadcrumb-item" href="/">Home</a>
                <span class="breadcrumb-item active" aria-current="page">Sitemap</span>
              </nav>
            </div>
          </div>
      </div>
    </div>
</section>
@endsection
{{-- <section class="padding-small">
    <div class="container-fluid padding-side borde">
        <section id="sitemap" class="padding-medium bg-lightbrown d-flex rounded-5">
            <div class="container-fluid padding-side"> --}}
<section class="padding-small">
    <div class="container-fluid padding-side borde">
        <section id="sitemap" class=" bg-lightbrown d-flex rounded-5">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-12 mb-5">
                        <h2 class="display-3 mb-4">Site Map</h2>
                        <div class="border-bottom border-dark" style="width: 120px;"></div>
                    </div>
                    
                    <!-- Mapa de Navegación Principal -->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <h3 class="h4 mb-4">Navegación Principal</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="/" class="text-black">Home</a></li>
                            <li class="mb-2"><a href="/about" class="text-black">About</a></li>
                            <li class="mb-2"><a href="/gallery" class="text-black">Gallery</a></li>
                            <li class="mb-2"><a href="/services" class="text-black">Services</a></li>
                            <li class="mb-2"><a href="/contact" class="text-black">Contact</a></li>
                            <li class="mb-2"><a href="#" class="text-black">Pages</a>
                                <ul class="list-unstyled ms-3 mt-2">
                                    <li class="mb-1"><a href="/models" class="text-muted">Models</a></li>
                                    <li class="mb-1"><a href="/blog" class="text-muted">Blog</a></li>
                                    <li class="mb-1"><a href="/sitemap" class="text-muted">Sitemap</a></li>
                                    <li class="mb-1"><a href="/reviews" class="text-muted">Reviews</a></li>
                                    <li class="mb-1"><a href="/faqs" class="text-muted">FAQs</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
        
                    <!-- Páginas de Sistema -->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <h3 class="h4 mb-4">Páginas Funcionales</h3>
                        <ul class="list-unstyled">
                            
                            <li class="mb-2"><a href="/reviews" class="text-black">Reviews</a></li>
                            <li class="mb-2"><a href="/faqs" class="text-black">FAQs</a></li>
                            <li class="mb-2"><a href="/login" class="text-black">Login</a></li>
                            <li class="mb-2"><a href="/register" class="text-black">Register</a></li>
                        </ul>
                    </div>
        
                    <!-- Recursos y Legales -->
                    <div class="col-md-6 col-lg-4">
                        <h3 class="h4 mb-4">Información Legal</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#" class="text-black">Privacy Policy</a></li>
                            <li class="mb-2"><a href="#" class="text-black">Terms & Conditions</a></li>
                            <li class="mb-2"><a href="#" class="text-black">Cookie Policy</a></li>
                            <li class="mb-2"><a href="#" class="text-black">Accessibility</a></li>
                        </ul>
                    </div>
                </div>
        
                <!-- Sección de Servicios -->
                <div class="row mt-5">
                    <div class="col-12">
                        <h3 class="h4 mb-4">Todos los Servicios</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a href="/service-details" class="text-black">custom tailoring</a></li>
                                    <li class="mb-2"><a href="/service-details" class="text-black">Specialized Costume Design</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a href="/service-details" class="text-black">Arrangements and Adjustments of Garments</a></li>
                                    <li class="mb-2"><a href="/service-details" class="text-black">Clothing Customization</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a href="/service-details" class="text-black">Sewing Courses and Workshops</a></li>
                                    <li class="mb-2"><a href="/service-details" class="text-black">Style and Fashion Consulting</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>


@endsection

@section('scripts')
@endsection