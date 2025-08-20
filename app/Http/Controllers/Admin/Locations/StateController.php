<?php

namespace App\Http\Controllers\Admin\Locations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\States;

class StateController extends Controller
{
    public function liststates(){
        $states = States::with('country')->get();
        return view('admin.locations.states.liststates', compact('states'));
    }

    public function viewstates($id){
        $state = States::with(['country', 'children'])->findOrFail($id);
        return view('admin.locations.states.viewstates', compact('state'));
    }
}
