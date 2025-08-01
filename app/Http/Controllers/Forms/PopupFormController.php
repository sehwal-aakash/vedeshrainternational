<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PopupForm;

class PopupFormController extends Controller
{
    public function store (Request $request){

        // Validate form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'emailaddress' => 'required|email|max:255',
            'mobilenumber' => 'required|string|max:15',
            'companybusiness' => 'nullable|string|max:255',
            'selectservices' => 'required|string',
            'otherservices' => 'nullable|string',
            'pageurl' => 'nullable|url',
        ]);

        $validated['ip_address'] = $request->ip();

        \Log::info('Popup Form Data:', $validated);

        $formEntry = PopupForm::create($validated);

        \Log::info('Data Added Successfully');

        return redirect()->route('thank-you');

    }

    public function view() {
        $entries = PopupForm::all();

        return view('admin.forms.popupforms.listpopupforms', ['entries' => $entries]);
    }

    public function viewoneitem($id){
        $entry = PopupForm::find($id);

        return view('admin.forms.popupforms.viewoneitempopupform', ['entry' => $entry]);
    }

    public function deleteentry($id)
    {
        $entry = PopupForm::find($id);
        $entry->delete();

        return redirect()->route('admin.forms.popup.list')->with('success', 'Entry deleted successfully!');
    }
}
