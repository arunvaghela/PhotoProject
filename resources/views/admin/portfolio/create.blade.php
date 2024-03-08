@extends('admin.layouts.app')

@section('content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            @if(session('success'))
                <div>{{ session('success') }}</div>
            @endif

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
                    <h6 class="mb-4">Add Portfolio</h6>
                    <form method="post" action="{{ route('admin.portfolio.store')  }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">First Name <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                       placeholder="First Name" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Last Name <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                       placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="formFile" class="form-label">Slider Image <span style="color: red;">*</span></label>
                                <input class="form-control bg-dark" type="file" name="slider_image" id="slider_image"
                                       required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="formFile" class="form-label">Home Image <span style="color: red;">*</span></label>
                                <input class="form-control bg-dark" type="file" name="home_image" id="home_image"
                                       required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Short Description <span style="color: red;">*</span></label>
                            <textarea class="form-control" placeholder="Short Description" name="short_desc"
                                      id="short_desc" style="height: 500px;"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gallery Images <span style="color: red;">*</span></label>
                            <input class="form-control bg-dark" type="file" name="gallery_image[]" id="gallery_image"
                                   required multiple>
                        </div>

                        <div class="mb-3 col-md-11">
                            <label for="home_Video_link" class="form-label">Home Video Link <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="home_Video_link" name="home_Video_link"
                                   placeholder="Home Video Link" required>
                        </div>

                        <div class="mb-3 col-md-11">
                            <label for="youtube_link" class="form-label">Youtube Links</label>
                            <input type="text" class="form-control" id="youtube_link" name="youtube_link"
                                   placeholder="YouTube Link" >
                        </div>
                        <div class="mb-3 col-md-11">
                            <label for="youtube_link1" class="form-label">Youtube Links 1 </label>
                            <input type="text" class="form-control" id="youtube_link1" name="youtube_link1"
                                   placeholder="YouTube Link 1" >
                        </div>
                        <div class="mb-3 col-md-11">
                            <label for="youtube_link2" class="form-label">Youtube Links 2</label>
                            <input type="text" class="form-control" id="youtube_link2" name="youtube_link2"
                                   placeholder="YouTube Link 2" >
                        </div>
                        <div class="mb-3 col-md-11">
                            <label for="youtube_link3" class="form-label">Youtube Links 3</label>
                            <input type="text" class="form-control" id="youtube_link3" name="youtube_link3"
                                   placeholder="YouTube Link 3" >
                        </div>
                        <div class="mb-3 col-md-11">
                            <label for="youtube_link4" class="form-label">Youtube Links 4</label>
                            <input type="text" class="form-control" id="youtube_link4" name="youtube_link4"
                                   placeholder="YouTube Link 4" >
                        </div>

                        <div class="mb-3 form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="active" id="active" value="Y" checked
                                   required>
                            <label class="form-check-label" for="active">Active</label>
                        </div>
                        <div class=" mb-3 form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="active" id="deactive" value="N" required>
                            <label class="form-check-label" for="deactive">DeActive</label>
                        </div>

                        <div class=" mb-3">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->

@endsection
