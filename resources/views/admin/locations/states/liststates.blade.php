@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card basic-data-table">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">List States</h5>
                    {{-- <a href="{{ route('admin.states.add') }}" class="btn btn-sm btn-primary-100 text-primary-600 rounded-pill px-24 py-4">Add State</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                            <thead>
                                <tr>
                                    <th scope="col">S No.</th>
                                    <th scope="col">State Name</th>
                                    <th scope="col">Parent State</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Child States Count</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($states as $state)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $state->name }}</td>
                                        <td>{{ $state->parent ? $state->parent->name : '-' }}</td>
                                        <td>{{ $state->country ? $state->country->name : '-' }}</td>
                                        <td>{{ $state->children->count() }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.states.view', $state->id) }}"
                                                class="btn btn-sm btn-success-100 text-success-600 rounded-pill px-24 py-4">View</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No states found.</td>
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
