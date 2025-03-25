@extends('layouts.app')

@section('content')

@section('breadcrumbs')
<section id="slider" data-aos="fade-up" class="aos-init aos-animate">
    <div class="container-fluid padding-side">
      <div class="d-flex rounded-5" style="background-image: url(./assets/img/slider-image1.jpg); background-size: cover; background-repeat: no-repeat; height: 50vh; background-position: center;">
          <div class="row align-items-center m-auto">
            <div class="d-flex flex-wrap flex-column justify-content-center align-items-center">
              <h2 class="display-1 fw-normal">Reviews</h2>
              <nav class="breadcrumb">
                <a class="breadcrumb-item" href="/">Home</a>
                <span class="breadcrumb-item active" aria-current="page">Reviews</span>
              </nav>
            </div>
          </div>
      </div>
    </div>
</section>
@endsection

<section id="review" class="padding-small">
  <div class="container-fluid padding-side">
      <div class="row">
          @foreach ($reviews as $review)
              <div class="col-md-6 col-xl-4 mb-4">
                  <div class="reviews-components border rounded-4 p-5">
                      <iconify-icon icon="gridicons:quote" class="quote my-2"></iconify-icon>
                      <p>“{{ $review->review }}”</p>
                      <div class="row mt-4">
                          <div class="col-md-3">
                              <img src="{{ $review->image }}" alt="image" class="img-fluid">
                          </div>
                          <div class="col-md-9">
                              <h5>{{ $review->name }}</h5>
                              <div class="d-flex">
                                  @for ($i = 1; $i <= 5; $i++)
                                      @if ($i <= $review->rating)
                                          <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                      @elseif ($i - 0.5 == $review->rating)
                                          <iconify-icon icon="ion:star-half" class="rate pe-1"></iconify-icon>
                                      @endif
                                  @endfor
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
  </div>
</section>

{{-- <section id="review" class="padding-small">
    <div class="container-fluid padding-side">
      <div class="row">
        <div class="col-md-6 col-xl-4 mb-4">
          <div class="reviews-components border rounded-4 p-5">
            <iconify-icon icon="gridicons:quote" class="quote my-2"></iconify-icon>
            <p>“A pellen tesque pretium feugiat vel mobi sagittis lorem habi tasse cursus ipsum quis nec
              eget facilisis. Quis nibh ut bindum nisl quis placerat proin tortor mattis.”</p>
            <div class="row mt-4">
              <div class="col-md-3">
                <img src="./assets/img/commentor-item1.jpg" alt="image" class="img-fluid">
              </div>
              <div class="col-md-9">
                <h5>Kelly Garcia</h5>
                <div class="d-flex">
                  <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                  <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                  <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                  <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                  <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4">
          <div class="reviews-components border rounded-4 p-5">
            <iconify-icon icon="gridicons:quote" class="quote my-2"></iconify-icon>
            <p>“A pellen tesque pretium feugiat vel mobi sagittis lorem habi tasse cursus ipsum quis nec
              eget facilisis. Quis nibh ut bindum nisl quis placerat proin tortor mattis.”</p>
            <div class="row mt-4">
              <div class="col-md-3">
                <img src="./assets/img/commentor-item2.jpg" alt="image" class="img-fluid">
              </div>
              <div class="col-md-9">
                <h5>Anna Evans</h5>
                <div class="d-flex">
                  <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                  <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                  <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                  <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                  <iconify-icon icon="ion:star-half" class="rate pe-1"></iconify-icon>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4">
          <div class="reviews-components border rounded-4 p-5">
            <iconify-icon icon="gridicons:quote" class="quote my-2"></iconify-icon>
            <p>“A pellen tesque pretium feugiat vel mobi sagittis lorem habi tasse cursus ipsum quis nec
              eget facilisis. Quis nibh ut bindum nisl quis placerat proin tortor mattis.”</p>
            <div class="row mt-4">
              <div class="col-md-3">
                <img src="./assets/img/commentor-item3.jpg" alt="image" class="img-fluid">
              </div>
              <div class="col-md-9">
                <h5>Georgiea Millre</h5>
                <div class="d-flex">
                  <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                  <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                  <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                  <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                  <iconify-icon icon="ion:star-half" class="rate pe-1"></iconify-icon>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section> --}}
  
  @endsection
  
  @section('scripts')
  @endsection
  
  {{-- <nav aria-label="Page navigation" class="d-flex justify-content-center mt-5">
    <ul class="pagination align-items-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          Previous
        </a>
      </li>
      <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          Next</a>
      </li>
    </ul>
  </nav> --}}