@extends('admin.app')
@push('css')

    <link rel="stylesheet" href="{{url('ckeditor5style.css')}}">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.3.0/ckeditor5.css" crossorigin>
@endpush

@section('breadcrumbs')
    <x-breadcrumbs title="Service-Edit" :links="[['name' => 'Service-List', 'url' => 'serviceList'],['name' => 'Service-edit', 'url' => 'services']]" />
@endsection

@section('content')
    <div class="service-wrap padding-small">
        <div class="container-fluid padding-side">
            <div class="row g-5">
                <main class="service-grid col-md-9">
                    <form action="{{route('serviceUpdate', ['id'=>$service->id])}}" class="form-group flex-wrap p-4 border rounded-4" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <h2 class=" fs-2  my-3 mb-5">Service New</h2>
                        <div class="col-lg-12 my-4">
                          <label for="exampleInputEmail1" class="form-label ">Name</label>
                          <input type="text" id="name" name="name" class="form-control ps-3" value="{{ $service->name }}">
                        </div>
                        <div class="col-lg-12 my-4">
                          <label for="exampleInputEmail1" class="form-label ">Slug</label>
                          <input type="text" id="slug" name="slug" class="form-control ps-3" value="{{ $service->slug }}">
                        </div>
                        <div class="col-lg-12 my-4">
                            <label for="shortDescription" class="form-label ">Short Description</label>
                            <textarea id="shortDescription" placeholder="Write Your Short Description Here" class="form-control ps-3 " rows="4" name="short_description">
                                {{ $service->short_description }}
                            </textarea>
                        </div>
                        <div class="col-lg-12 my-4">
                            <label for="description" class="form-label ">Description</label>
                            <textarea id="editor" placeholder="Write Your Description Here" class="form-control ps-3" rows="8" name="description">
                                {{ $service->description }}
                            </textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 my-4">
                                <label class="d-flex align-items-center" from="is_featured">
                                    <input type="checkbox" class="checked-box me-2" name="is_featured" {{ $service->is_featured ? 'checked' : '' }} id="is_featured">
                                    <span class="label-body">Is Featured</span>
                                </label>
                            </div>
                            <div class="col-lg-6 my-4">
                                <label class="form-label ">Service Image</label>
                                <div class="image-upload-container">
                                    <div class="image-preview" id="imagePreview">
                                       
                                        <img src="{{ $service->image ? asset($service->image) : '' }}" 
                                        alt="Preview" 
                                        class="image-preview__image" 
                                        style="{{ $service->image ? 'display:block;' : 'display:none;' }}">
                                        
                                        <span class="image-preview__default-text" 
                                            style="{{ $service->image ? 'display:none;' : 'display:block;' }}">
                                            No image selected
                                        </span>
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
                            @foreach ($services as $service)    
                            <div class="sidebar-post-item d-flex justify-content-center">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <div class="image-holder">
                                            <a href="#">
                                                <img src="{{ $service->image }}" alt="blog" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="sidebar-post-content">
                                            <h5 class="post-title fs-5">
                                                <a href="#">{{ $service->name }}</a>
                                            </h5>
                                            <p class="m-0 lh-base" style="font-size: 14px;">
                                                {{ Str::limit($service->short_description, 70, '...') }}
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
