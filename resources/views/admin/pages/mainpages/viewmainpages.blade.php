@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">View Main Page</h5>
                    <a href="{{ route('admin.mainpages.list') }}" class="btn btn-sm btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</a>
                </div>
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label for="name" class="form-label">Main Page Name</label>
                            <input type="text" name="name" class="form-control" id="name" readonly value="{{ $mainpage->name }}">
                        </div>
                        <div class="col-12">
                            <label for="slug" class="form-label">Main Page Slug</label>
                            <input type="text" name="slug" class="form-control" id="slug" readonly value="{{ $mainpage->slug }}">
                        </div>
                        <div class="col-12">
                            <label for="title" class="form-label">Main Page Title</label>
                            <input type="text" name="title" class="form-control" id="title" readonly value="{{ $mainpage->title }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
