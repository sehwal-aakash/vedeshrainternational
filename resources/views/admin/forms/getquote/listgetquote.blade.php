@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card basic-data-table">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">List Quote Form</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                            <thead>
                                <tr>
                                    <th scope="col">S No.</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Page URL</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($entries as $entry)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $entry->firstname }}</td>
                                    <td>{{ $entry->lastname }}</td>
                                    <td>{{ $entry->pageurl }}</td>
                                    <td class="text-center"> 
                                        <a href="{{ route('admin.forms.getquote.viewoneitem', $entry->id) }}" class="btn btn-sm btn-success-100 text-success-600 rounded-pill px-24 py-4">View</a>
                                        <form action="{{ route('admin.forms.getquote.delete', $entry->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this entry?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-danger-focus text-danger-main cursor-pointer px-24 py-4 rounded-pill fw-medium text-sm border-0">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">No Entry found.</td>
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
