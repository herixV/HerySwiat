@extends('layouts.app')

@section('content')

@section('breadcrumbs')
    <x-breadcrumbs title="Gallery" :links="[['name' => 'Gallery', 'url' => '/']]" />
@endsection

<!-- resources/views/gallery/index.blade.php -->

<section id="gallery" class="padding-small">
    <div class="container-fluid padding-side">
        <h4 class="display-6 fw-normal my-3 text-center">Explore Our Fashion Collection</h4>
        <div class="d-flex justify-content-center mb-4">
            <p class="">
                <button class="filter-button px-4 py-2 me-2 mb-3 active" data-filter="*">All</button>
                @foreach ($categories as $category)
                <button class="filter-button px-4 py-2 me-2 mb-3" data-filter=".{{ $category->slug }}">
                    {{ $category->name }}
                </button>
                @endforeach
            </p>
        </div>

        <div class="isotope-container" style="position: relative; height: 732.018px;">
            @foreach ($galleries as $gallery)
            <div class="col-md-3 item {{ $gallery->category->slug }} p-1" style="position: absolute; left: 0px; top: 0px;">
                <a href="{{ asset($gallery->image) }}" title="{{ $gallery->title }}" class="image-link">
                    <img src="{{ asset($gallery->image) }}" class="post-image img-fluid">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- <section id="gallery" class="padding-small">
    <div class="container-fluid padding-side">
        <h4 class="display-6 fw-normal my-3 text-center">Explore Our Fashion Collection</h4>
        <div class="d-flex justify-content-center mb-4">
            <p class="">
                <button class="filter-button px-4 py-2 me-2 mb-3 active" data-filter="*">All</button>
                <button class="filter-button px-4 py-2 me-2 mb-3" data-filter=".runway">Runway</button>
                <button class="filter-button px-4 py-2 me-2 mb-3" data-filter=".atelier">Atelier</button>
                <button class="filter-button px-4 py-2 me-2 mb-3" data-filter=".accessories">Accessories</button>
                <button class="filter-button px-4 py-2 me-2 mb-3" data-filter=".couture">Couture</button>
            </p>
        </div>

        <div class="isotope-container" style="position: relative; height: 732.018px;">
            <div class="col-md-3 item runway p-1" style="position: absolute; left: 0px; top: 0px;">
                <a href="./assets/img/item1.jpg" title="Fashion Show" class="image-link"><img
                        src="./assets/img/item1.jpg" class="post-image img-fluid"></a>
            </div>
            <div class="col-md-3 item atelier p-1" style="position: absolute; left: 318.571px; top: 0px;">
                <a href="./assets/img/item3.jpg" title="Tailoring Process" class="image-link"><img
                        src="./assets/img/item3.jpg" class="post-image img-fluid"></a>
            </div>
            <div class="col-md-3 item runway p-1" style="position: absolute; left: 637.142px; top: 0px;">
                <a href="./assets/img/post4.jpg" title="Designer Collection" class="image-link"><img
                        src="./assets/img/post4.jpg" class="post-image img-fluid"></a>
            </div>
            <div class="col-md-3 item couture p-1" style="position: absolute; left: 955.713px; top: 0px;">
                <a href="./assets/img/post3.jpg" title="Luxury Gown" class="image-link"><img
                        src="./assets/img/post3.jpg" class="post-image img-fluid"></a>
            </div>
            <div class="col-md-3 item atelier p-1" style="position: absolute; left: 318.571px; top: 190.946px;">
                <a href="./assets/img/post1.jpg" title="Sewing & Design" class="image-link"><img
                        src="./assets/img/post1.jpg" class="post-image img-fluid"></a>
            </div>
            <div class="col-md-3 item accessories p-1" style="position: absolute; left: 0px; top: 191.018px;">
                <a href="./assets/img/dress1.jpg" title="Handmade Accessories" class="image-link"><img
                        src="./assets/img/dress1.jpg" class="post-image img-fluid"></a>
            </div>
            <div class="col-md-3 item couture p-1" style="position: absolute; left: 955.713px; top: 337px;">
                <a href="./assets/img/item2.jpg" title="Custom-Made Suit" class="image-link"><img
                        src="./assets/img/item2.jpg" class="post-image img-fluid"></a>
            </div>
            <div class="col-md-3 item runway p-1" style="position: absolute; left: 637.142px; top: 337.304px;">
                <a href="./assets/img/dress2.jpg" title="Fashion Editorial" class="image-link"><img
                        src="./assets/img/dress2.jpg" class="post-image img-fluid"></a>
            </div>
        </div>
    </div>
</section> --}}
@endsection

@section('scripts')
@endsection
