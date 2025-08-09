<?php

namespace App\Http\Controllers\Admin\Emails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendCustomEmails;
use Illuminate\Support\Facades\Mail;
use App\Models\EmailTemplate;

class ColdEmailController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'content_type' => 'required|in:template,message',
            'template_id' => 'required_if:content_type,template',
            'template_variables' => 'nullable|string',
            'message' => 'required_if:content_type,message',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
        ];

        if ($request->content_type === 'template') {
            $template = EmailTemplate::findOrFail($request->template_id);
            $variables = [];

            if ($request->template_variables) {
                try {
                    $variables = json_decode($request->template_variables, true, 512, JSON_THROW_ON_ERROR);
                } catch (\Throwable $e) {
                    return back()->withErrors(['template_variables' => 'Invalid JSON format.'])->withInput();
                }
            }

            $data['content'] = $this->replaceTemplateVariables($template->body, $variables);
        } else {
            $data['content'] = $request->message;
        }

        // Send email
        Mail::to($data['email'])->send(new SendCustomEmails($data));

        \Log::info('Email sent successfully.', $data);

        return redirect()->back()->with('success', 'Email sent successfully.');

        // return response()->json(['message' => 'Email sent successfully!']);
    }

    private function replaceTemplateVariables(string $template, array $vars): string
    {
        foreach ($vars as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }
        return $template;
    }

    public function form()
{
    $templates = EmailTemplate::all();
    return view('admin.emails.manual.addemail', compact('templates'));
}
}
