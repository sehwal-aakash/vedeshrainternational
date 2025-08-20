<?php

namespace App\Http\Controllers\Admin\Locations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cities;

class CityController extends Controller
{
    public function listcities(){
        $cities = Cities::all();
        return view('admin.locations.city.listcities', compact('cities'));
    }

    public function viewcity($id){
        $city = Cities::findOrFail($id);
        return view('admin.locations.city.viewcities', compact('city'));
    }
}
