<?php

namespace App\Http\Controllers\Admin\Locations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SubRegions;

class SubRegionController extends Controller
{
    public function listsubregions(){
        $subregions = SubRegions::all();
        return view('admin.locations.subregions.listsubregions', compact('subregions'));
    }

    public function viewsubregions($id){
        $subregion = SubRegions::findOrFail($id);
        return view('admin.locations.subregions.viewsubregions', compact('subregion'));
    }
}
