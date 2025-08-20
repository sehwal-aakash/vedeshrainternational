@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card basic-data-table">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">List Cities</h5>
                    {{-- <a href="{{ route('admin.cities.add') }}" class="btn btn-sm btn-primary-100 text-primary-600 rounded-pill px-24 py-4">Add Service</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table bordered-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">S No.</th>
                                    <th scope="col">City Name</th>
                                    <th scope="col">State Name</th>
                                    <th scope="col">Country Name</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($cities as $index => $city)
                                    <tr>
                                        {{-- Correct serial number across pages --}}
                                        <td>{{ ($cities->currentPage() - 1) * $cities->perPage() + $loop->iteration }}</td>
                                        <td>{{ $city->name }}</td>
                                        <td>{{ $city->state->name ?? '-' }}</td>
                                        <td>{{ $city->country->name ?? '-' }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.cities.view', $city->id) }}"
                                                class="btn btn-sm btn-success-100 text-success-600 rounded-pill px-24 py-4">View</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No cities found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- Laravel pagination links --}}
                    <div class="mt-3">
                        {{ $cities->links() }}
                    </div>
                </div>
            </div><!-- card end -->
        </div>
    </div>
@endsection
