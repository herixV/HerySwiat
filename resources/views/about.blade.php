@extends('layouts.app')

@section('content')

    @section('breadcrumbs')
    <x-breadcrumbs title="About Us" :links="[['name' => 'About', 'url' => '/']]" />
    @endsection

    <section id="about-us" class="padding-medium">
        @foreach ($aboutUs as $index => $about)
            <div class="vertical-element {{ $index > 0 ? 'mt-md-5 py-md-5' : '' }}">
                <div class="container-fluid padding-side">
                    <div class="row {{ $index % 2 === 0 ? '' : 'flex-row-reverse' }} align-items-center">
                        <div class="col-lg-6">
                            <div class="image-holder {{ $index % 2 !== 0 ? 'text-right' : '' }}">
                                <img src="{{ asset($about->image) }}" alt="about-us" class="img-fluid rounded-4">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-element p-5">
                                <h3 class="display-3 fw-normal">{{ $about->title }}</h3>
                                <p>{{ $about->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- <div class="vertical-element">
            <div class="container-fluid padding-side">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="image-holder">
                            <img src="./assets/img/item1.jpg" alt="about-us" class="img-fluid rounded-4">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-element p-5">
                            <h3 class="display-3 fw-normal">Who are we?</h3>
                            <p>The beginning of our journey vel tellus Turpis purus, gravida orci, fringilla a. Ac
                                sed
                                eu fringilla odio mi. Consequat pharetra at magna imperdiet cursus ac faucibus sit
                                libero. Ultricies quam nunc, lorem sit lorem urna, pretium aliquam ut. In vel, quis
                                donec dolor id in. Pulvinar commodo mollis diam sed facilisis at magna imperdiet
                                cursus
                                ac faucibus sit libero.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vertical-element mt-md-5 py-md-5">
            <div class="container-fluid padding-side">
                <div class="row flex-row-reverse align-items-center">
                    <div class="col-lg-6">
                        <div class="image-holder text-right">
                            <img src="./assets/img/Frame4.jpg" alt="about-us" class="img-fluid rounded-4">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-element p-5">
                            <h3 class="display-3 fw-normal">Choose us for the best designs</h3>
                            <p>We are nunc, lorem sit lorem urna, pretium aliquam ut. In vel, quis donec dolor id
                                in.
                                Pulvinar commodo mollis diam sed facilisis at magna imperdiet cursus ac faucibus sit
                                libero. Dignissim lacus, turpis ut suspendisse vel tellus. Turpis purus, gravida
                                orci,
                                fringilla a. Ac sed eu fringilla odio mi. Consequat pharetra at magna imperdiet
                                cursus
                                ac faucibus sit libero.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    

    <section id="info">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center mb-4 mb-lg-0">
                    <h3 class="display-1 fw-normal text-primary position-relative">500+ <span
                            class="position-absolute top-50 end-50 translate-middle z-n1 ps-lg-4 pt-lg-4"><img
                                src="./assets/img/pattern1.png" alt="needle" class="img-fluid"></span></h3>
                    <p class="text-capitalize">Clientes Satisfechos</p>
                </div>
                <div class="col-md-3 text-center mb-4 mb-lg-0">
                    <h3 class="display-1 fw-normal text-primary position-relative">10+ <span
                            class="position-absolute top-50 translate-middle z-n1"><img src="./assets/img/pattern1.png"
                                alt="thread" class="img-fluid"></span></h3>
                    <p class="text-capitalize">Años de Experiencia</p>
                </div>
                <div class="col-md-3 text-center mb-4 mb-lg-0">
                    <h3 class="display-1 fw-normal text-primary position-relative">5 <span
                            class="position-absolute top-100 pb-5 translate-middle z-n1"><img
                                src="./assets/img/pattern1.png" alt="scissors" class="img-fluid"></span></h3>
                    <p class="text-capitalize">Premios y Reconocimientos</p>
                </div>
                <div class="col-md-3 text-center mb-4 mb-lg-0">
                    <h3 class="display-1 fw-normal text-primary position-relative">100% <span
                            class="position-absolute top-50 end-50 pb-lg-4 pe-lg-2 translate-middle z-n1"><img
                                src="./assets/img/pattern1.png" alt="garment" class="img-fluid"></span></h3>
                    <p class="text-capitalize">Satisfacción Garantizada</p>
                </div>
            </div>
        </div>
    </section>

    <section id="vid" class="padding-medium">
        <div class="container-fluid padding-side">
            <h3 class="display-3 fw-normal text-center">View our Models</h3>
            <div class="imageblock me-4 position-relative mt-5">
                <img class="img-fluid" src="./assets/img/DAbanner5.jpg" alt="img">
                <a type="button" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/W_tIumKa8VY"
                    data-bs-target="#myModal" class="play-btn position-absolute top-50 start-50 translate-middle">
                    {{-- <i class="fa-solid fa-circle-play fa-5x play-icon"></i> --}}
                    <svg class="play-icon" width="70" height="70">
                        <use xlink:href="#play"></use>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
