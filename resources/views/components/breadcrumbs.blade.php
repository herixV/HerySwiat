<!-- Life is available only in the present moment. - Thich Nhat Hanh -->
<section id="slider" data-aos="fade-up" class="aos-init aos-animate">
    <div class="container-fluid padding-side">
        <div class="d-flex rounded-5"
            style="background-image: url({{ $image?? url('assets/img/slider-image1.jpg') }}); background-size: cover; background-repeat: no-repeat; height: 50vh; background-position: center;">
            <div class="row align-items-center m-auto">
                <div class="d-flex flex-wrap flex-column justify-content-center align-items-center">
                    <h2 class="display-1 fw-normal">{{ $title }}</h2>
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ url('/') }}">Home</a>
                        @foreach($links as $link)
                            @if (!$loop->last)
                                <a class="breadcrumb-item" href="{{ url($link['url']) }}">{{ $link['name'] }}</a>
                            @else
                                <span class="breadcrumb-item active" aria-current="page">{{ $link['name'] }}</span>
                            @endif
                        @endforeach
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <div class="container-fluid padding-side">
    <div class="d-flex rounded-5"
        style="background-image: url(./assets/img/slider-image1.jpg); background-size: cover; background-repeat: no-repeat; height: 50vh; background-position: center;">
        <div class="row align-items-center m-auto">
            <div class="d-flex flex-wrap flex-column justify-content-center align-items-center">
                <h2 class="display-1 fw-normal">Gallery</h2>
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="/">Home</a>
                    <span class="breadcrumb-item active" aria-current="page">Gallery</span>
                </nav>
            </div>
        </div>
    </div>
</div> --}}