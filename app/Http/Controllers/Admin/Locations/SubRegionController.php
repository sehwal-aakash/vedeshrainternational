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

    public function webDesignServices($subregion)
    {
        // Fetch subregion by name (or slug if you store slugs)
        // $subregion = SubRegions::get()->firstWhere(function ($item) use ($subregion) {
        //     return Str::slug($item->name) === $subregion;
        // });

        $subregionModel = SubRegions::get()->first(function ($item) use ($subregion) {
            return Str::slug($item->name) === $subregion;
        });

        if (! $subregionModel) {
            abort(404);
        }

        // Pass the subregion name as "location" variable
        return view('content.pages.locations.services.web-design-and-development', [
            'location' => $subregionModel->name,   // Original DB value (e.g. "Middle East & Africa")
            'subregion' => $subregionModel
        ]);
    }
}
