@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Add Service</h5>
                    <a href="/nimdav/pages/services/listservices"><span class="btn btn rounded-pill btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</span></a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.services.add.post') }}" method="POST">
                    @csrf
                    <div class="row gy-3">
                                <div class="col-12">
                                    <label for="name" class="form-label">Service Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="col-12">
                                    <label for="slug" class="form-label">Service Slug</label>
                                    <input type="text" name="slug" class="form-control" id="slug" required>
                                </div>
                                <div class="col-12">
                                    <label for="title" class="form-label">Service Title</label>
                                    <input type="text" name="title" class="form-control" id="title">
                                </div>
                                <div class="col-12">
                                    <label for="short_description" class="form-label">Short Description</label>
                                    <textarea name="short_description" class="form-control" id="short_description" rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="icon" class="form-label">Service Icon</label>
                                    <input type="text" name="icon" class="form-control" id="icon" required>
                                </div>
                                <div class="col-12 mt-60">
                                    <button type="submit" class="btn btn-primary-600">Submit</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection