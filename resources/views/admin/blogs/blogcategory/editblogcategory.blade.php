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
                    @method('PUT')

                    <div class="row gy-3">
                        <div class="col-12">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $blogcategory->title) }}" required>
                        </div>

                        <div class="col-12">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" name="slug" class="form-control" id="slug" value="{{ old('slug', $blogcategory->slug) }}" required>
                        </div>

                        <div class="col-12">
                            <label for="excerpt" class="form-label">Excerpt</label>
                            <input type="text" name="excerpt" class="form-control" value="{{ old('excerpt', $blogcategory->excerpt) }}" id="excerpt">
                        </div>

                        <div class="col-12">
                            <label for="content" class="form-label">Description</label>
                            <textarea name="content" class="form-control" id="content" rows="5" required>{{ old('content', $blogcategory->content) }}</textarea>
                        </div>

                        <div class="col-12">
                            <label for="featured_image" class="form-label">Featured Image</label>
                            <input type="text" name="featured_image" class="form-control" id="featured_image" value="{{ old('featured_image', $blogcategory->featured_image) }}">
                        </div>

                        <div class="col-12">
                            <label for="banner_image" class="form-label">Banner Image</label>
                            <input type="text" name="banner_image" class="form-control" id="banner_image" value="{{ old('banner_image', $blogcategory->banner_image) }}">
                        </div>

                        <div class="col-12">
                            <label for="parent_id" class="form-label">Parent Category</label>
                            <select name="parent_id" id="parent_id" class="form-control">
                                <option value="">Select Parent Category</option>
                                @foreach($blogcategories as $category)
                                    <option value="{{ $category->id }}" {{ old('parent_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="seo_title" class="form-label">Meta Title</label>
                            <input type="text" name="seo_title" class="form-control" id="seo_title" value="{{ old('seo_title', $blogcategory->seo_title) }}">
                        </div>

                        <div class="col-12">
                            <label for="seo_description" class="form-label">Meta Description</label>
                            <textarea name="seo_description" class="form-control" id="seo_description" rows="5">{{ old('seo_description', $blogcategory->seo_description) }}</textarea>
                        </div>

                        <div class="col-12">
                            <label for="seo_keywords" class="form-label">Keywords</label>
                            <textarea name="seo_keywords" class="form-control" id="seo_keywords" rows="5">{{ old('seo_keywords', $blogcategory->seo_keywords) }}</textarea>
                        </div>

                        <div class="col-12">
                            <label for="is_active" class="form-label">Status</label>
                            <select name="is_active" id="parent_id" class="form-control" required>
                                <option value="">Select Status</option>
                                <option value="0">Draft</option>
                                <option value="1">Active</option>
                            </select>
                        </div>

                        <div class="col-12 mt-60">
                            <button type="submit" class="btn btn-primary-600">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
