@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Edit Blog</h5>
                    <a href="{{ route('admin.blogs.list') }}">
                        <span class="btn btn rounded-pill btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</span>
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}

                        <div class="row gy-3">
                            <div class="col-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $blog->title) }}" required>
                            </div>

                            <div class="col-12">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control" id="slug" value="{{ old('slug', $blog->slug) }}" required>
                            </div>

                            <div class="col-12">
                                <label for="excerpt" class="form-label">Excerpt</label>
                                <textarea name="excerpt" class="form-control" id="excerpt" rows="3">{{ old('excerpt', $blog->excerpt) }}</textarea>
                            </div>

                            <div class="col-12">
                                <label for="content" class="form-label">Content</label>
                                <textarea name="content" class="form-control" id="content" rows="6" required>{{ old('content', $blog->content) }}</textarea>
                            </div>

                            <div class="col-12">
                                <label for="featured_image" class="form-label">Featured Image</label>
                                @if($blog->featured_image)
                                    <div class="mb-2">
                                        <img src="{{ asset($blog->featured_image) }}" alt="Featured Image" width="200" class="rounded">
                                    </div>
                                @endif
                                <input type="text" name="featured_image" class="form-control" id="featured_image">
                            </div>

                            <div class="col-6">
                                <label for="author_id" class="form-label">Author</label>
                                <input type="number" name="author_id" class="form-control" id="author_id" value="{{ old('author_id', $blog->author_id) }}">
                            </div>

                            <div class="col-6">
                                <label for="category_id" class="form-label">Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach($blogcategories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="tags" class="form-label">Tags (comma separated)</label>
                                <input type="text" name="tags" class="form-control" id="tags" value="{{ old('tags', $blog->tags) }}">
                            </div>

                            <div class="col-12">
                                <label for="seo_title" class="form-label">SEO Title</label>
                                <input type="text" name="seo_title" class="form-control" id="seo_title" value="{{ old('seo_title', $blog->seo_title) }}">
                            </div>

                            <div class="col-12">
                                <label for="seo_description" class="form-label">SEO Description</label>
                                <textarea name="seo_description" class="form-control" id="seo_description" rows="3">{{ old('seo_description', $blog->seo_description) }}</textarea>
                            </div>

                            <div class="col-12">
                                <label for="seo_keywords" class="form-label">SEO Keywords</label>
                                <input type="text" name="seo_keywords" class="form-control" id="seo_keywords" value="{{ old('seo_keywords', $blog->seo_keywords) }}">
                            </div>

                            <div class="col-6">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="draft" {{ old('status', $blog->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="published" {{ old('status', $blog->status) == 'published' ? 'selected' : '' }}>Published</option>
                                    <option value="archived" {{ old('status', $blog->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <label for="published_at" class="form-label">Published At</label>
                                <input type="date" name="published_at" class="form-control datepicker" id="published_at" value="{{ old('published_at', $blog->published_at ? $blog->published_at->format('Y-m-d') : '') }}">
                            </div>

                            <div class="col-6">
                                <label for="is_featured" class="form-label">Featured?</label>
                                <select name="is_featured" id="is_featured" class="form-control">
                                    <option value="0" {{ old('is_featured', $blog->is_featured) == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ old('is_featured', $blog->is_featured) == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <label for="views_count" class="form-label">Views Count</label>
                                <input type="number" name="views_count" class="form-control" id="views_count" value="{{ old('views_count', $blog->views_count) }}">
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

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });
</script>
@endsection
