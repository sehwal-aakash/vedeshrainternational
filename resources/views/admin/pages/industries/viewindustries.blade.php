@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">View Industry</h5>
                    <a href="{{ route('admin.industries.list') }}" class="btn btn-sm btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</a>
                </div>
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label for="name" class="form-label">Industry Name</label>
                            <input type="text" name="name" class="form-control" id="name" readonly value="{{ $industry->name }}">
                        </div>
                        <div class="col-12">
                            <label for="slug" class="form-label">Service Slug</label>
                            <input type="text" name="slug" class="form-control" id="slug" readonly value="{{ $industry->slug }}">
                        </div>
                        <div class="col-12">
                            <label for="title" class="form-label">Service Title</label>
                            <input type="text" name="title" class="form-control" id="title" readonly value="{{ $industry->title }}">
                        </div>
                        <div class="col-12">
                            <label for="slug" class="form-label">Short Description</label>
                            <textarea name="short_description" class="form-control" id="short_description" rows="3" readonly>{{ $industry->short_description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 text-center">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Industry Icon</h5>
                </div>
                <div class="card-body">
                     <img src="https://vedeshra.com{{ $industry->icon }}" alt="{{ $industry->name }}" style="max-width:50px;">
                </div>
            </div>
        </div>
    </div>
@endsection
