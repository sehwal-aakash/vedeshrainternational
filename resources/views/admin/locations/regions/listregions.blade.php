@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card basic-data-table">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">List Regions</h5>
                    {{-- <a href="{{ route('admin.cities.add') }}" class="btn btn-sm btn-primary-100 text-primary-600 rounded-pill px-24 py-4">Add Service</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                            <thead>
                                <tr>
                                    <th scope="col">S No.</th>
                                    <th scope="col">Region Name</th>
                                    <th scope="col">Sub Regions</th>
                                    <th scope="col">Countries</th>
                                    {{-- <th scope="col">Service Slug</th> --}}
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($regions as $region)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $region->name }}</td>
                                        <td>{{ $region->subRegions->count() }}</td>
                                        <td>{{ $region->countries->count() }}</td>
                                        {{-- <td>{{ $city->slug }}</td> --}}
                                        <td class="text-center">
                                            <a href="{{ route('admin.regions.view', $region->id) }}"
                                                class="btn btn-sm btn-success-100 text-success-600 rounded-pill px-24 py-4">View</a>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">No regions found.</td>
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
