@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Edit Location</h5>
                    <a href="{{ route('admin.locations.list') }}"
                        class="btn rounded-pill btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.locations.edit.post', $location->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row gy-3">
                            <div class="col-12">
                                <label for="page_type" class="form-label">Page Type</label>
                                <select name="page_type" id="page_type" class="form-control" required>
                                    <option value="" disabled>Select Page Type</option>
                                    <option value="service" {{ $location->page_type == 'service' ? 'selected' : '' }}>
                                        Service</option>
                                    <option value="industry" {{ $location->page_type == 'industry' ? 'selected' : '' }}>
                                        Industry</option>
                                    <option value="technology" {{ $location->page_type == 'technology' ? 'selected' : '' }}>
                                        Technology</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="page_id" class="form-label">Page Name</label>
                                <select name="page_id" id="page_id" class="form-control" required>
                                    <option value="{{ $location->page_id }}" selected>
                                        {{ $location->page->name ?? 'Select Page' }}</option>
                                    <!-- Options will be dynamically loaded if page_type changes -->
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="template_name" class="form-label">Template Name</label>
                                <input type="text" name="template_name" class="form-control" id="template_name"
                                    value="{{ $location->template_name }}" required>
                            </div>

                            <div class="col-12">
                                <label for="page_slug" class="form-label">Page Slug</label>
                                <input type="text" name="page_slug" class="form-control" id="page_slug"
                                    value="{{ $location->page_slug }}" required>
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


@section('scripts')
    <script>
        function loadPages(selectedType, selectedId = null) {
            const pageSelect = document.getElementById('page_id');
            pageSelect.innerHTML = '<option value="" selected disabled>Loading...</option>';

            fetch(`/nimdav/pages/locations/getpages/${selectedType}`)
                .then(response => response.json())
                .then(data => {
                    let options = '<option value="" disabled>Select Page</option>';
                    data.forEach(item => {
                        const selected = selectedId == item.id ? 'selected' : '';
                        options += `<option value="${item.id}" ${selected}>${item.name}</option>`;
                    });
                    pageSelect.innerHTML = options;
                })
                .catch(err => {
                    console.error(err);
                    pageSelect.innerHTML = '<option value="" disabled>Error loading pages</option>';
                });
        }

        // Initial load
        document.addEventListener('DOMContentLoaded', function() {
            const currentType = '{{ $location->page_type }}';
            const currentId = '{{ $location->page_id }}';
            if (currentType) loadPages(currentType, currentId);
        });

        // On page_type change
        document.getElementById('page_type').addEventListener('change', function() {
            loadPages(this.value);
        });
    </script>
@endsection
