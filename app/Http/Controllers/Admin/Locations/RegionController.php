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
}