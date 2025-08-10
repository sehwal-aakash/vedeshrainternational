@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card basic-data-table">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">List Sent Emails</h5>
                    <a href="{{ route('admin.sendcustommail.send') }}" class="btn btn-sm btn-primary-100 text-primary-600 rounded-pill px-24 py-4">Send Email</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                            <thead>
                                <tr>
                                    <th scope="col">S No.</th>
                                    <th scope="col">Recipient Name</th>
                                    <th scope="col">Recipient Email</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($sentemails as $sentemail)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $sentemail->recipient_name }}</td>
                                    <td>{{ $sentemail->recipient_email }}</td>
                                    <td class="text-center"> 
                                        <a href="{{ route('admin.sendcustommail.view', $sentemail->id) }}" class="btn btn-sm btn-success-100 text-success-600 rounded-pill px-24 py-4">View</a>
                                        <form action="{{ route('admin.sendcustommail.delete', $sentemail->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this sent email?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-danger-focus text-danger-main cursor-pointer px-24 py-4 rounded-pill fw-medium text-sm border-0">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">No Sent Emails found.</td>
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
