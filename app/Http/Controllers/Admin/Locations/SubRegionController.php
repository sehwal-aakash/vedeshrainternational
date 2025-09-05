<?php

namespace App\Http\Controllers\Admin\Locations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\SubRegions;

class SubRegionController extends Controller
{
    public function listsubregions(){
        $subregions = SubRegions::with(['region', 'countries'])->get();
        return view('admin.locations.subregions.listsubregions', compact('subregions'));
    }

    public function viewsubregions($id){
        $subregion = SubRegions::with(['region', 'countries'])->findOrFail($id);
        return view('admin.locations.subregions.viewsubregions', compact('subregion'));
    }

    public function webDesignServices($slug)
    {
        // Fetch region by slug
        $subregion = SubRegions::where('slug', $slug)->firstOrFail();

        // Pass the region name as "location" variable
        return view('content.pages.locations.services.web-design-and-development', [
            'location' => $subregion->name, // Name for display
            'region' => $subregion           // Full region object if needed
        ]);
    }
}
