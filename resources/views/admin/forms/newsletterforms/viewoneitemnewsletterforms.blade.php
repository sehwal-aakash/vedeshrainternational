@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">View Newsletter Form</h5>
                    <a href="{{ route('admin.forms.newsletter.list') }}" class="btn btn-sm btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</a>
                </div>
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" readonly value="{{ $entry->newsletterforminput }}">
                        </div>
                        <div class="col-12">
                            <label for="pageurl" class="form-label">Page URL</label>
                            <input type="text" name="pageurl" class="form-control" id="pageurl" readonly value="{{ $entry->pageurl }}">
                        </div>
                        <div class="col-12">
                            <label for="ipaddress" class="form-label">IP Address</label>
                            <input type="text" name="ipaddress" class="form-control" id="ipaddress" readonly value="{{ $entry->ip_address }}">
                        </div>
                        <div class="col-12">
                            <label for="ipaddresscountry" class="form-label">Country</label>
                            <input type="text" name="ipaddresscountry" class="form-control" id="ipaddresscountry" readonly value="{{ $ipcountry }}">
                        </div>
                        <div class="col-12">
                            <label for="ipaddresscity" class="form-label">City</label>
                            <input type="text" name="ipaddresscity" class="form-control" id="ipaddresscity" readonly value="{{ $ipcity }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
