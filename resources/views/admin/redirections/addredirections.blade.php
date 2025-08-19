@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Add Redirection</h5>
                    <a href="{{ route('admin.redirections.list') }}"><span class="btn btn rounded-pill btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</span></a>
                </div> 
                <div class="card-body">
                    <form action="{{ route('admin.redirections.add.post') }}" method="POST">
                    @csrf
                    <div class="row gy-3">
                                <div class="col-12">
                                    <label for="redirection_from" class="form-label">Redirection From</label>
                                    <input type="text" name="redirection_from" class="form-control" id="redirection_from" required>
                                </div>
                                <div class="col-12">
                                    <label for="redirection_to" class="form-label">Redirection To</label>
                                    <input type="text" name="redirection_to" class="form-control" id="redirection_to" required>
                                </div>
                                <div class="col-12 mt-60">
                                    <button type="submit" class="btn btn-primary-600">Submit</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection