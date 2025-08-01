<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Stevebauman\Location\Facades\Location;

use App\Models\NewsletterForm;

class NewsletterFormController extends Controller
{
    public function store (Request $request){
        // Validate form data
        $validated = $request->validate([
            'newsletterforminput' => 'required|email|max:255',
            'pageurl' => 'nullable|url',
        ]);

        $validated['ip_address'] = $request->ip();

        \Log::info('Newsletter Form Data:', $validated);

        $formEntry = NewsletterForm::create($validated);

        \Log::info('Data Added Successfully');

        return redirect()->route('thank-you');
    }

    public function view() {
        $entries = NewsletterForm::all();

        return view('admin.forms.newsletterforms.listnewsletterforms', ['entries' => $entries]);
    }

    public function viewoneitem($id){
        $entry = NewsletterForm::find($id);
        $ip_address = $entry->ip_address;
        $position = Location::get($ip_address);
        $ipcountry = $position && isset($position->countryName) ? $position->countryName : 'Unknown';
        $ipcity = $position && isset($position->cityName) ? $position->cityName : 'Unknown';
        return view('admin.forms.newsletterforms.viewoneitemnewsletterforms', ['entry' => $entry, 'ipcountry' => $ipcountry, 'ipcity' => $ipcity]);
    }

    public function deleteentry($id)
    {
        $entry = NewsletterForm::find($id);
        $entry->delete();

        return redirect()->route('admin.forms.newsletter.list')->with('success', 'Entry deleted successfully!');
    }
}
