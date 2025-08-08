@extends('layouts.adminlayout')

@section('content')
<div class="row gy-4">
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Send Cold Email</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.emails.send') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Recipient Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Recipient Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="content_type" class="form-label">Content Type</label>
                        <select class="form-select" name="content_type" id="content_type" required>
                            <option value="">Select Content Type</option>
                            <option value="template">Choose Email Template</option>
                            <option value="message">Write Message</option>
                        </select>
                    </div>

                    <div id="templateFields" style="display: none;">
                        <div class="mb-3">
                            <label for="template_id" class="form-label">Select Template</label>
                            <select name="template_id" id="template_id" class="form-select">
                                <option value="">Select Template</option>
                                @foreach($templates as $template)
                                    <option value="{{ $template->id }}">{{ $template->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="template_variables" class="form-label">Template Variables (JSON)</label>
                            <textarea name="template_variables" id="template_variables" rows="5" class="form-control" placeholder='{"name":"John","offer":"20% Off"}'></textarea>
                        </div>
                    </div>

                    <div id="messageField" style="display: none;">
                        <div class="mb-3">
                            <label for="message" class="form-label">Write Message</label>
                            <textarea name="message" id="message" class="form-control richtext" rows="6"></textarea>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Send Email</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Include Richtext Editor (e.g., Summernote or TinyMCE) -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const contentTypeSelect = document.getElementById('content_type');
        const templateFields = document.getElementById('templateFields');
        const messageField = document.getElementById('messageField');

        contentTypeSelect.addEventListener('change', function () {
            if (this.value === 'template') {
                templateFields.style.display = 'block';
                messageField.style.display = 'none';
            } else if (this.value === 'message') {
                templateFields.style.display = 'none';
                messageField.style.display = 'block';
            } else {
                templateFields.style.display = 'none';
                messageField.style.display = 'none';
            }
        });

        $('.richtext').summernote({
            height: 200,
            placeholder: 'Write your custom email message here...'
        });
    });
</script>
@endpush
