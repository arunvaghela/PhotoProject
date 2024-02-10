@extends('admin.layouts.app')

@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Sliders</h6>
                <a href="{{ route('admin.create') }}" class="btn btn-primary">Add Slider</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                    <tr class="text-white">
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($slides as $key => $value)
                        <tr>
                            <td><img src="{{ asset('images/slider/' . $value->img) }}" alt="{{ $value->img }}"
                                     style="max-width: 100px;"></td>
                            <td>{{ $value->is_active == 'Y' ? 'Active' : 'DeActive' }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary"
                                   href="{{ route('admin.update', $value->id) }}">Edit</a>
                                <div style="display: inline-flex">
                                    <form action="{{ route('admin.destroy', $value->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-primary" type="submit"
                                                onclick="return confirm('Are you sure?')">Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No Record Found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
@endsection
