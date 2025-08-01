<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    public function store (Request $request){

        // Validate form data
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'nullable|string|max:255',
            'emailaddress' => 'required|email|max:255',
            'mobilenumber' => 'required|string|max:15',
            'companybusiness' => 'nullable|string|max:255',
            'selectservices' => 'required|string',
            'otherservices' => 'nullable|string',
            'message' => 'required|string',
            'pageurl' => 'nullable|url',
        ]);

        $validated['ip_address'] = $request->ip();

        \Log::info('Form Data:', $validated);

        $formEntry = ContactForm::create($validated);

        \Log::info('Data Added Successfully');

        return redirect()->route('thank-you');

    }

    public function view() {
        $entries = ContactForm::all();

        return view('admin.forms.contactforms.listcontactforms', ['entries' => $entries]);
    }

    public function viewoneitem($id){
        $entry = ContactForm::find($id);

        return view('admin.forms.contactforms.viewoneitemcontactform', ['entry' => $entry]);
    }

    public function deleteentry($id)
    {
        $entry = ContactForm::find($id);
        $entry->delete();

        return redirect()->route('admin.forms.contact.list')->with('success', 'Entry deleted successfully!');
    }
}
