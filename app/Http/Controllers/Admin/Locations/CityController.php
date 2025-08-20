<?php

namespace App\Http\Controllers\Admin\Locations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cities;

class CityController extends Controller
{
    public function listcities(Request $request)
    {
        // Load cities with state & country, paginate results (20 per page)
        $cities = Cities::with(['state:id,name', 'country:id,name'])
                        ->paginate(20);

        return view('admin.locations.city.listcities', compact('cities'));
    }

    public function viewcities($id)
    {
        // Load city with its state & country
        $city = Cities::with(['state:id,name', 'country:id,name'])
                      ->findOrFail($id);

        return view('admin.locations.city.viewcities', compact('city'));
    }
}
