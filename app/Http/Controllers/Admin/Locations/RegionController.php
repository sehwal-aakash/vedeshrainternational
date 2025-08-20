<?php

namespace App\Http\Controllers\Admin\Locations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Regions;

class RegionController extends Controller
{
    public function listregions(){
        $regions = Regions::all();
        return view('admin.locations.regions.listregions', compact('regions'));
    }

    public function viewregions($id){
        $region = Regions::findOrFail($id);
        return view('admin.locations.regions.viewregions', compact('region'));
    }
}