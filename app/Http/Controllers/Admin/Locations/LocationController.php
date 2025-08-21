<?php

namespace App\Http\Controllers\Admin\Locations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Locations;

class LocationController extends Controller
{
    public function listlocations(){
        $locations = Locations::all();
        return view('admin.pages.locations.listlocation', compact('locations'));
    }

    public function addlocation(){
        return view('admin.pages.locations.addlocation');
    }

    public function addlocationPost(Request $request){
        $request->validate([
            'page_type' => 'required|in:service,industry,technology',
            'page_id' => 'required|integer',
            'template_name' => 'required|string|max:255',
            'page_slug' => 'required|string|max:255|unique:locations,page_slug',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'status' => 'nullable|in:active,inactive',
        ]);
    
        Locations::create([
            'page_type' => $request->page_type,
            'page_id' => $request->page_id,
            'template_name' => $request->template_name,
            'page_slug' => $request->page_slug,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'status' => $request->status ?? 'active',
        ]);
    
        return redirect()->route('admin.locations.list')->with('success', 'Location added successfully!');
    }

    public function viewlocation($id){
        $location = Locations::findOrFail($id);
        return view('admin.pages.locations.viewlocation', compact('location'));
    }

    public function editlocation($id)
    {
        $location = Locations::findOrFail($id);
        return view('admin.pages.locations.editlocation', compact('location'));
    }

    public function updatelocation(Request $request, $id)
    {
        $location = Location::findOrFail($id);

        $request->validate([
            'page_type' => 'required|in:service,industry,technology',
            'page_id' => 'required|integer',
            'template_name' => 'required|string|max:255',
            'page_slug' => 'required|string|max:255|unique:locations,page_slug',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'status' => 'nullable|in:active,inactive',
        ]);

        $location->update([
            'page_type' => $request->page_type,
            'page_id' => $request->page_id,
            'template_name' => $request->template_name,
            'page_slug' => $request->page_slug,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'status' => $request->status ?? 'active',
        ]);

        return redirect()->route('admin.locations.list')->with('success', 'Location updated successfully!');
    }

    public function deletelocation($id)
    {
        $location = Locations::findOrFail($id);
        $location->delete();

        return redirect()->route('admin.locations.list')->with('success', 'Location deleted successfully!');
    }

    public function getPages($pageType)
    {
        // Validate the page type
        if (!in_array($pageType, ['service', 'industry', 'technology'])) {
            return response()->json([], 400); // Bad Request if invalid type
        }

        // Fetch pages based on type
        switch ($pageType) {
            case 'service':
                $pages = \App\Models\Services::select('id', 'name')->get();
                break;
            case 'industry':
                $pages = \App\Models\Industries::select('id', 'name')->get();
                break;
            case 'technology':
                $pages = \App\Models\Technologies::select('id', 'name')->get();
                break;
        }

        return response()->json($pages);
    }
}