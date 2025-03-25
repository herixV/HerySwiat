@extends('layouts.app')

@section('content')

@section('breadcrumbs')
<section id="slider" data-aos="fade-up" class="aos-init aos-animate">
    <div class="container-fluid padding-side">
      <div class="d-flex rounded-5" style="background-image: url(./assets/img/slider-image1.jpg); background-size: cover; background-repeat: no-repeat; height: 50vh; background-position: center;">
          <div class="row align-items-center m-auto">
            <div class="d-flex flex-wrap flex-column justify-content-center align-items-center">
              <h2 class="display-1 fw-normal">FAQs</h2>
              <nav class="breadcrumb">
                <a class="breadcrumb-item" href="/">Home</a>
                <span class="breadcrumb-item active" aria-current="page">FAQs</span>
              </nav>
            </div>
          </div>
      </div>
    </div>
</section>
@endsection

<section class="padding-small">
    <div class="container-fluid padding-side">
      <div class="row g-lg-5 my-4">
        <main class="col-lg-8">
          <h4 class="display-6 fw-normal my-3">Frequently Asked Questions</h4>
          <p>We understand that getting a custom-made outfit or tailored suit is an important process. Below, you’ll find answers to some of the most common questions about our services.</p>
          <div class="page-content my-5">
              <div class="accordion" id="accordion-box">
                  @foreach ($faqs as $index => $faq)
                      <div class="accordion-item mt-3 rounded-4">
                          <div class="accordion-header rounded-4 border-0" id="heading-{{ $index }}">
                              <button class="accordion-button rounded-4 {{ $index == 0 ? '' : 'collapsed' }}" 
                                  type="button" data-bs-toggle="collapse" 
                                  data-bs-target="#collapse-{{ $index }}" 
                                  aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" 
                                  aria-controls="collapse-{{ $index }}">
                                  <h3 class="accordion-title fs-5 fw-bold m-0">{{ $faq->question }}</h3>
                              </button>
                          </div>
                          <div id="collapse-{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" 
                              aria-labelledby="heading-{{ $index }}">
                              <div class="accordion-body">
                                  <div class="faqs-box">
                                      <div class="element-box margin-xsmall d-flex align-items-center">
                                          <div class="item-title">{{ $faq->answer }}</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
      </main>
      
        <div class="inquiry-item col-lg-4">
          <h3 class="section-title mb-3">Ask us anything</h3>
          <p>Call Us +123 987 456 or just drop us your message at <a href="mailto:contact@yourcompany.com">contact@yourcompany.com</a>. You can directly message us. </p>
          <form id="form" class="form-group flex-wrap">
            <div class="form-input col-lg-12 d-flex mb-3">
              <input type="text" name="name" placeholder="Write Your Name Here" class="form-control ps-3 me-3">
              <input type="text" name="email" placeholder="Write Your Email Here" class="form-control ps-3">
            </div>
            <div class="col-lg-12 mb-3">
              <input type="text" name="phone" placeholder="Phone Number" class="form-control ps-3">
            </div>
            <div class="col-lg-12 mb-3">
              <input type="text" name="subject" placeholder="Write Your Subject Here" class="form-control ps-3">
            </div>
            <div class="col-lg-12 mb-3">
              <textarea name="message" placeholder="Write Your Message Here" class="form-control ps-3" rows="8"></textarea>
            </div>
            <div class="d-grid">
              <button class="btn btn-arrow btn-primary mt-3"><span>Submit <svg width="18" height="18">
                <use xlink:href="#arrow-right"></use>
              </svg></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('scripts')
@endsection