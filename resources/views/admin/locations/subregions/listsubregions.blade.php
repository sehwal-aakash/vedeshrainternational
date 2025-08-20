@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card basic-data-table">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">List SubRegions</h5>
                    {{-- <a href="{{ route('admin.cities.add') }}" class="btn btn-sm btn-primary-100 text-primary-600 rounded-pill px-24 py-4">Add Service</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                            <thead>
                                <tr>
                                    <th scope="col">S No.</th>
                                    <th scope="col">Sub Region Name</th>
                                    <th scope="col">Region Name</th>
                                    <th scope="col">No. of Countries</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($subregions as $subregion)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $subregion->name }}</td>
                                        <td>{{ $subregion->region->name ?? 'N/A' }}</td>
                                        <td>{{ $subregion->countries->count() }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.subregions.view', $subregion->id) }}"
                                                class="btn btn-sm btn-success-100 text-success-600 rounded-pill px-24 py-4">View</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No subregions found.</td>
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
