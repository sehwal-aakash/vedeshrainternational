<?php

namespace App\Http\Controllers\Admin\Locations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Countries;

class CountryController extends Controller
{
    public function listcountries(){
        $countries = Countries::with(['region', 'subregion'])->paginate(20);
        return view('admin.locations.countries.listcountries', compact('countries'));
    }

    public function viewcountries($id){
        $country = Countries::with(['region', 'subregion'])->findOrFail($id);
        return view('admin.locations.countries.viewcountries', compact('country'));
    }
}
