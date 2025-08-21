@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Add Location</h5>
                    <a href="{{ route('admin.locations.list') }}"
                        class="btn rounded-pill btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.locations.add.post') }}" method="POST">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-12">
                                <label for="page_type" class="form-label">Page Type</label>
                                <select name="page_type" id="page_type" class="form-control" required>
                                    <option value="" selected disabled>Select Page Type</option>
                                    <option value="service">Service</option>
                                    <option value="industry">Industry</option>
                                    <option value="technology">Technology</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="page_id" class="form-label">Page Name</label>
                                <select name="page_id" id="page_id" class="form-control" required>
                                    <option value="" selected disabled>Select Page</option>
                                    <!-- Options will be dynamically loaded based on page_type -->
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="template_name" class="form-label">Template Name</label>
                                <input type="text" name="template_name" class="form-control" id="template_name" required>
                            </div>

                            <div class="col-12">
                                <label for="page_slug" class="form-label">Page Slug</label>
                                <input type="text" name="page_slug" class="form-control" id="page_slug" required>
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

@section('scripts')
    <script>
        document.getElementById('page_type').addEventListener('change', function() {
            let pageType = this.value;
            let pageSelect = document.getElementById('page_id');
            pageSelect.innerHTML = '<option value="" selected disabled>Loading...</option>';

            fetch(`/nimdav/pages/locations/getpages/${pageType}`)
                .then(response => response.json())
                .then(data => {
                    let options = '<option value="" selected disabled>Select Page</option>';
                    data.forEach(item => {
                        options += `<option value="${item.id}">${item.name}</option>`;
                    });
                    pageSelect.innerHTML = options;
                })
                .catch(err => {
                    console.error(err);
                    pageSelect.innerHTML = '<option value="" selected disabled>Error loading pages</option>';
                });
        });
    </script>
@endsection
