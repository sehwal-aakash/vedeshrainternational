@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">View City</h5>
                    <a href="{{ route('admin.cities.list') }}"
                        class="btn btn-sm btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</a>
                </div>
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label for="name" class="form-label">City Name</label>
                            <input type="text" name="name" class="form-control" id="name" readonly
                                value="{{ $city->name }}">
                        </div>
                        <div class="col-12">
                            <label for="state" class="form-label">State Name</label>
                            <input type="text" name="state" class="form-control" id="state" readonly
                                value="{{ $city->state->name ?? '' }}">
                        </div>
                        <div class="col-12">
                            <label for="state_code" class="form-label">State Code</label>
                            <input type="text" name="state_code" class="form-control" id="state_code" readonly
                                value="{{ $city->state_code }}">
                        </div>
                        <div class="col-12">
                            <label for="country" class="form-label">Country Name</label>
                            <input type="text" name="country" class="form-control" id="country" readonly
                                value="{{ $city->country->name ?? '' }}">
                        </div>
                        <div class="col-12">
                            <label for="country_code" class="form-label">Country Code</label>
                            <input type="text" name="country_code" class="form-control" id="country_code" readonly
                                value="{{ $city->country_code }}">
                        </div>
                        <div class="col-12">
                            <label for="latitude" class="form-label">Latitude</label>
                            <input type="text" name="latitude" class="form-control" id="latitude" readonly
                                value="{{ $city->latitude }}">
                        </div>
                        <div class="col-12">
                            <label for="longitude" class="form-label">Longitude</label>
                            <input type="text" name="longitude" class="form-control" id="longitude" readonly
                                value="{{ $city->longitude }}">
                        </div>
                        <div class="col-12">
                            <label for="timezone" class="form-label">Timezone</label>
                            <input type="text" name="timezone" class="form-control" id="timezone" readonly
                                value="{{ $city->timezone }}">
                        </div>
                        <div class="col-12">
                            <label for="flag" class="form-label">Flag</label>
                            <input type="text" name="flag" class="form-control" id="flag" readonly
                                value="{{ $city->flag ? 'Yes' : 'No' }}">
                        </div>
                        <div class="col-12">
                            <label for="wikiDataId" class="form-label">WikiData ID</label>
                            <input type="text" name="wikiDataId" class="form-control" id="wikiDataId" readonly
                                value="{{ $city->wikiDataId }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 text-center">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">City Icon / Flag</h5>
                </div>
                <div class="card-body">
                    @if ($city->flag)
                        <span style="font-size: 50px;">🏳️</span>
                    @else
                        <span>No Flag</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
