<?php

namespace App\Http\Controllers\Admin\MainPages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MainPages;

class MainPagesController extends Controller
{
    public function listmainpages(){
        $mainpages = MainPages::all();
        return view('admin.pages.mainpages.listmainpages', compact('mainpages'));
    }

    // public function listmainpagesfrontend(){
    //     $mainpages = MainPages::all();
    //     return view('content.pages.mainpages.services', compact('mainpage'));
    // }

    public function addmainpagePost(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            // 'short_description' => 'nullable|string',
            // 'icon' => 'nullable|string|max:255', // Validate as string, not image
        ]);
    
        MainPages::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->slug),
            'title' => $request->title,
            // 'short_description' => $request->short_description,
            // 'icon' => '/assets/img/icons/services/' . $request->icon, // Just save the string (URL or filename)
        ]);
    
        return redirect()->route('admin.mainpages.list')->with('success', 'Main Page added successfully!');
    }

    public function addmainpage(){
        return view('admin.pages.mainpages.addmainpages');
    }

    public function viewmainpage($id){
        $mainpage = MainPages::findOrFail($id);
        return view('admin.pages.mainpages.viewmainpages', compact('mainpage'));
    }

    public function editmainpage($id)
    {
        $mainpage = MainPages::findOrFail($id);
        return view('admin.pages.mainpages.editmainpages', compact('mainpage'));
    }

    public function updatemainpage(Request $request, $id)
    {
        $mainpage = MainPages::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255,' . $id,
            'title' => 'nullable|string|max:255',
        ]);

        $mainpage->update([
            'name' => $request->name,
            'slug' => \Str::slug($request->slug),
            'title' => $request->title,
        ]);

        return redirect()->route('admin.mainpages.list')->with('success', 'Main Page updated successfully!');
    }

    public function deletemainpage($id)
    {
        $mainpage = MainPages::findOrFail($id);
        $mainpage->delete();

        return redirect()->route('admin.mainpages.list')->with('success', 'Main Page deleted successfully!');
    }
}
