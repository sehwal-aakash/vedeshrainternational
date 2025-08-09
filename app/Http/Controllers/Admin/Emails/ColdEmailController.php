<?php

namespace App\Http\Controllers\Admin\Emails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendCustomEmails;
use Illuminate\Support\Facades\Mail;
use App\Models\EmailTemplate;
use App\Models\manual_email;

class ColdEmailController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'recipient_name' => 'required|string|max:255',
            'recipient_email' => 'required|email',
            'subject' => 'required|string|max:255',
            'content_type' => 'required|in:template,message',
            'template_id' => 'required_if:content_type,template',
            'template_variables' => 'nullable|string',
            'message' => 'required_if:content_type,message',
        ]);

        $data = [
            'recipient_name' => $request->recipient_name,
            'recipient_email' => $request->recipient_email,
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
        Mail::to($data['recipient_email'])->send(new SendCustomEmails($data));

        manual_email::create([
            'recipient_name'     => $data['recipient_name'],
            'recipient_email'    => $data['recipient_email'],
            'subject'            => $data['subject'],
            'content_type'       => $request->content_type,
            'template_id'        => $request->content_type === 'template' ? $request->template_id : null,
            'template_variables' => $request->template_variables,
            'message'            => $request->content_type === 'message' ? $request->message : null,
        ]);

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
