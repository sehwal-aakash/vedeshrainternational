<?php

namespace App\Http\Controllers\Admin\Locations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Regions;

class RegionController extends Controller
{
    public function listregions(){
        $regions = Regions::with(['subRegions', 'countries'])->get();
        return view('admin.locations.regions.listregions', compact('regions'));
    }

    public function viewregions($id){
        $region = Regions::with(['subRegions', 'countries'])->findOrFail($id);
        return view('admin.locations.regions.viewregions', compact('region'));
    }

    public function webDesignServices($region)
    {
        // Fetch region by name (or slug if you store slugs)
        $region = Regions::where('name', $region)->firstOrFail();

        // Pass the region name as "location" variable
        return view('content.pages.locations.services.web-design-and-development', [
            'location' => $region->name,
            'region' => $region
        ]);
    }
}