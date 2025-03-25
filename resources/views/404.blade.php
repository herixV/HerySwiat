@extends('layouts.authentication')

@section('content')

<section id="error-404" data-aos="fade-up">
    <div class="container-fluid pt-5 padding-side">
        <div class="d-flex rounded-5"
            style="background-image: url(./assets/img/DAbanner2.jpg); background-size: cover; background-repeat: no-repeat; height: 85vh; background-position: center;">
            <div class="row align-items-center m-auto pt-0 px-4 px-lg-0">
                <div class="text-center col-12">
                    <h1 class="display-1 fw-bold" style="color: white;">404</h1>
                    <h2 class="display-4 fw-normal text-white">Oops! Page Not Found</h2>
                    <p class="fs-5 text-light">The page you are looking for might have been removed or is temporarily unavailable.</p>
                    <a href="{{url('/')}}" class="btn btn-arrow btn-primary mt-4">
                        <span>Return to Home <svg width="18" height="18">
                                <use xlink:href="#arrow-right"></use>
                            </svg></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
@endsection