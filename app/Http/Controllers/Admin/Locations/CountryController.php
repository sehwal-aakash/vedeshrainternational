<?php

namespace App\Http\Controllers\Admin\Locations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Countries;

class CountryController extends Controller
{
    public function listcountries(){
        $countries = Countries::all();
        return view('admin.locations.countries.listcountries', compact('countries'));
    }

    public function viewcountries($id){
        $country = Countries::findOrFail($id);
        return view('admin.locations.countries.viewcountries', compact('country'));
    }
}
