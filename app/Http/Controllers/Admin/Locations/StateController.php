<?php

namespace App\Http\Controllers\Admin\Locations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\States;

class StateController extends Controller
{
    public function liststates(){
        $states = States::all();
        return view('admin.locations.states.liststates', compact('states'));
    }

    public function viewstates($id){
        $state = States::findOrFail($id);
        return view('admin.locations.states.viewstates', compact('state'));
    }
}
