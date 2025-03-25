@extends('layouts.app')

@section('content')
@section('breadcrumbs')
    <x-breadcrumbs title="Models" :links="[['name' => 'Models', 'url' => '']]" />
@endsection

<div class="post-wrap padding-small">
    <div class="container-fluid padding-side">
        <div class="row">
            <main class="post-list post-card-small">
                <div class="row g-lg-5">
                    @foreach ($dresses as $dress)
                        <div class="col-md-6 col-xl-4 mb-4">
                            <div class="product-item rounded-4">
                                <img src="{{ asset($dress->image) }}" alt="{{ $dress->name }}"
                                    class="img-fluid rounded-4">
                            </div>
                            <div class="product-content">
                                <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                                    <h4 class="display-6 fw-normal">
                                        <a href="#">{{ $dress->name }}</a>
                                    </h4>
                                    <p class="m-0">
                                        <span
                                            class="text-primary fs-4">${{ number_format($dress->price, 2) }}</span>{{ $dress->price_unit }}
                                    </p>
                                </div>
                                <p class="product-paragraph">{{ $dress->short_description }}</p>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="pe-2">Price:</td>
                                            <td class="price">${{ number_format($dress->price, 2) }}
                                                {{ $dress->price_unit }}</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-2">Size:</td>
                                            <td>{{ $dress->size }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>

                
                <!-- Aquí reemplazamos el paginador de la plantilla con el helper de Laravel -->
                {{-- <nav aria-label="Page navigation" class="d-flex justify-content-center mt-5">
                </nav> --}}
                {{$dresses->onEachSide(4)->links('pagination::bootstrap-5') }}

            </main>
        </div>
    </div>
</div>
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

{{-- <div class="row g-lg-5">
      <div class="col-md-6 col-xl-4 mb-4">
          <div class="product-item rounded-4 ">
              <img src="./assets/img/dress1.jpg" alt="img" class="img-fluid rounded-4">
          </div>
          <div class="product-content">
              <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                  <h4 class="display-6 fw-normal"><a href="#">elegant</a></h4>
                  <p class="m-0"><span class="text-primary fs-4">$269</span>/night</p>
              </div>
              <p class="product-paragraph ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Allie
                  Molestiae at illum ipsum similique doloribus.</p>
              <table>
                  <tbody>
                      <tr>
                          <td class="pe-2">Price:</td>
                          <td class="price">299$ /Pernight</td>
                      </tr>
                      <tr>
                          <td class="pe-2">Size:</td>
                          <td>10 ft</td>
                      </tr>
                  </tbody>
              </table>
              <a href="/dress-details">
                  <p class="text-decoration-underline mt-3">Browse More</p>
              </a>
          </div>
      </div>
      <div class="col-md-6 col-xl-4 mb-4">
          <div class="product-item rounded-4 ">
              <img src="./assets/img/dress2.jpg" alt="img" class="img-fluid rounded-4">
          </div>
          <div class="product-content">
              <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                  <h4 class="display-6 fw-normal"><a href="#">Old money</a></h4>
                  <p class="m-0"><span class="text-primary fs-4">$269</span>/Lorem</p>
              </div>
              <p class="product-paragraph ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Allie
                  Molestiae at illum ipsum similique doloribus.</p>
              <table>
                  <tbody>
                      <tr>
                          <td class="pe-2">Price:</td>
                          <td class="price">299$ /Lorem</td>
                      </tr>
                      <tr>
                          <td class="pe-2">Size:</td>
                          <td>10 ft</td>
                      </tr>

                  </tbody>
              </table>
              <a href="/dress-details">
                  <p class="text-decoration-underline mt-3">Browse More</p>
              </a>
          </div>
      </div>
      <div class="col-md-6 col-xl-4 mb-4">
          <div class="product-item rounded-4 ">
              <img src="./assets/img/dress3.jpg" alt="img" class="img-fluid rounded-4">
          </div>
          <div class="product-content">
              <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                  <h4 class="display-6 fw-normal"><a href="#">Dark Academia</a></h4>
                  <p class="m-0"><span class="text-primary fs-4">$269</span>Lorem </p>
              </div>
              <p class="product-paragraph ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Allie
                  Molestiae at illum ipsum similique doloribus.</p>
              <table>
                  <tbody>
                      <tr>
                          <td class="pe-2">Price:</td>
                          <td class="price">299$ /Pernight</td>
                      </tr>
                      <tr>
                          <td class="pe-2">Size:</td>
                          <td>10 ft</td>
                      </tr>

                  </tbody>
              </table>
              <a href="/dress-details">
                  <p class="text-decoration-underline mt-3">Browse More</p>
              </a>
          </div>
      </div>
  </div> --}}
