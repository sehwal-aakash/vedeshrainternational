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

    public function webDesignServices($subregionSlug)
    {
        // Convert the slug 'northern-america' back to 'Northern America'
        $subregionName = ucwords(str_replace('-', ' ', $subregionSlug));

        // Fetch subregion by the reconstructed name
        $subregion = SubRegions::where('name', $subregionName)->firstOrFail();

        // The rest of your code remains the same
        return view('content.pages.locations.services.web-design-and-development', [
            'location' => $subregion->name,
            'subregion' => $subregion
        ]);
    }
}
