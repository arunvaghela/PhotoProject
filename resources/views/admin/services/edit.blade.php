@extends('admin.layouts.app')

@section('content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <i class="fa fa-exclamation-circle me-2"></i>{{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif
            <div class="col-sm-12 col-xl-9">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Edit Service</h6>
                    <form method="post" action="{{ route('admin.services.update', $services->id) }}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Service Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Service Name"
                                   value="{{ $services->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="slideformFile" class="form-label">Slider Image</label>
                            <input class="form-control bg-dark" type="file" name="slider_image" id="slideformFile">
                            <img src="{{ asset('images/service/' . $services->slider_img) }}"
                                 alt="{{ $services->slider_img }}" style="max-width: 100px;">
                        </div>
                        <div class="mb-3">
                            <label for="descformFile" class="form-label">Description Image</label>
                            <input class="form-control bg-dark" type="file" name="desc_image" id="descformFile">
                            <img src="{{ asset('images/service/' . $services->desc_img) }}"
                                 alt="{{ $services->desc_img }}" style="max-width: 100px;">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Short Description</label>
                            <textarea class="form-control" placeholder="Short Description" name="short_desc"
                                      id="shortfloatingTextarea"
                                      style="height: 150px;">{{ $services->short_desc }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Long Description</label>
                            <textarea class="form-control" placeholder="Long Description" name="long_desc"
                                      id="longfloatingTextarea"
                                      style="height: 150px;">{{ $services->long_desc }}</textarea>
                        </div>
                        <div class="mb-3 form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="active" id="active" value="Y"
                                   @if ($services->is_active == 'Y')checked @endif required>
                            <label class="form-check-label" for="active">Active</label>
                        </div>
                        <div class=" mb-3 form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="active" id="deactive" value="N"
                                   @if ($services->is_active == 'N')checked @endif required>
                            <label class="form-check-label" for="deactive">DeActive</label>
                        </div>
                        <div class=" mb-3">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->

@endsection
