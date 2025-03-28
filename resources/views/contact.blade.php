@extends('layouts.app')

@section('content')

    <section id="slider" data-aos="fade-up" class="aos-init aos-animate">
        <div class="container-fluid padding-side">
            <div class="d-flex rounded-5"
                style="background-image: url(./assets/img/slider-image1.jpg); background-size: cover; background-repeat: no-repeat; height: 50vh; background-position: center;">
                <div class="row align-items-center m-auto">
                    <div class="d-flex flex-wrap flex-column justify-content-center align-items-center">
                        <h2 class="display-1 fw-normal">Contact</h2>
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="/">Home</a>
                            <span class="breadcrumb-item active" aria-current="page">Contact</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us-wrap padding-small">
        <div class="container-fluid padding-side ">
            <div class="row flex-row-reverse">
                <div class="inquiry-item col-lg-6 mb-5">
                    <h4 class="display-6 fw-normal my-3">Got any questions?</h4>
                    <p>Use the form below to get in touch with us.</p>
                    <form id="contactForm" action="contact.php" method="post" class="form-group contact-form mt-4">
                        <div class="form-input col-lg-12 d-flex justify-content-between mb-3">
                            <div class="w-100 me-3">
                                <label class="mb-2 fs-6 text-dark">Your Name*</label>
                                <input type="text" name="name" placeholder="Write Your Name Here"
                                    class="form-control shadow-none px-3 py-2" required="">
                            </div>
                            <div class="w-100">
                                <label class="mb-2 fs-6 text-dark">Your E-mail*</label>
                                <input type="email" name="email" placeholder="Write Your Email Here"
                                    class="form-control shadow-none px-3 py-2" required="">
                            </div>

                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="mb-2 fs-6 text-dark">Phone Number</label>
                            <input type="number" name="phone" placeholder="Phone Number"
                                class="form-control shadow-none px-3 py-2">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="mb-2 fs-6 text-dark">Subject</label>

                            <input type="text" name="subject" placeholder="Write Your Subject Here"
                                class="form-control shadow-none px-3 py-2">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="mb-2 fs-6 text-dark">Your Message*</label>

                            <textarea name="message" placeholder="Write Your Message Here" class="form-control shadow-none px-3 py-2"
                                style="height:150px;" required=""></textarea>
                        </div>
                        <div class="d-grid">
                            <a type="submit" name="submit" class="btn btn-arrow btn-primary mt-3">
                                <span>Submit
                                <i class="fa-solid fa-arrow-right"></i>        
                                </span>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="contact-info col-lg-6 mb-5">
                    <h4 class="display-6 fw-normal my-3">Contact information</h4>
                    <p>Tortor dignissim convallis aenean et tortor at risus viverra adipiscing.</p>
                    <div class="page-content">
                        <div class="col-md-6">
                            <div class="content-box my-5">
                                <h5 class="element-title fw-bold ">Head Office</h5>
                                <div class="contact-address">
                                    <p>{{ $company->address}}</p>
                                </div>
                                <div class="contact-number ">
                                    <a href="#">{{ $company->phone}}</a>
                                </div>
                                <div class="email-address">
                                    <p>
                                        <a href="#">{{ $company->email}}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="content-box my-5">
                                <h5 class="element-title fw-bold ">Branch Office</h5>
                                <div class="contact-address">
                                    <p>730 Glenstone Ave 65802, Springfield, US</p>
                                </div>
                                <div class="contact-number ">
                                    <a href="#">+123 987 321 ,</a>
                                    <a href="#">+123 123 654</a>
                                </div>
                                <div class="email-address">
                                    <p>
                                        <a href="#">contact@yourcompany.com</a>
                                    </p>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-6">
                            <div class="content-box my-5">
                                <h5 class="element-title fw-bold ">Social info</h5>
                                <div class="social-links">
                                    <ul class="social-links d-flex flex-wrap list-unstyled mt-3">
                                        @foreach ($companySocialNetworks as $companySocialNetwork)
                                            <li class="social ms-4">
                                                <a href="{{ $companySocialNetwork->url }}">
                                                    {!! $companySocialNetwork->icon !!}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
