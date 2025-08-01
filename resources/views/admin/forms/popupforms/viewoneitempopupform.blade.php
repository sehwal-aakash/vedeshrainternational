@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">View Popup Form</h5>
                    <a href="{{ route('admin.forms.popup.list') }}" class="btn btn-sm btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</a>
                </div>
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" readonly value="{{ $entry->name }}">
                        </div>
                        <div class="col-12">
                            <label for="emailaddress" class="form-label">Email Address</label>
                            <input type="text" name="emailaddress" class="form-control" id="emailaddress" readonly value="{{ $entry->emailaddress }}">
                        </div>
                        <div class="col-12">
                            <label for="mobilenumber" class="form-label">Mobile Number</label>
                            <input type="text" name="mobilenumber" class="form-control" id="mobilenumber" readonly value="{{ $entry->mobilenumber }}">
                        </div>
                        <div class="col-12">
                            <label for="companybusiness" class="form-label">Company / Business</label>
                            <input type="text" name="companybusiness" class="form-control" id="companybusiness" readonly value="{{ $entry->companybusiness }}">
                        </div>
                        <div class="col-12">
                            <label for="selectservices" class="form-label">Selected Services</label>
                            <input type="text" name="selectservices" class="form-control" id="selectservices" readonly value="{{ $entry->selectservices }}">
                        </div>
                        <div class="col-12">
                            <label for="otherservices" class="form-label">Selected Services (Other)</label>
                            <input type="text" name="otherservices" class="form-control" id="otherservices" readonly value="{{ $entry->otherservices }}">
                        </div>
                        <div class="col-12">
                            <label for="pageurl" class="form-label">Page URL</label>
                            <input type="text" name="pageurl" class="form-control" id="pageurl" readonly value="{{ $entry->pageurl }}">
                        </div>
                        <div class="col-12">
                            <label for="ipaddress" class="form-label">IP Address</label>
                            <input type="text" name="ipaddress" class="form-control" id="ipaddress" readonly value="{{ $entry->ip_address }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
