@extends('layouts.app')
   
@section('content')
    <section id="slider" data-aos="fade-up">
        <div class="container-fluid padding-side">
            <div class="d-flex rounded-5"
                style="background-image: url(./assets/img/{{ $company->main_image }}); background-size: cover; background-repeat: no-repeat; height: 85vh; background-position: center;">
                <div class=" align-items-center m-auto pt-5 px-4 px-lg-0">
                    <div class="text-start col-md-6 col-lg-5 col-xl-10 offset-lg-1">
                        <h2 class="display-1 fw-normals" style="color: white;">HerySwiat Your Gateway to fashion.</h2>
                        <x-button route="{{ url('/gallery') }}" title="Explore Gallery" variant="simple" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us" class="padding-large">
        <div class="container-fluid padding-side" data-aos="fade-up">
            <h3 class="display-3 text-center fw-normal col-lg-4 offset-lg-4">HerySwiat: Your Gateway to fashion</h3>
            <div class="row align-items-start mt-3 mt-lg-5">
                <div class="col-lg-6">
                    <div class="p-5">
                        <p>Welcome to HerySwiat: Where craftsmanship meets style. Discover timeless elegance tailored just for you.</p>
                        <x-button route="{{ url('/about') }}" title="Read About Us" variant="simple" />
                    </div>
                    <img src="{{ asset($about->image) }}" alt="img" class="img-fluid rounded-4 mt-4">
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    @foreach ($aboutUs as $about)
                    {{-- <img src="./assets/img/Frame4.jpg" alt="img" class="img-fluid rounded-4"> --}}
                    <img src="{{ asset($about->image) }}" alt="img" class="img-fluid rounded-4 mt-4">
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="info">
        <div class="container">
          <div class="row">
            <div class="col-md-3 text-center mb-4 mb-lg-0">
              <h3 class="display-1 fw-normal text-primary position-relative">500+ <span class="position-absolute top-50 end-50 translate-middle z-n1 ps-lg-4 pt-lg-4"><img src="./assets/img/pattern1.png" alt="needle" class="img-fluid"></span></h3>
              <p class="text-capitalize">Satisfied Customers</p>
            </div>
            <div class="col-md-3 text-center mb-4 mb-lg-0">
              <h3 class="display-1 fw-normal text-primary position-relative">10+ <span class="position-absolute top-50 translate-middle z-n1"><img src="./assets/img/pattern1.png" alt="thread" class="img-fluid"></span></h3>
              <p class="text-capitalize">Years of Experience</p>
            </div>
            <div class="col-md-3 text-center mb-4 mb-lg-0">
              <h3 class="display-1 fw-normal text-primary position-relative">5 <span class="position-absolute top-100 pb-5 translate-middle z-n1"><img src="./assets/img/pattern1.png" alt="scissors" class="img-fluid"></span></h3>
              <p class="text-capitalize">Awards and Recognitions</p>
            </div>
            <div class="col-md-3 text-center mb-4 mb-lg-0">
              <h3 class="display-1 fw-normal text-primary position-relative">100% <span class="position-absolute top-50 end-50 pb-lg-4 pe-lg-2 translate-middle z-n1"><img src="./assets/img/pattern1.png" alt="garment" class="img-fluid"></span></h3>
              <p class="text-capitalize">Satisfaction Guaranteed</p>
            </div>
          </div>
        </div>
    </section>

    <section id="room" class="padding-medium">
        <div class="container-fluid padding-side" data-aos="fade-up">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <div>
                    <h3 class="display-3 fw-normal text-center">Explore our Models</h3>
                </div>
                <x-button route="{{ url('/models')}}" title="Explore Models" variant="simple" />
            </div>

            <div class="swiper room-swiper mt-5">
                <div class="swiper-wrapper">
                    @foreach ($dresses as $dress)
                    <div class="swiper-slide">
                        <div class="product-item position-relative bg-black rounded-4 overflow-hidden">
                            <img src="{{ asset($dress->image) }}" class="post-image img-fluid rounded-4">
                            <div class="product-description position-absolute p-5 text-start">
                                <h4 class="display-6 fw-normal text-white">{{ $dress->name }}</h4>
                                <p class="product-paragraph text-white">{{ $dress->short_description }}</p>
                                <table>
                                    <tbody>
                                        <tr class="text-white">
                                            <td class="pe-2">Price:</td>
                                            <td class="price">{{ number_format($dress->price, 2) }}$ /{{ $dress->price_unit }}</td>
                                        </tr>
                                        <tr class="text-white">
                                            <td class="pe-2">Size:</td>
                                            <td>{{ $dress->size }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                {{-- <a href="index.html">
                                    <p class="text-decoration-underline text-white m-0 mt-2">Browse Now</p>
                                </a> --}}
                            </div>
                        </div>
                        <div class="room-content text-center mt-3">
                            <h4 class="display-6 fw-normal"><a href="index.html">{{ $dress->name }}</a></h4>
                            <p><span class="text-primary fs-4">${{ number_format($dress->price, 2) }}</span>/{{ $dress->price_unit }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination room-pagination position-relative mt-5"></div>
            </div>
        </div>
    </section>

    <section id="gallery" data-aos="fade-up">
        <h3 class="display-3 fw-normal text-center">our gallery</h3>
        <p class="text-center col-lg-4 offset-lg-4 mb-5">Explore img of our well-appointed accommodations,
            featuring
            modern amenities and stylish decor designed to make your stay a memorable one. Admire the stunning views of
            the
            city skyline from our rooftop pool, where you can relax and unwind after a day of exploring the city.</p>
        <div class="container position-relative">
            <div class="row">
                <div class="swiper gallery-swiper offset-1 col-10">
                    <div class="swiper-wrapper">
                        @foreach  ($galleries as $gallery)
                        <div class="swiper-slide">
                            <img src="{{ asset($gallery->image) }}" alt="img" class="img-fluid rounded-4">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="position-absolute top-50 start-0 translate-middle-y main-slider-button-prev d-none d-md-block">
                <svg class="bg-secondary rounded-circle p-3" width="70" height="70">
                    <use xlink:href="#arrow-left"></use>
                </svg>
            </div>
            <div class="position-absolute top-50 end-0 translate-middle-y main-slider-button-next d-none d-md-block">
                <svg class="bg-secondary rounded-circle p-3" width="70" height="70">
                    <use xlink:href="#arrow-right"></use>
                </svg>
            </div>
            <div
                class="position-absolute top-100 end-50 translate-middle main-slider-button-prev mt-5 d-md-none d-block">
                <svg class="bg-secondary rounded-circle p-2" width="50" height="50">
                    <use xlink:href="#arrow-left"></use>
                </svg>
            </div>
            <div
                class="position-absolute top-100 start-50 translate-middle main-slider-button-next mt-5 ms-4 d-md-none d-block">
                <svg class="bg-secondary rounded-circle p-2" width="50" height="50">
                    <use xlink:href="#arrow-right"></use>
                </svg>
            </div>
        </div>
    </section>

    <section id="services" class="padding-medium">
        <div class="container-fluid padding-side" data-aos="fade-up">
            <h3 class="display-3 text-center fw-normal col-lg-4 offset-lg-4">Our services & facilities</h3>
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

                            <x-button route="{{ route('service-details', ['id'=>$service->id, 'slug'=>Str::slug($service->slug)]) }}" title="Read More" variant="link" />
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="padding-medium pt-0">
        <div class="container-fluid padding-side" data-aos="fade-up">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <div>
                    <h3 class="display-3 fw-normal text-center">Our Blogs & Events</h3>
                </div>
                <x-button route="{{ url('/blog') }}" title="More Blog" variant="simple" />
            </div>
            <div class="row mt-5">
                @foreach ($posts as $index => $post)
                    <div class="col-md-6 col-lg-{{ $index == 3 ? '8' : '4' }} mb-4">
                        <div class="blog-post position-relative overflow-hidden rounded-4">
                            <img src="{{ asset($post->image) }}" class="blog-img img-fluid rounded-4" alt="img">
                            <div class="position-absolute bottom-0 p-5">
                                <a href="#"><span class="bg-secondary text-body m-0 px-2 py-1 rounded-2 fs-6">{{ $post->category }}</span></a>
                                <h4 class="display-6 fw-normal mt-2">
                                    <a href="{{ route('blog-single', ['id' => $post->id, 'slug' => $post->slug]) }}">{{ $post->title }}</a>
                                </h4>
                                <p class="m-0 align-items-center">
                                    <svg width="19" height="19"><use xlink:href="#clock"></use></svg>
                                    {{ $post->created_at->format('d M, Y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            {{-- <div class="row mt-5">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="blog-post position-relative overflow-hidden rounded-4">
                        <img src="./assets/img/post3.jpg" class="blog-img img-fluid rounded-4" alt="img">
                        <div class="position-absolute bottom-0 p-5">
                            <a href="#"><span class="bg-secondary text-body m-0 px-2 py-1 rounded-2 fs-6">Hotels</span></a>
                            <h4 class="display-6 fw-normal mt-2"><a href="index.html">A Day in the Life of a Hotel
                                    Mellow
                                    Guest</a></h4>
                            <p class="m-0 align-items-center"><svg width="19" height="19">
                                    <use xlink:href="#clock"></use>
                                </svg> 22 Feb, 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="blog-post position-relative overflow-hidden rounded-4">
                        <img src="./assets/img/post2.jpg" class="blog-img img-fluid rounded-4" alt="img">
                        <div class="position-absolute bottom-0 p-5">
                            <a href="#"><span class="bg-secondary text-body m-0 px-2 py-1 rounded-2 fs-6">Activites</span></a>
                            <h4 class="display-6 fw-normal mt-2"><a href="index.html">Guide to Seasonal Activities in
                                    the
                                    City</a></h4>
                            <p class="m-0 align-items-center"><svg width="19" height="19">
                                    <use xlink:href="#clock"></use>
                                </svg> 22 Feb, 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="blog-post position-relative overflow-hidden rounded-4">
                        <img src="./assets/img/post1.jpg" class="blog-img img-fluid rounded-4" alt="img">
                        <div class="position-absolute bottom-0 p-5">
                            <a href="#"><span class="bg-secondary text-body m-0 px-2 py-1 rounded-2 fs-6">Rooms</span></a>
                            <h4 class="display-6 fw-normal mt-2"><a href="index.html">A Look Inside Hotel Mellow's
                                    Suites</a>
                            </h4>
                            <p class="m-0 align-items-center"><svg width="19" height="19">
                                    <use xlink:href="#clock"></use>
                                </svg> 22 Feb, 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8 mb-4">
                    <div class="blog-post position-relative overflow-hidden rounded-4">
                        <img src="./assets/img/post5.jpg" class="blog-img img-fluid rounded-4" alt="img">
                        <div class="position-absolute bottom-0 p-4">
                            <a href="#"><span class="bg-secondary text-body m-0 px-2 py-1 rounded-2 fs-6">Activites</span></a>
                            <h4 class="display-6 fw-normal mt-2"><a href="index.html">Trends
                                Why a Personal Designer Is the Key to Your Unique Style</a></h4>
                            <p class="m-0 align-items-center"><svg width="19" height="19">
                                    <use xlink:href="#clock"></use>
                                </svg> 22 Feb, 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="blog-post position-relative overflow-hidden rounded-4">
                        <img src="./assets/img/post4.jpg" class="blog-img img-fluid rounded-4" alt="img">
                        <div class="position-absolute bottom-0 p-5">
                            <a href="#"><span class="bg-secondary text-body m-0 px-2 py-1 rounded-2 fs-6">Rooms</span></a>
                            <h4 class="display-6 fw-normal mt-2"><a href="index.html">Design Studio
                                The Benefits of Ordering a Custom Suit from an Exclusive Designer</a>
                            </h4>
                            <p class="m-0 align-items-center"><svg width="19" height="19">
                                    <use xlink:href="#clock"></use>
                                </svg> 22 Feb, 2024</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="row mt-5">
                @foreach ($posts as $post)
                    <div class="col-md-6 col-lg-{{ $loop->first ? '8' : '4' }} mb-4">
                        <div class="blog-post position-relative overflow-hidden rounded-4">
                            <img src="{{ asset($post->image) }}" class="blog-img img-fluid rounded-4" alt="{{ $post->title }}">
                            <div class="position-absolute bottom-0 p-4">
                                <a href="#"><span class="bg-secondary text-body m-0 px-2 py-1 rounded-2 fs-6">{{ $post->slug }}</span></a>
                                <h4 class="display-6 fw-normal mt-2">
                                    <a href="{{ route('blog-single', ['id' => $post->id, 'slug' => $post->slug]) }}">{{ $post->title }}</a>
                                </h4>
                                <p class="m-0 align-items-center">
                                    <svg width="19" height="19">
                                        <use xlink:href="#clock"></use>
                                    </svg> {{ $post->created_at->format('d M, Y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
        </div>
    </section>
    
@endsection

  

@section('scripts')

@endsection