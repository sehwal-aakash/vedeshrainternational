<?php

namespace App\Http\Controllers\Admin\Industries;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Industries;

class IndustriesController extends Controller
{
    public function listindustries(){
        $industries = Industries::all();
        return view('admin.pages.industries.listindustries', compact('industries'));
    }

    public function listindustriesfrontend(){
        $industries = Industries::all();
        return view('content.pages.mainpages.industries', compact('industries'));
    }

    public function addindustryPost(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'icon' => 'nullable|string|max:255', // Validate as string, not image
        ]);
    
        Industries::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->slug),
            'title' => $request->title,
            'short_description' => $request->short_description,
            'icon' => '/assets/img/icons/industries/' . $request->icon, // Just save the string (URL or filename)
        ]);
    
        return redirect()->route('admin.industries.list')->with('success', 'Industry added successfully!');
    }

    public function addindustry(){
        return view('admin.pages.industries.addindustry');
    }

    public function viewindustry($id){
        $industry = Industries::findOrFail($id);
        return view('admin.pages.industries.viewindustries', compact('industry'));
    }

    public function editindustry($id)
    {
        $industry = Industries::findOrFail($id);
        return view('admin.pages.industries.editindustries', compact('industry'));
    }

    public function updateindustry(Request $request, $id)
    {
        $industry = Industries::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:industries,slug,' . $id,
            'title' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
        ]);

        $industry->update([
            'name' => $request->name,
            'slug' => \Str::slug($request->slug),
            'title' => $request->title,
            'short_description' => $request->short_description,
            'icon' => '/assets/img/icons/industries/' . $request->icon,
        ]);

        return redirect()->route('admin.industries.list')->with('success', 'Industry updated successfully!');
    }

    public function deleteindustry($id)
    {
        $industry = Industries::findOrFail($id);
        $industry->delete();

        return redirect()->route('admin.industries.list')->with('success', 'Industry deleted successfully!');
    }
}