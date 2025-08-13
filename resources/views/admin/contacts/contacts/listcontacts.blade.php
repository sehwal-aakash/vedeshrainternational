@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card basic-data-table">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">List Contacts</h5>
                    <a href="{{ route('admin.contacts.add') }}" class="btn btn-sm btn-primary-100 text-primary-600 rounded-pill px-24 py-4">Add Contact</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                            <thead>
                                <tr>
                                    <th scope="col">S No.</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $contact->full_name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td class="text-center"> 
                                        <a href="{{ route('admin.contacts.view', $contact->id) }}" class="btn btn-sm btn-success-100 text-success-600 rounded-pill px-24 py-4">View</a>
                                        <a href="{{ route('admin.contacts.edit', $contact->id) }}" class="btn btn-sm btn-info-100 text-info-600 rounded-pill px-24 py-4">Edit</a>
                                        <form action="{{ route('admin.contact.delete', $contact->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to contact this service?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-danger-focus text-danger-main cursor-pointer px-24 py-4 rounded-pill fw-medium text-sm border-0">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5">No contacts found.</td>
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
