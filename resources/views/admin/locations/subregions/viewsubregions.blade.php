@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">View SubRegion</h5>
                    <a href="{{ route('admin.subregions.list') }}"
                        class="btn btn-sm btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</a>
                </div>
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label for="name" class="form-label">SubRegion Name</label>
                            <input type="text" class="form-control" id="name" readonly
                                value="{{ $subregion->name }}">
                        </div>

                        <div class="col-12">
                            <label for="region" class="form-label">Region Name</label>
                            <input type="text" class="form-control" id="region" readonly
                                value="{{ $subregion->region->name ?? 'N/A' }}">
                        </div>

                        <div class="col-12">
                            <label for="translations" class="form-label">Translations</label>
                            <textarea class="form-control" id="translations" rows="3" readonly>
{{ json_encode($subregion->translations, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}
                            </textarea>
                        </div>

                        <div class="col-12">
                            <label for="wikiDataId" class="form-label">WikiData ID</label>
                            <input type="text" class="form-control" id="wikiDataId" readonly
                                value="{{ $subregion->wikiDataId }}">
                        </div>

                        <div class="col-12">
                            <label for="countries" class="form-label">No. of Countries</label>
                            <input type="text" class="form-control" id="countries" readonly
                                value="{{ $subregion->countries->count() }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Flag Display --}}
        <div class="col-lg-2 text-center">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Flag</h5>
                </div>
                <div class="card-body">
                    @if ($subregion->flag)
                        <img src="{{ $subregion->flag }}" alt="{{ $subregion->name }}" style="max-width:70px;">
                    @else
                        <span class="text-muted">No Flag</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
