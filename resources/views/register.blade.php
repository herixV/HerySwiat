@extends('layouts.authentication')

@section('content')
<section id="slider" data-aos="fade-up">
    <div class="container-fluid pt-5 padding-side">
        <div class="d-flex rounded-5"
            style="background-image: url(./assets/img/{{ $company->main_image }}); background-size: cover; background-repeat: no-repeat; height: 85vh; background-position: center;">
            <div class="row align-items-center m-auto pt-0 px-4 px-lg-0">
                <div class="text-start col-md-6 col-lg-5 col-xl-6 offset-lg-1">
                    <h2 class="display-1 fw-normal text-white">HerySwiat Your Gateway to fashion.</h2>
                    <x-button route="{{url('/')}}" title="Return to Home" />
                </div>
                <div class="col-md-6 col-lg-6 col-xl-5 mt-5 mt-md-0">
                    <form id="form" class="form-group flex-wrap bg-white p-5 rounded-4 ms-md-5">
                        <h3 class="display-5">Register</h3>
                        <div class="col-lg-12 mb-3">
                            <label class="mb-2 fs-6 text-dark">Name*</label>
                            <input type="text" name="name" placeholder="Write Your Name Here" class="form-control shadow-none px-3 py-2" required="">
                          </div>
                        <div class="col-lg-12 mb-3">
                            <label class="mb-2 fs-6 text-dark">E-mail*</label>
                            <input type="email" name="email" placeholder="Write Your Email Here" class="form-control shadow-none px-3 py-2" required="">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="mb-2 fs-6 text-dark">Your Password</label>
                            <input type="password" name="password" placeholder="Write Your Password Here" class="form-control shadow-none px-3 py-2">
                        </div>
                        <div class="col-lg-12 my-4">
                            <label class="d-flex align-items-center">
                              <input type="checkbox" class="checked-box me-2">
                                <div>
                                    <span>I agree the</span>
                                    <x-button route="{{ url('#') }}" title="Terms and Conditions" variant="link" />
                                    
                                </div>
                            </label>
                          </div>
                        <div class="d-grid">
                            <x-button title="Register" />
                            
                        </div>
                        <div>
                            <span>Already have an account?</span>
                            <x-button route="{{url('/login')}}" title="Log In" variant="link" />
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