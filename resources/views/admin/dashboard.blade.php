@extends('admin.app')
   

@section('content')
    
<section id="dashboard" class="padding-medium">
    <div class="container-fluid padding-side">
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="service mb-4 text-center rounded-4 p-5">
                <div class="position-relative">
                    <svg class="color" width="70" height="70">
                    <use xlink:href="#clipboard-linear"></use>
                    </svg>
                    <img src="{{url('/assets/img/pattern2.png')}}" alt="img" class="position-absolute top-100 start-50 translate-middle z-n1 pe-5">
                </div>
                <h4 class="display-6 fw-normal my-3">Services</h4>
                <p>Module for publishing services.</p>

                <x-button route="{{ route('serviceList')}}" title="Go Services" variant="link" />
            </div>
        </div>
    </div>
</section>


@endsection

@section('scripts')
@endsection
