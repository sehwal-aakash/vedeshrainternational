@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">View Blog</h5>
                    <a href="{{ route('admin.blogs.list') }}">
                        <span class="btn btn rounded-pill btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</span>
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        {{-- @csrf --}}
                        {{-- @method('PUT') --}}

                        <div class="row gy-3">
                            <div class="col-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $blog->title) }}" readonly required>
                            </div>

                            <div class="col-12">
                                <label for="title" class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control" id="slug" value="{{ old('slug', $blog->slug) }}" readonly required>
                            </div>

                            <div class="col-12">
                                <label for="excerpt" class="form-label">Excerpt</label>
                                <textarea name="excerpt" class="form-control" id="excerpt" rows="3" readonly>{{ old('excerpt', $blog->excerpt) }}</textarea>
                            </div>

                            <div class="col-12">
                                <label for="content" class="form-label">Content</label>
                                <textarea name="content" class="form-control" id="content" rows="6" readonly>{{ old('content', $blog->content) }}</textarea>
                            </div>

                            <div class="col-12">
                                <label for="featured_image" class="form-label">Featured Image</label>
                                @if($blog->featured_image)
                                    <div class="mb-2">
                                        <img src="{{ asset($blog->featured_image) }}" alt="Featured Image" width="200" class="rounded">
                                    </div>
                                @endif
                                {{-- <input type="file" name="featured_image" class="form-control" id="featured_image"> --}}
                            </div>

                            <div class="col-6">
                                <label for="author_id" class="form-label">Author</label>
                                <input type="number" name="author_id" class="form-control" id="author_id" value="{{ old('author_id', $blog->author_id) }}" readonly>
                            </div>

                            <div class="col-6">
                                <label for="category_id" class="form-label">Category</label>
                                <input type="text" name="category_id" class="form-control" id="category_id" value="{{ $categorytitle }}" categoryid="{{ old('category_id', $blog->category_id) }}" readonly>
                            </div>

                            <div class="col-12">
                                <label for="tags" class="form-label">Tags (comma separated)</label>
                                <input type="text" name="tags" class="form-control" id="tags" value="{{ old('tags', $blog->tags) }}" readonly>
                            </div>

                            <div class="col-12">
                                <label for="seo_title" class="form-label">SEO Title</label>
                                <input type="text" name="seo_title" class="form-control" id="seo_title" value="{{ old('seo_title', $blog->seo_title) }}" readonly>
                            </div>

                            <div class="col-12">
                                <label for="seo_description" class="form-label">SEO Description</label>
                                <textarea name="seo_description" class="form-control" id="seo_description" readonly rows="3">{{ old('seo_description', $blog->seo_description) }}</textarea>
                            </div>

                            <div class="col-12">
                                <label for="seo_keywords" class="form-label">SEO Keywords</label>
                                <input type="text" name="seo_keywords" class="form-control" id="seo_keywords" readonly value="{{ old('seo_keywords', $blog->seo_keywords) }}">
                            </div>

                            <div class="col-6">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" name="status" class="form-control" id="status" readonly value="{{ old('status', $blog->status) }}" readonly>
                            </div>

                            <div class="col-6">
                                <label for="published_at" class="form-label">Published At</label>
                                <input type="date" name="published_at" class="form-control datepicker" id="published_at" value="{{ old('published_at', $blog->published_at ? $blog->published_at->format('Y-m-d') : '') }}" readonly>
                            </div>

                            <div class="col-6">
                                <label for="is_featured" class="form-label">Featured?</label>
                                <input type="text" name="is_featured" class="form-control" id="is_featured" readonly value="{{ old('is_featured', $blog->is_featured) == 0 ? 'No' : 'Yes') }}" readonly>
                            </div>

                            <div class="col-6">
                                <label for="views_count" class="form-label">Views Count</label>
                                <input type="number" name="views_count" class="form-control" id="views_count" value="{{ old('views_count', $blog->views_count) }}" readonly>
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