<?php

namespace App\Http\Controllers\Admin\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    // Show all blog categories
    public function listblogcategory()
    {
        $blogcategories = BlogCategory::all();
        return view('admin.blogs.blogcategory.listblogcategory', compact('blogcategories'));
    }

    // Show form to add a new blog category
    public function addblogcategory()
    {
        $blogcategories = BlogCategory::all();
        return view('admin.blogs.blogcategory.addblogcategory', compact('blogcategories'));
    }

    // Store a new blog category
    public function addblogcategorypost(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        BlogCategory::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'featured_image' => $request->featured_image,
            'banner_image' => $request->banner_image,
            'parent_id' => $request->parent_id,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('admin.blogcategory.list')->with('success', 'Blog Category created successfully!');
    }

    // Show a single blog category
    public function viewblogcategory($id)
    {
        $blogcategory = BlogCategory::findOrFail($id);
        return view('admin.blogs.blogcategory.viewblogcategory', compact('blogcategory'));
    }

    // Show form to edit a blog category
    public function editblogcategory($id)
    {
        $blogcategory = BlogCategory::findOrFail($id);
        $blogcategories = BlogCategory::all();
        return view('admin.blogs.blogcategory.editblogcategory', compact('blogcategory', 'blogcategories'));
    }

    // Update a blog category
    public function updateblogcategory(Request $request, $id)
    {
        $blogcategory = BlogCategory::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $blogcategory->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'featured_image' => $request->featured_image,
            'banner_image' => $request->banner_image,
            'parent_id' => $request->parent_id,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('admin.blogcategory.list')->with('success', 'Blog Category updated successfully!');
    }

    // Delete a blog category
    public function deleteblogcategory($id)
    {
        $blogcategory = BlogCategory::findOrFail($id);
        $blogcategory->delete();

        return redirect()->route('admin.blogcategory.list')->with('success', 'Blog Category deleted successfully!');
    }
}
