@extends('admin.app')
@push('css')

    <link rel="stylesheet" href="{{url('ckeditor5style.css')}}">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.3.0/ckeditor5.css" crossorigin>
@endpush

@section('breadcrumbs')
    <x-breadcrumbs title="Model-Create" :links="[['name' => 'Model-List', 'url' => 'modelList'],['name' => 'Model-Create', 'url' => '']]" />
@endsection

@section('content')
    <div class="service-wrap padding-small">
        
        <div class="container-fluid padding-side">
            <div class="row g-5">
                <main class="service-grid col-md-9">
                    @if ($errors->any())            
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger"> <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>
                        {{ $error }}   
                    </div>
                    @endforeach           
                    @endif
                    <form action="{{route('modelStore')}}" class="form-group flex-wrap p-4 border rounded-4" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h2 class=" fs-2  my-3 mb-5">Model New</h2>
                        <div class="col-lg-12 my-4">
                          <label for="na,e" class="form-label ">Name</label>
                          <input type="text" id="name" name="name" class="form-control ps-3">
                        </div>
                        <div class="col-lg-12 my-4">
                          <label for="slug" class="form-label ">Slug</label>
                          <input type="text" id="slug" name="slug" class="form-control ps-3">
                        </div>
                        <div class="row">
                            <div class="col-lg-6 my-4">
                                <label for="slug" class="form-label ">Price</label>
                                <input type="Number" id="price" name="price" class="form-control ps-3">
                            </div>
                            <div class="col-lg-6 my-4">
                                <label for="slug" class="form-label ">Size</label>
                                <input type="text" id="size" name="size" class="form-control ps-3">
                            </div>
                        </div>
                        <div class="col-lg-12 my-4">
                            <label for="shortDescription" class="form-label ">Short Description</label>
                            <textarea id="shortDescription" placeholder="Write Your Short Description Here" class="form-control ps-3 " rows="4" name="short_description"></textarea>
                        </div>
                        <div class="col-lg-12 my-4">
                            <label for="description" class="form-label ">Description</label>
                            <textarea id="editor" placeholder="Write Your Description Here" class="form-control ps-3" rows="8" name="description"></textarea>
                        </div>
                        <div class="col-lg-12 my-4">
                            <label class="form-label ">Dress Image</label>
                            <div class="image-upload-container">
                                <div class="image-preview" id="imagePreview">
                                    <img src="" alt="Preview" class="image-preview__image">
                                    <span class="image-preview__default-text">No image selected</span>
                                </div>
                                <div class="mt-3 d-flex gap-3">
                                    <label for="imageUpload" class="btn btn-smaller cursor-pointer">
                                        <span>Choose Image
                                            <svg width="18" height="18">
                                                <use xlink:href="#upload-solid"></use>
                                            </svg>
                                        </span>

                                    </label>
                                    <button type="button" id="removeImage" class="btn btn-smaller bg-gray text-dark">
                                        <span>Remove
                                            <svg width="18" height="18">
                                                <use xlink:href="#trash"></use>
                                            </svg>
                                        </span>
                                    </button>
                                    <input type="file" id="imageUpload" name="image" accept="image/*" class="d-none">
                                </div>
                            </div>
                        </div>
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-arrow btn-primary btn-dinamic">
                                <span>Save
                                    <svg width="18" height="18">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </form>
                    <div class="row">
                        <article class="post-item">
                        </article>
                    </div>
                </main>
                <aside class="col-md-3">
                    <div class="post-sidebar">
                        <div class="widget sidebar-recent-post mb-5">
                            <h4 class="widget-title fw-normal border-bottom pb-3 mb-3">Recent Services</h4>
                            @foreach ($dresses as $dress)    
                            <div class="sidebar-post-item d-flex justify-content-center">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <div class="image-holder">
                                            <a href="#">
                                                <img src="{{ $dress->image }}" alt="blog" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="sidebar-post-content">
                                            <h5 class="post-title fs-5">
                                                <a href="#">{{ $dress->name }}</a>
                                            </h5>
                                            <p class="m-0 lh-base" style="font-size: 14px;">
                                                {{ Str::limit($dress->short_description, 70, '...') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@push('js')
<script src="https://cdn.ckeditor.com/ckeditor5/44.3.0/ckeditor5.umd.js" crossorigin></script>
    <script src="{{ asset('assets/js/image-upload.js') }}"></script>
    <script src="{{ asset('assets/js/ckeditor5main.js') }}"></script>
@endpush
@endsection
