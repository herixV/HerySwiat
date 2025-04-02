@extends('layouts.authentication')

@section('content')
<section id="slider" data-aos="fade-up">
    <div class="container-fluid pt-5 padding-side">
        <div class="d-flex rounded-5"
            style="background-image: url(./assets/img/{{ $company->main_image }} ); background-size: cover; background-repeat: no-repeat; height: 85vh; background-position: center;">
            <div class="row align-items-center m-auto pt-0 px-4 px-lg-0">
                <div class="text-start col-md-6 col-lg-5 col-xl-6 offset-lg-1">
                    <h2 class="display-1 fw-normal text-white">{{$company->slogan}}</h2>
                    <x-button route="{{ url('/') }}" title="Return to Home" />

                </div>
                <div class="col-md-6 col-lg-6 col-xl-5 mt-5 mt-md-0">
                    @if ($errors->any())            
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger"> <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>
                                {{ $error }}   
                            </div>
                        @endforeach  
                    @endif
                    <form id="form" class="form-group flex-wrap bg-white p-5 rounded-4 ms-md-5" method="POST" action="{{ route('auth') }}">
                        @csrf
                        <h3 class="display-5">Log In</h3>
                        <div class="col-lg-12 mb-3">
                            <label class="mb-2 fs-6 text-dark">E-mail*</label>
                            <input type="email" id="email" name="email" placeholder="Write Your Email Here" class="form-control shadow-none px-3 py-2" required autofocus>
                        </div>
                        <div class="col-lg-12 mb-3 position-relative">
                            <label class="mb-2 fs-6 text-dark">Password</label>
                            <div class="position-relative">
                                <input type="password" id="password" name="password" placeholder="Write Your Password Here" class="form-control shadow-none px-3 py-2 pe-5">
                                <svg id="togglePassword" width="25" height="25" class="position-absolute top-50 end-0 translate-middle-y me-3" style="cursor: pointer;">
                                    <use id="eyeIcon" xlink:href="#eye"></use>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 my-4">
                            <label class="d-flex align-items-center">
                              <input type="checkbox" class="checked-box me-2">
                              <span class="label-body">Remember me</span>
                            </label>
                          </div>
                        <div class="d-grid">
                            <x-button title="Log In" type="submit"/>
                        </div>
                        <div>
                            <span>Don't have an account?</span>
                            <x-button route="{{url('/register')}}" title="Register" variant="link" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('scripts')
@endsection
@push ('js')
<script src="{{ url('assets/js/togglePassword.js') }}"></script>
@endpush