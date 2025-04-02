@extends('layouts.app')

@section('content')

@section('breadcrumbs')
<x-breadcrumbs title="Service-Details" :links="[['name' => 'Services', 'url' => 'services'], ['name' => 'Service-Details', 'url' => '']]" />
@endsection

<div class="padding-small">
    <div class="container-fluid padding-side">
      <div class="row g-lg-5 ">
        <main class="post-grid col-lg-9">
          <div class="row">
            <article class="post-item">
              <h3 class="display-3 fw-normal mb-5">{{ $service->name}}</h3>
              <div class="hero-image mt-5">
                <img src="{{$service->image}}" alt="single-post" class="img-fluid">
              </div>
              <div class="post-content py-5">
                <p>{{ $service->short_description}}</p>
                <div class="post-description">
                  <p>{!! $service->description!!}</p>
                  {{-- <blockquote>{!! $service->description!!}</blockquote> --}}
                  {{-- <div class="my-5">
                    <h4 class="mb-3">Consectetur Facilisis Vivamus</h4>
                    <ul class="inner-list list-unstyled">
                      <li><span class="price-tick">✓</span> Blandit mauris libero condimentum
                        commodo
                        sociis convallis sit.</li>
                      <li><span class="price-tick">✓</span> Magna diam amet justo sed vel dolor et
                        volutpat integer.</li>
                      <li><span class="price-tick">✓</span> Laculis sit sapien hac odio elementum
                        egestas neque.</li>
                      <li><span class="price-tick">✓</span> Blandit mauris libero condimentum
                        commodo
                        sociis convallis sit.</li>
                      <li><span class="price-tick">✓</span> Magna diam amet justo sed vel dolor et
                        volutpat integer.</li>
                      <li><span class="price-tick">✓</span> Laculis sit sapien hac odio elementum
                        egestas neque.</li>
                    </ul>
                  </div>

                  <div class="row my-4">
                    <div class="col-md-6">
                        <img src="{{ $services->image }}" alt="post-image" class="img-fluid align-left">
                        <h5 class="text-center mt-3">{{ $services->name }}</h5>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ $services->image }}" alt="post-image" class="img-fluid align-right">
                        <h5 class="text-center mt-3">{{ $services->name }}</h5>
                    </div>
                  </div> --}}


                  {{-- <p>Tortor diam dignissim amet, in interdum aliquet. Magnis dictum et eros purus
                    fermentum, massa
                    ullamcorper sit sollicitudin. Nascetur libero elementum adipiscing mauris
                    maecenas et magna. Etiam
                    nec, rutrum a diam lacus, nunc integer etiam. Mattis pulvinar non viverra donec
                    pellentesque. Odio
                    mi consequat libero dolor. Porta ut diam lobortis eget leo, lectus.
                  </p> --}}


                </div>
              </div>
            </article>
          </div>
        </main>
        <aside class="col-lg-3">
          <div class="post-sidebar">

            <div class="widget block-tag mb-5">
              <h4 class="widget-title fw-normal border-bottom pb-3 mb-3">Booking available</h4>
              <p>Blandit mauris libero condimentum commodo morbi consectetur. </p>
              <a href="booking.html" class="btn btn-arrow btn-primary py-2 px-4">
                <span>Book Now <svg width="18" height="18">
                    <use xlink:href="#arrow-right"></use>
                  </svg></span>
              </a>            
            </div>

            <div class="widget sidebar-categories mb-5">
              <h4 class="widget-title fw-normal border-bottom pb-3 mb-3">Services Offered</h4>
              <ul class="list-unstyled">
                @foreach ($services as $serviceAll)
                <li>
                  <iconify-icon icon="ri:arrow-right-s-line"></iconify-icon><a href="#" class="item-anchor">{{$serviceAll->name}}  </a>
                </li>
                @endforeach
              </ul>
            </div>

            <div class="widget sidebar-recent-post mb-5">
              <h4 class="widget-title fw-normal border-bottom pb-3 mb-3">Recent Posts</h4>
              @foreach ($posts as $recentPost)
              <div class="sidebar-post-item d-flex justify-content-center">
                  <div class="row mb-3">
                      <div class="col-md-4">
                          <div class="image-holder">
                              <a href="{{ route('blog-single', ['id' => $recentPost->id, 'slug' => $recentPost->slug]) }}">
                                  <img src="{{ asset($recentPost->image) }}" alt="{{ $recentPost->title }}" class="img-fluid">
                              </a>
                          </div>
                      </div>
                      <div class="col-md-8">
                          <div class="sidebar-post-content">
                              <h5 class="post-title fs-5">
                                  <a href="{{ route('blog-single', ['id' => $recentPost->id, 'slug' => $recentPost->slug]) }}">{{ $recentPost->title }}</a>
                              </h5>
                              <p class="m-0 lh-base" style="font-size: 14px;">{{ Str::limit($recentPost->excerpt, 100) }}</p>
                          </div>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>

          </div>
        </aside>
        {{-- <aside class="col-lg-3">
          <div class="post-sidebar">

            <div class="widget block-tag mb-5">
              <h4 class="widget-title fw-normal border-bottom pb-3 mb-3">Booking available</h4>
              <p>Blandit mauris libero condimentum commodo morbi consectetur. </p>
              <a href="booking.html" class="btn btn-arrow btn-primary py-2 px-4">
                <span>Book Now <svg width="18" height="18">
                    <use xlink:href="#arrow-right"></use>
                  </svg></span>
              </a>            </div>

            <div class="widget sidebar-categories mb-5">
              <h4 class="widget-title fw-normal border-bottom pb-3 mb-3">Services Offered</h4>
              <ul class="list-unstyled">
                <li>
                  <iconify-icon icon="ri:arrow-right-s-line"></iconify-icon><a href="#" class="item-anchor">Yoga &amp; Meditation</a>
                </li>
                <li>
                  <iconify-icon icon="ri:arrow-right-s-line"></iconify-icon><a href="#" class="item-anchor">Dining</a>
                </li>
                <li>
                  <iconify-icon icon="ri:arrow-right-s-line"></iconify-icon><a href="#" class="item-anchor">Rooftop Pool</a>
                </li>
                <li>
                  <iconify-icon icon="ri:arrow-right-s-line"></iconify-icon><a href="#" class="item-anchor">Fitness Center</a>
                </li>
                <li>
                  <iconify-icon icon="ri:arrow-right-s-line"></iconify-icon><a href="#" class="item-anchor">Event Spaces</a>
                </li>
                <li>
                  <iconify-icon icon="ri:arrow-right-s-line"></iconify-icon><a href="#" class="item-anchor">Free Wi-Fi</a>
                </li>
              </ul>
            </div>

            <div class="widget sidebar-recent-post mb-5">
              <h4 class="widget-title fw-normal border-bottom pb-3 mb-3">Recent Posts</h4>
              <div class="sidebar-post-item d-flex justify-content-center">
                <div class="row mb-3">
                  <div class="col-md-4">
                    <div class="image-holder">
                      <a href="#">
                        <img src="./assets/img/post1.jpg" alt="blog" class="img-fluid">
                      </a>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="sidebar-post-content">
                      <h5 class="post-title fs-5">
                        <a href="#">How to clean roof properly</a>
                      </h5>
                      <p class=" m-0 lh-base" style="font-size: 14px;">Magnam at iusto omnis impedit minima sunt, aspernatur rem dolorem, dolorum quaerat eius quas ipsum ...</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sidebar-post-item d-flex justify-content-center">
                <div class="row mb-3">
                  <div class="col-md-4">
                    <div class="image-holder">
                      <a href="#">
                        <img src="./assets/img/post2.jpg" alt="blog" class="img-fluid">
                      </a>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="sidebar-post-content">
                      <h5 class="post-title fs-5">
                        <a href="#">Top 10 hacks for cleaning </a>
                      </h5>
                      <p class=" m-0 lh-base" style="font-size: 14px;">Magnam at iusto omnis impedit minima sunt, aspernatur rem dolorem, dolorum quaerat eius quas ipsum ...</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sidebar-post-item d-flex justify-content-center">
                <div class="row mb-3">
                  <div class="col-md-4">
                    <div class="image-holder">
                      <a href="#">
                        <img src="./assets/img/post3.jpg" alt="blog" class="img-fluid">
                      </a>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="sidebar-post-content">
                      <h5 class="post-title fs-5">
                        <a href="#">Best ways to clean your tiles</a>
                      </h5>
                      <p class=" m-0 lh-base" style="font-size: 14px;">Magnam at iusto omnis impedit minima sunt, aspernatur rem dolorem, dolorum quaerat eius quas ipsum ...</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </aside> --}}
      </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection