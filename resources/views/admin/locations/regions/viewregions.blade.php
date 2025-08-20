@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">View Region</h5>
                    <a href="{{ route('admin.regions.list') }}"
                        class="btn btn-sm btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</a>
                </div>
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label class="form-label">Region Name</label>
                            <input type="text" class="form-control" readonly value="{{ $region->name }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">WikiData ID</label>
                            <input type="text" class="form-control" readonly value="{{ $region->wikiDataId }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Translations (JSON)</label>
                            <textarea class="form-control" rows="3" readonly>{{ json_encode($region->translations, JSON_PRETTY_PRINT) }}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Sub Regions Count</label>
                            <input type="text" class="form-control" readonly value="{{ $region->subRegions->count() }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Countries Count</label>
                            <input type="text" class="form-control" readonly value="{{ $region->countries->count() }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if ($region->flag)
            <div class="col-lg-2 text-center">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Region Flag</h5>
                    </div>
                    <div class="card-body">
                        <img src="{{ $region->flag }}" alt="{{ $region->name }}" style="max-width:80px;">
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
