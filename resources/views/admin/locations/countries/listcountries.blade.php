@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card basic-data-table">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">List Countries</h5>
                    {{-- Example: Uncomment if you want an Add Country button --}}
                    {{-- <a href="{{ route('admin.countries.create') }}" class="btn btn-sm btn-primary-100 text-primary-600 rounded-pill px-24 py-4">Add Country</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table bordered-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">S No.</th>
                                    <th scope="col">Country Name</th>
                                    <th scope="col">ISO2</th>
                                    <th scope="col">ISO3</th>
                                    <th scope="col">Region</th>
                                    <th scope="col">Subregion</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($countries as $country)
                                    <tr>
                                        <td>{{ $loop->iteration + ($countries->firstItem() - 1) }}</td>
                                        <td>{{ $country->name }}</td>
                                        <td>{{ $country->iso2 }}</td>
                                        <td>{{ $country->iso3 }}</td>
                                        <td>{{ $country->region ?? '-' }}</td>
                                        <td>{{ $country->subregion ?? '-' }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.countries.view', $country->id) }}"
                                                class="btn btn-sm btn-success-100 text-success-600 rounded-pill px-24 py-4">View</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No countries found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {{-- Pagination Links --}}
                        <div class="mt-3">
                            {{ $countries->links() }}
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
        </div>
    </div>
@endsection
