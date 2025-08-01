@extends('layouts.adminlayout')

@section('content')
<div class="row gy-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Edit Service</h5>
                <a href="{{ route('admin.services.list') }}" class="btn btn-sm btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
                    @csrf
                    <div class="row gy-3">
                        <div class="col-12">
                            <label for="name" class="form-label">Service Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $service->name }}" required>
                        </div>
                        <div class="col-12">
                            <label for="slug" class="form-label">Service Slug</label>
                            <input type="text" name="slug" class="form-control" id="slug" value="{{ $service->slug }}" required>
                        </div>
                        <div class="col-12">
                            <label for="title" class="form-label">Service Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ $service->title }}">
                        </div>
                        <div class="col-12">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea name="short_description" class="form-control" id="short_description" rows="3">{{ $service->short_description }}</textarea>
                        </div>
                        <div class="col-12">
                            <label for="icon" class="form-label">Service Icon</label>
                            <input type="text" name="icon" class="form-control" id="icon" value="{{ $service->icon }}">
                        </div>
                        <div class="col-12 mt-60">
                            <button type="submit" class="btn btn-primary-600">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
