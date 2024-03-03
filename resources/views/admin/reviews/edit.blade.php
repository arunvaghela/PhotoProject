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
                    <h6 class="mb-4">Edit Review</h6>
                    <form method="post" action="{{ route('admin.reviews.update', $reviews->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $reviews->name }}"
                                   placeholder="Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="desc" class="form-label">Description <span style="color: red;">*</span></label>
                            <textarea class="form-control" placeholder="Description" name="desc"
                                      id="desc" style="height: 500px;">{{ $reviews->desc }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="rate" class="form-label">Rating <span style="color: red;">*</span></label>
                            <input type="number" class="form-control" id="rate" name="rate" value="{{ $reviews->rate }}"
                                   placeholder="Rating" max="5" min="1" required>
                        </div>
                        <div class="mb-3 form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="active" id="active" value="Y" @if ($reviews->is_active == 'Y')checked @endif>
                            <label class="form-check-label" for="active">Active</label>
                        </div>
                        <div class=" mb-3 form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="active" id="deactive" value="N" @if ($reviews->is_active == 'N')checked @endif>
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
