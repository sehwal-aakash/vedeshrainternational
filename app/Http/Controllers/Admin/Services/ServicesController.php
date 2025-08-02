<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Services;

class ServicesController extends Controller
{
    public function listservices(){
        $services = Services::all();
        return view('admin.pages.services.listservices', compact('services'));
    }

    public function listservicesfrontend(){
        $services = Services::all();
        return view('content.pages.mainpages.services', compact('services'));
    }

    public function addservicePost(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'icon' => 'nullable|string|max:255', // Validate as string, not image
        ]);
    
        Services::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->slug),
            'title' => $request->title,
            'short_description' => $request->short_description,
            'icon' => '/assets/img/icons/services/' . $request->icon, // Just save the string (URL or filename)
        ]);
    
        return redirect()->route('admin.services.list')->with('success', 'Service added successfully!');
    }

    public function addservice(){
        return view('admin.pages.services.addservices');
    }

    public function viewservice($id){
        $service = Services::findOrFail($id);
        return view('admin.pages.services.viewservices', compact('service'));
    }

    public function editservice($id)
    {
        $service = Services::findOrFail($id);
        return view('admin.pages.services.editservices', compact('service'));
    }

    public function updateservice(Request $request, $id)
    {
        $service = Services::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug,' . $id,
            'title' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
        ]);

        $service->update([
            'name' => $request->name,
            'slug' => \Str::slug($request->slug),
            'title' => $request->title,
            'short_description' => $request->short_description,
            'icon' => '/assets/img/icons/services/' . $request->icon,
        ]);

        return redirect()->route('admin.services.list')->with('success', 'Service updated successfully!');
    }

    public function deleteservice($id)
    {
        $service = Services::findOrFail($id);
        $service->delete();

        return redirect()->route('admin.services.list')->with('success', 'Service deleted successfully!');
    }
}
