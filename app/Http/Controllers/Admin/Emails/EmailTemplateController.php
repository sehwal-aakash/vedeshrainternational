<?php

namespace App\Http\Controllers\Admin\Emails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\EmailTemplate;

class EmailTemplateController extends Controller
{
    public function listemailtemplates(){
        $email_templates = EmailTemplate::all();
        return view('admin.emails.emailtemplates.listemailtemplate', compact('email_templates'));
    }

    public function addemailtemplatepost(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'file_name' => 'required|string|max:255',
            'required_variables' => 'nullable|string',
            'subject' => 'required|string|max:255',
        ]);
    
        EmailTemplate::create([
            'name' => $request->name,
            'file_name' => $request->file_name,
            'required_variables' => $request->required_variables,
            'subject' => $request->subject,
        ]);
    
        return redirect()->route('admin.emailtemplates.list')->with('success', 'Email Template added successfully!');
    }

    public function addemailtemplate(){
        return view('admin.emails.emailtemplates.addemailtemplate');
    }

    public function viewemailtemplate($id){
        $email_template = EmailTemplate::findOrFail($id);
        return view('admin.emails.emailtemplates.viewemailtemplate', compact('email_template'));
    }

    public function editemailtemplate($id)
    {
        $email_template = EmailTemplate::findOrFail($id);
        return view('admin.emails.emailtemplates.editemailtemplate', compact('email_template'));
    }

    public function updateemailtemplate(Request $request, $id)
    {
        $email_template = EmailTemplate::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'file_name' => 'required|string|max:255',
            'required_variables' => 'nullable|string',
            'subject' => 'required|string|max:255',
        ]);

        $email_template->update([
            'name' => $request->name,
            'file_name' => $request->file_name,
            'required_variables' => $request->required_variables,
            'subject' => $request->subject,
        ]);

        return redirect()->route('admin.emailtemplates.list')->with('success', 'Email Template updated successfully!');
    }

    public function deleteemailtemplate($id)
    {
        $email_template = EmailTemplate::findOrFail($id);
        $email_template->delete();

        return redirect()->route('admin.emailtemplates.list')->with('success', 'Email Template deleted successfully!');
    }
}
