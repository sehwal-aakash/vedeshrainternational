@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card basic-data-table">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">List Email Templates</h5>
                    <a href="{{ route('admin.emailtemplates.add') }}" class="btn btn-sm btn-primary-100 text-primary-600 rounded-pill px-24 py-4">Add Template</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                            <thead>
                                <tr>
                                    <th scope="col">S No.</th>
                                    <th scope="col">Template Name</th>
                                    <th scope="col">Template File Name</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($email_templates as $email_template)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $email_template->name }}</td>
                                    <td>{{ $email_template->file_name }}</td>
                                    <td class="text-center"> 
                                        <a href="{{ route('admin.emailtemplates.view', $email_template->id) }}" class="btn btn-sm btn-success-100 text-success-600 rounded-pill px-24 py-4">View</a>
                                        <a href="{{ route('admin.emailtemplates.edit', $email_template->id) }}" class="btn btn-sm btn-info-100 text-info-600 rounded-pill px-24 py-4">Edit</a>
                                        <form action="{{ route('admin.emailtemplates.delete', $email_template->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this Email Template?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-danger-focus text-danger-main cursor-pointer px-24 py-4 rounded-pill fw-medium text-sm border-0">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">No Email Templates found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- card end -->
        </div>
    </div>
@endsection
