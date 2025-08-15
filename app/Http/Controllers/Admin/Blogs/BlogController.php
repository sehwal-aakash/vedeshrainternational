<?php

namespace App\Http\Controllers\Admin\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    // Show all blog posts
    public function listblogs(){
        $blogs = Blog::all();
        return view('admin.blogs.blogs.listblogs', compact('blogs'));
    }

    // public function index()
    // {
    //     $blogs = Blog::latest()->paginate(10);
    //     return response()->json($blogs);
    // }

    // Store a new blog post
    public function addblogPost(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'featured_image' => 'nullable|string',
            'status' => 'required|in:draft,published,archived',
        ]);

        Blog::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'featured_image' => $request->featured_image,
            'author_id' => $request->author_id,
            'category_id' => $request->category_id,
            'tags' => $request->tags,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
            'status' => $request->status,
            'published_at' => $request->status === 'published' ? now() : null,
            'views_count' => 0,
            'is_featured' => $request->is_featured ?? false,
        ]);

        // return response()->json(['message' => 'Blog created successfully', 'data' => $blog], 201);
        return redirect()->route('admin.blogs.list')->with('success', 'Blog added successfully!');
    }

    public function addblog(){
        return view('admin.blogs.blogs.addblog');
    }

    // Show a single blog post
    public function viewblog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.blogs.viewblog', compact('blog'));
    }

    public function editblog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.blogs.editblog', compact('blog'));
    }

    // Update a blog post
    public function updateblog(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required|in:draft,published,archived',
        ]);

        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'featured_image' => $request->featured_image,
            'author_id' => $request->author_id,
            'category_id' => $request->category_id,
            'tags' => $request->tags,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
            'status' => $request->status,
            'published_at' => $request->status === 'published' ? now() : null,
            'is_featured' => $request->is_featured ?? false,
        ]);

        // return response()->json(['message' => 'Blog updated successfully', 'data' => $blog]);
        return redirect()->route('admin.blogs.list')->with('success', 'Blog added successfully!');
    }

    // Delete a blog post
    public function deleteblog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        // return response()->json(['message' => 'Blog deleted successfully']);
        return redirect()->route('admin.blogs.list')->with('success', 'Blog deleted successfully!');
    }
}
