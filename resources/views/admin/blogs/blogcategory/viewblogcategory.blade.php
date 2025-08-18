@extends('layouts.adminlayout')

@section('content')
<div class="row gy-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Edit Blog Category</h5>
                <a href="{{ route('admin.blogcategory.list') }}">
                    <span class="btn btn rounded-pill btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</span>
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.blogcategory.update', $blogcategory->id) }}" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}

                    <div class="row gy-3">
                        <div class="col-12">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ $blogcategory->title }}" readonly>
                        </div>

                        <div class="col-12">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" name="slug" class="form-control" id="slug" value="{{ $blogcategory->slug }}" readonly>
                        </div>

                        <div class="col-12">
                            <label for="excerpt" class="form-label">Excerpt</label>
                            <input type="text" name="excerpt" class="form-control" value="{{ $blogcategory->excerpt }}" id="excerpt" readonly>
                        </div>

                        <div class="col-12">
                            <label for="content" class="form-label">Description</label>
                            <textarea name="content" class="form-control" id="content" rows="5" readonly>{{ $blogcategory->content }}</textarea>
                        </div>

                        <div class="col-12">
                            <label for="featured_image" class="form-label">Featured Image</label>
                            <input type="text" name="featured_image" class="form-control" id="featured_image" value="{{ $blogcategory->featured_image }}" readonly>
                        </div>

                        <div class="col-12">
                            <label for="banner_image" class="form-label">Banner Image</label>
                            <input type="text" name="banner_image" class="form-control" id="banner_image" value="{{ $blogcategory->banner_image }}" readonly>
                        </div>

                        <div class="col-12">
                            <label for="parent_id" class="form-label">Parent Category</label>
                            <input type="text" name="parent_id" class="form-control" id="parent_id" value="{{ $parentcategorytitle }}" readonly>
                        </div>

                        <div class="col-12">
                            <label for="seo_title" class="form-label">Meta Title</label>
                            <input type="text" name="seo_title" class="form-control" id="seo_title" value="{{ $blogcategory->seo_title }}" readonly>
                        </div>

                        <div class="col-12">
                            <label for="seo_description" class="form-label">Meta Description</label>
                            <textarea name="seo_description" class="form-control" id="seo_description" rows="5" readonly>{{ $blogcategory->seo_description }}</textarea>
                        </div>

                        <div class="col-12">
                            <label for="seo_keywords" class="form-label">Keywords</label>
                            <textarea name="seo_keywords" class="form-control" id="seo_keywords" rows="5" readonly>{{ $blogcategory->seo_keywords }}</textarea>
                        </div>

                        <div class="col-12">
                            <label for="is_active" class="form-label">Status</label>
                            <input type="text" name="is_active" class="form-control" id="is_active" value="{{ $blogcategory->is_active == 1 ? 'Active' : 'Draft' }}" readonly>
                        </div>

                        {{-- <div class="col-12 mt-60">
                            <button type="submit" class="btn btn-primary-600">Update</button>
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
