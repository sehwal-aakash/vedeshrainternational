<?php

namespace App\Http\Controllers\Admin\Redirections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Redirections;

class RedirectionsController extends Controller
{
    public function listredirections(){
        $redirections = Redirections::all();
        return view('admin.redirections.listredirections', compact('redirections'));
    }

    public function addredirectionPost(Request $request){
        $request->validate([
            'redirection_from' => 'required|string|max:255',
            'redirection_to' => 'required|string|max:255'
        ]);
    
        Redirections::create([
            'redirection_from' => $request->redirection_from,
            'redirection_to' => $request->redirection_to
        ]);
    
        return redirect()->route('admin.redirections.list')->with('success', 'Redirection added successfully!');
    }

    public function addredirection(){
        return view('admin.redirections.addredirections');
    }

    public function viewredirection($id){
        $redirection = Redirections::findOrFail($id);
        return view('admin.redirections.viewredirections', compact('redirection'));
    }

    public function editredirection($id)
    {
        $redirection = Redirections::findOrFail($id);
        return view('admin.redirections.editredirections', compact('redirection'));
    }

    public function updateredirection(Request $request, $id)
    {
        $redirection = Redirections::findOrFail($id);

        $request->validate([
            'redirection_from' => 'required|string|max:255',
            'redirection_to' => 'required|string|max:255',
        ]);

        $redirection->update([
            'redirection_from' => $request->redirection_from,
            'redirection_to' => $request->redirection_to,
        ]);

        return redirect()->route('admin.redirections.list')->with('success', 'Redirection updated successfully!');
    }

    public function deleteredirection($id)
    {
        $redirection = Redirections::findOrFail($id);
        $redirection->delete();

        return redirect()->route('admin.redirections.list')->with('success', 'Redirection deleted successfully!');
    }
}
