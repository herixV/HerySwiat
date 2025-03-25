@extends('layouts.app')


@section('breadcrumbs')
<section id="slider" data-aos="fade-up" class="aos-init aos-animate">
  <div class="container-fluid padding-side">
    <div class="d-flex rounded-5" style="background-image: url(./assets/img/slider-image1.jpg); background-size: cover; background-repeat: no-repeat; height: 50vh; background-position: center;">
      <div class="row align-items-center m-auto">
        <div class="d-flex flex-wrap flex-column justify-content-center align-items-center">
          <h2 class="display-1 fw-normal">Blog</h2>
          <nav class="breadcrumb">
            <a class="breadcrumb-item" href="/">Home</a>
            <span class="breadcrumb-item active" aria-current="page">Blog</span>
          </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection
    
@section('content')
{{-- <div class="post-wrap padding-small">
    <div class="container-fluid padding-side">
      <div class="row">
        <main class="post-list post-card-small">
          <div class="row">
            @foreach($posts as $post)
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="blog-post position-relative overflow-hidden rounded-4">
                <img src="{{$post->image}}" class="blog-img img-fluid rounded-4" alt="img">
                <div class="position-absolute bottom-0 p-5">
                  <a href="#"><span class="bg-secondary text-body m-0 px-2 py-1 rounded-2 fs-6">{{$post->tag}}</span></a>
                  <h4 class="display-6 fw-normal mt-2"><a href="blog-single">{{ $post->title }}</a></h4>
                  <p class="m-0 align-items-center"><svg width="19" height="19">
                      <use xlink:href="#clock"></use>
                    </svg> {{ $post->created_at }}</p>
                </div>
              </div>
            </div>
          @endforeach
            
          
          <nav aria-label="Page navigation" class="d-flex justify-content-center mt-5">
            <ul class="pagination align-items-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous"> Previous </a>
              </li>
              <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next"> Next</a>
              </li>
            </ul>
          </nav>
        </main>
      </div>
    </div>
</div> --}}
<div class="post-wrap padding-small">
  <div class="container-fluid padding-side">
      <div class="row">
          <main class="post-list post-card-small">
              <div class="row">
                  @foreach($posts as $post)
                  <div class="col-md-6 col-lg-4 mb-4">
                      <div class="blog-post position-relative overflow-hidden rounded-4">
                          <!-- Imagen del Post -->
                          <img src="{{ asset($post->image) }}" class="blog-img img-fluid rounded-4" alt="{{ $post->title }}">

                          <!-- Contenido del Post -->
                          <div class="position-absolute bottom-0 p-5">
                              <!-- Categoría del Post -->
                              {{-- <a href="">
                                  <span class="bg-secondary text-body m-0 px-2 py-1 rounded-2 fs-6">
                                      {{ $post->tag }}
                                  </span>
                              </a> --}}

                              <!-- Título del Post -->
                              {{-- <h4 class="display-6 fw-normal mt-2"><a href="{{ url('/blog-single') }}">{{ $post->title }}</a></h4> --}}
                              <h4 class="display-6 fw-normal mt-2">
                                {{-- {{ route('service-details', ['id'=>$service->id, 'slug'=>Str::slug($service->slug)]) }} --}}
                                <a href="{{ route('blog-single', ['id'=>$post->id, 'slug'=>Str::Slug($post->slug)]) }}">{{ $post->title }}</a>
                            </h4>

                              <!-- Fecha del Post -->
                              <p class="m-0 align-items-center">
                                  <svg width="19" height="19">
                                      <use xlink:href="#clock"></use>
                                  </svg>
                                  {{ $post->created_at->format('d M, Y') }}
                              </p>
                          </div>
                      </div>
                  </div>
                  @endforeach
              </div>

              <!-- Paginación Dinámica -->
              <nav aria-label="Page navigation" class="d-flex justify-content-center mt-5">
                  <ul class="pagination align-items-center">
                      <!-- Botón "Anterior" -->
                      @if ($posts->onFirstPage())
                      <li class="page-item disabled">
                          <span class="page-link">Previous</span>
                      </li>
                      @else
                      <li class="page-item">
                          <a class="page-link" href="{{ $posts->previousPageUrl() }}" aria-label="Previous">Previous</a>
                      </li>
                      @endif

                      <!-- Números de Página -->
                      @for ($i = 1; $i <= $posts->lastPage(); $i++)
                      <li class="page-item {{ $posts->currentPage() == $i ? 'active' : '' }}">
                          <a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a>
                      </li>
                      @endfor

                      <!-- Botón "Siguiente" -->
                      @if ($posts->hasMorePages())
                      <li class="page-item">
                          <a class="page-link" href="{{ $posts->nextPageUrl() }}" aria-label="Next">Next</a>
                      </li>
                      @else
                      <li class="page-item disabled">
                          <span class="page-link">Next</span>
                      </li>
                      @endif
                  </ul>
              </nav>
          </main>
      </div>
  </div>
</div>
@endsection

@section('scripts')
@endsection