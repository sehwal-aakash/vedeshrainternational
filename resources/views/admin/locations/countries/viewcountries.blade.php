@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">View Country</h5>
                    <a href="{{ route('admin.countries.list') }}"
                        class="btn btn-sm btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</a>
                </div>
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label class="form-label">Country Name</label>
                            <input type="text" class="form-control" readonly value="{{ $country->name }}">
                        </div>

                        <div class="col-6">
                            <label class="form-label">ISO2</label>
                            <input type="text" class="form-control" readonly value="{{ $country->iso2 }}">
                        </div>
                        <div class="col-6">
                            <label class="form-label">ISO3</label>
                            <input type="text" class="form-control" readonly value="{{ $country->iso3 }}">
                        </div>

                        <div class="col-6">
                            <label class="form-label">Phone Code</label>
                            <input type="text" class="form-control" readonly value="{{ $country->phonecode }}">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Capital</label>
                            <input type="text" class="form-control" readonly value="{{ $country->capital }}">
                        </div>

                        <div class="col-6">
                            <label class="form-label">Currency</label>
                            <input type="text" class="form-control" readonly value="{{ $country->currency }}">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Currency Symbol</label>
                            <input type="text" class="form-control" readonly value="{{ $country->currency_symbol }}">
                        </div>

                        <div class="col-6">
                            <label class="form-label">Region</label>
                            <input type="text" class="form-control" readonly value="{{ $country->region ?? '-' }}">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Subregion</label>
                            <input type="text" class="form-control" readonly value="{{ $country->subregion ?? '-' }}">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Nationality</label>
                            <input type="text" class="form-control" readonly value="{{ $country->nationality }}">
                        </div>

                        <div class="col-6">
                            <label class="form-label">Latitude</label>
                            <input type="text" class="form-control" readonly value="{{ $country->latitude }}">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Longitude</label>
                            <input type="text" class="form-control" readonly value="{{ $country->longitude }}">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Timezones</label>
                            <textarea class="form-control" rows="2" readonly>{{ $country->timezones }}</textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Translations</label>
                            <textarea class="form-control" rows="2" readonly>{{ $country->translations }}</textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label">WikiData ID</label>
                            <input type="text" class="form-control" readonly value="{{ $country->wikiDataId }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Side Card for Flag / Emoji --}}
        <div class="col-lg-2 text-center">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Country Flag</h5>
                </div>
                <div class="card-body">
                    @if ($country->flag)
                        <div style="font-size: 48px;">{{ $country->emoji }}</div>
                        <small>{{ $country->emojiU }}</small>
                    @else
                        <span class="text-muted">No Flag</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
