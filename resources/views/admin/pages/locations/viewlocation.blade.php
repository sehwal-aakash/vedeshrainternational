@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">View Location</h5>
                    <a href="{{ route('admin.locations.list') }}"
                        class="btn rounded-pill btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</a>
                </div>
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label class="form-label">Page Type</label>
                            <input type="text" class="form-control" value="{{ ucfirst($location->page_type) }}" readonly>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Page Name</label>
                            <input type="text" class="form-control" value="{{ $location->page->name ?? '' }}" readonly>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Template Name</label>
                            <input type="text" class="form-control" value="{{ $location->template_name }}" readonly>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Page Slug</label>
                            <input type="text" class="form-control" value="{{ $location->page_slug }}" readonly>
                        </div>

                        {{-- <div class="col-12 mt-60">
                            <a href="{{ route('admin.locations.edit', $location->id) }}" class="btn btn-primary-600">Edit
                                Location</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
