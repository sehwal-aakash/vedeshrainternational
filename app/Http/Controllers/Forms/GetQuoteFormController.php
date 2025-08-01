<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GetQuoteForm;

class GetQuoteFormController extends Controller
{
    public function store (Request $request){

        // Validate form data
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'nullable|string|max:255',
            'emailaddress' => 'required|email|max:255',
            'mobilenumber' => 'required|string|max:15',
            'companybusiness' => 'nullable|string|max:255',
            'website' => 'required|string|max:255',
            'selectservices' => 'required|string',
            'otherservices' => 'nullable|string',
            'selectregion' => 'required|string',
            'message' => 'required|string',
            'pageurl' => 'nullable|url',
        ]);

        $validated['ip_address'] = $request->ip();

        \Log::info('Get Quote Form Data:', $validated);

        $formEntry = GetQuoteForm::create($validated);

        \Log::info('Data Added Successfully');

        return redirect()->route('thank-you');

    }

    public function view() {
        $entries = GetQuoteForm::all();

        return view('admin.forms.getquote.listgetquote', ['entries' => $entries]);
    }

    public function viewoneitem($id){
        $entry = GetQuoteForm::find($id);

        return view('admin.forms.getquote.viewoneitemgetquoteform', ['entry' => $entry]);
    }

    public function deleteentry($id)
    {
        $entry = GetQuoteForm::find($id);
        $entry->delete();

        return redirect()->route('admin.forms.getquote.list')->with('success', 'Entry deleted successfully!');
    }
}