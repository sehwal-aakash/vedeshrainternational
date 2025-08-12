@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Edit Email Templates</h5>
                    <a href="{{ route('admin.emailtemplates.list') }}"><span class="btn btn rounded-pill btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</span></a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.emailtemplates.update', $email_template->id) }}" method="POST">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-12">
                                <label for="name" class="form-label">Template Name</label>
                                <input type="text" name="name" class="form-control" id="name" required value="{{ $email_template->name}}">
                            </div>
                            <div class="col-12">
                                <label for="file_name" class="form-label">File Name</label>
                                <input type="text" name="file_name" class="form-control" id="file_name" required value="{{ $email_template->file_name }}">
                            </div>
                            <div class="col-12">
                                <label for="required_variables" class="form-label">Required Variables</label>
                                <textarea name="required_variables" class="form-control" id="required_variables" rows="3">{{ $email_template->required_variables }}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" name="subject" class="form-control" id="subject" required value="{{ $email_template->subject }}">
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