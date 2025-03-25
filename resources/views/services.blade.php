@extends('layouts.app')

@section('content')
    

    @section('breadcrumbs')
        <x-breadcrumbs title="Services" :links="[['name' => 'Services', 'url' => '']]" />
    @endsection

    <section id="services" class="padding-medium">
        <div class="container-fluid padding-side">
            <div class="row">
                @foreach ($services as $service)
                <div class="col-md-6 col-xl-4">
                    <div class="service mb-4 text-center rounded-4 p-5">
                        <div class="position-relative">
                            <svg class="color" width="70" height="70">
                                <use xlink:href="#sewing-machine"></use>
                            </svg>
                            <img src="./assets/img/pattern2.png" alt="img"
                                class="position-absolute top-100 start-50 translate-middle z-n1 pe-5">
                        </div>
                        <h4 class="display-6 fw-normal my-3">{{$service->name }}</h4>
                        <p>{{ \Illuminate\Support\Str::words($service->description, 50, '...') }}</p>

                        {{-- <x-button route="{{ url('services/service-details/' . $service->id . '/' . Str::slug($service->slug)) }}" title="Read More" variant="simple" /> --}}
                            
                        <x-button route="{{ route('service-details', ['id'=>$service->id, 'slug'=>Str::slug($service->slug)]) }}" title="Read More" variant="simple" />


                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
