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
                    <h6 class="mb-4">Add Slider</h6>
                    <form method="post" action="{{ route('admin.store')  }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control bg-dark" type="file" name="image" id="formFile" required>
                        </div>
                        <div class="mb-3 form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="active" id="active" value="Y" checked required>
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
