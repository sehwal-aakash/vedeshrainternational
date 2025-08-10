@extends('layouts.adminlayout')

@section('content')
<div class="row gy-4">
    <div class="col-lg-12 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">View Send Email</h5>
                <a href="{{ route('admin.sendcustommail.list') }}" class="btn btn-sm btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.sendcustommail.add.post') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Recipient Name</label>
                        <input type="text" name="recipient_name" id="name" class="form-control" readonly required value="{{ $sentemail->recipient_name }}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Recipient Email</label>
                        <input type="email" name="recipient_email" id="email" class="form-control" readonly required value="{{ $sentemail->recipient_email }}">
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control" readonly required value="{{ $sentemail->subject }}" >
                    </div>

                    <div class="mb-3">
                        <label for="content_type" class="form-label">Content Type</label>
                        <input type="text" name="content_type" id="content_type" class="form-control" readonly value="{{ $sentemail->content_type }}" required>
                    </div>

                    @if($sentemail->content_type === 'template')
                    <div id="templateFields">
                        <div class="mb-3">
                            <label for="template_id" class="form-label">Selected Template</label>
                            <input type="text" name="template_id" id="template_id" class="form-control" readonly required value="{{ $templateName}}">
                        </div>

                        <div class="mb-3">
                            <label for="template_variables" class="form-label">Template Variables (JSON)</label>
                            <textarea name="template_variables" id="template_variables" rows="5" class="form-control" readonly>{{ $sentemail->template_variables }}</textarea>
                        </div>
                    </div>
                    @endif

                    @if($sentemail->content_type === 'message')
                    <div id="messageField">
                        <div class="mb-3">
                            <label for="message" class="form-label">Write Message</label>
                            <textarea name="message" id="message" class="form-control richtext" rows="6" readonly>{{ $sentemail->message }}</textarea>
                        </div>
                    </div>
                    @endif

                    {{-- <div class="text-end">
                        <button type="submit" class="btn btn-primary">Send Email</button>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
</div>
@endsection