@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">View State</h5>
                    <a href="{{ route('admin.states.list') }}"
                        class="btn btn-sm btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</a>
                </div>
                <div class="card-body">
                    <div class="row gy-3">

                        {{-- Primary Info --}}
                        <div class="col-12 col-md-6">
                            <label for="name" class="form-label">State Name</label>
                            <input type="text" class="form-control" id="name" readonly value="{{ $state->name }}">
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="country" class="form-label">Country Name</label>
                            <input type="text" class="form-control" id="country" readonly
                                value="{{ $state->country->name ?? 'N/A' }}">
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="parent" class="form-label">Parent State</label>
                            <input type="text" class="form-control" id="parent" readonly
                                value="{{ $state->parent->name ?? 'N/A' }}">
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="children_count" class="form-label">No. of Child States</label>
                            <input type="text" class="form-control" id="children_count" readonly
                                value="{{ $state->children->count() }}">
                        </div>

                        {{-- Codes & Type --}}
                        <div class="col-12 col-md-4">
                            <label for="iso2" class="form-label">ISO2</label>
                            <input type="text" class="form-control" id="iso2" readonly
                                value="{{ $state->iso2 ?? 'N/A' }}">
                        </div>

                        <div class="col-12 col-md-4">
                            <label for="iso3166_2" class="form-label">ISO3166-2</label>
                            <input type="text" class="form-control" id="iso3166_2" readonly
                                value="{{ $state->iso3166_2 ?? 'N/A' }}">
                        </div>

                        <div class="col-12 col-md-4">
                            <label for="fips_code" class="form-label">FIPS Code</label>
                            <input type="text" class="form-control" id="fips_code" readonly
                                value="{{ $state->fips_code ?? 'N/A' }}">
                        </div>

                        <div class="col-12 col-md-4">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" readonly
                                value="{{ $state->type ?? 'N/A' }}">
                        </div>

                        <div class="col-12 col-md-4">
                            <label for="level" class="form-label">Level</label>
                            <input type="text" class="form-control" id="level" readonly
                                value="{{ $state->level ?? 'N/A' }}">
                        </div>

                        <div class="col-12 col-md-4">
                            <label for="native" class="form-label">Native Name</label>
                            <input type="text" class="form-control" id="native" readonly
                                value="{{ $state->native ?? 'N/A' }}">
                        </div>

                        {{-- Location & Wiki --}}
                        <div class="col-12 col-md-4">
                            <label for="latitude" class="form-label">Latitude</label>
                            <input type="text" class="form-control" id="latitude" readonly
                                value="{{ $state->latitude ?? 'N/A' }}">
                        </div>

                        <div class="col-12 col-md-4">
                            <label for="longitude" class="form-label">Longitude</label>
                            <input type="text" class="form-control" id="longitude" readonly
                                value="{{ $state->longitude ?? 'N/A' }}">
                        </div>

                        <div class="col-12 col-md-4">
                            <label for="timezone" class="form-label">Timezone</label>
                            <input type="text" class="form-control" id="timezone" readonly
                                value="{{ $state->timezone ?? 'N/A' }}">
                        </div>

                        <div class="col-12 col-md-4">
                            <label for="wikiDataId" class="form-label">WikiData ID</label>
                            <input type="text" class="form-control" id="wikiDataId" readonly
                                value="{{ $state->wikiDataId ?? 'N/A' }}">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- Flag Display
        <div class="col-lg-2 text-center">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Flag</h5>
                </div>
                <div class="card-body">
                    @if ($state->flag)
                        <img src="{{ asset('storage/flags/' . $state->flag) }}" alt="{{ $state->name }}"
                            style="max-width:70px;">
                    @else
                        <span class="text-muted">No Flag</span>
                    @endif
                </div>
            </div>
        </div> --}}
    </div>
@endsection
