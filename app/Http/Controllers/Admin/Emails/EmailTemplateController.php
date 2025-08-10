<?php

namespace App\Http\Controllers\Admin\Emails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\EmailTemplate;

class EmailTemplateController extends Controller
{
    public function listemailtemplates(){
        $email_templates = EmailTemplate::all();
        return view('admin.pages.services.listservices', compact('email_templates'));
    }

    public function addemailtemplatepost(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'icon' => 'nullable|string|max:255', // Validate as string, not image
        ]);
    
        EmailTemplate::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->slug),
            'title' => $request->title,
            'short_description' => $request->short_description,
            'icon' => '/assets/img/icons/services/' . $request->icon, // Just save the string (URL or filename)
        ]);
    
        return redirect()->route('admin.services.list')->with('success', 'Email Template added successfully!');
    }

    public function addemailtemplate(){
        return view('admin.pages.services.addservices');
    }

    public function viewemailtemplate($id){
        $email_template = EmailTemplate::findOrFail($id);
        return view('admin.pages.services.viewservices', compact('email_template'));
    }

    public function editemailtemplate($id)
    {
        $email_template = EmailTemplate::findOrFail($id);
        return view('admin.pages.services.editservices', compact('email_template'));
    }

    public function updateemailtemplate(Request $request, $id)
    {
        $email_template = EmailTemplate::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug,' . $id,
            'title' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
        ]);

        $email_template->update([
            'name' => $request->name,
            'slug' => \Str::slug($request->slug),
            'title' => $request->title,
            'short_description' => $request->short_description,
            'icon' => '/assets/img/icons/services/' . $request->icon,
        ]);

        return redirect()->route('admin.services.list')->with('success', 'Email Template updated successfully!');
    }

    public function deleteemailtemplate($id)
    {
        $email_template = EmailTemplate::findOrFail($id);
        $email_template->delete();

        return redirect()->route('admin.services.list')->with('success', 'Email Template deleted successfully!');
    }
}
