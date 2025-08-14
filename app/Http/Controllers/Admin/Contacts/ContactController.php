<?php

namespace App\Http\Controllers\Admin\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contacts;
use App\Models\User;

class ContactController extends Controller
{
    public function listcontact(){
        $contacts = Contacts::all();
        return view('admin.contacts.contacts.listcontacts', compact('contacts'));
    }

    public function addcontactPost(Request $request){
        $request->validate([
            'full_name'         => 'required|string|max:255',
            'email'             => 'nullable|email|max:255',
            'phone'             => 'nullable|string|max:255',
            'company'           => 'nullable|string|max:255',
            'designation'       => 'nullable|string|max:255',
            'country'           => 'nullable|string|max:255',
            'city'              => 'nullable|string|max:255',
            'address'           => 'nullable|string',
            'source'            => 'nullable|string|max:255',
            'contact_type'      => 'nullable|string|max:50', // lead, customer, etc.
            'status'            => 'nullable|string|max:50', // new, in_progress, etc.
            'priority'          => 'nullable|string|max:50', // low, medium, high, urgent
            'message'           => 'nullable|string',
            'assigned_to'       => 'nullable|integer|exists:users,id',
            'tags'              => 'nullable|string|max:255', // comma separated
            'notes'             => 'nullable|string',
            'ip_address'        => 'nullable|ip',
            'utm_source'        => 'nullable|string|max:255',
            'utm_medium'        => 'nullable|string|max:255',
            'utm_campaign'      => 'nullable|string|max:255',
            'last_contacted_at' => 'nullable|date',
        ]);

        Contacts::create([
            'full_name'         => $request->full_name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'company'           => $request->company,
            'designation'       => $request->designation,
            'country'           => $request->country,
            'city'              => $request->city,
            'address'           => $request->address,
            'source'            => $request->source,
            'contact_type'      => $request->contact_type ?? 'lead',
            'status'            => $request->status ?? 'new',
            'priority'          => $request->priority ?? 'medium',
            'message'           => $request->message,
            'assigned_to'       => $request->assigned_to,
            'tags'              => $request->tags,
            'notes'             => $request->notes,
            'ip_address'        => $request->ip() ?? $request->ip_address,
            'utm_source'        => $request->utm_source,
            'utm_medium'        => $request->utm_medium,
            'utm_campaign'      => $request->utm_campaign,
            'last_contacted_at' => $request->last_contacted_at,
        ]);

        \Log::info('Contact added successfully.');
    
        return redirect()->route('admin.contacts.list')->with('success', 'Contact added successfully!');
    }

    public function addcontact(){
        $users = User::select('id', 'name')->get();
        return view('admin.contacts.contacts.addcontact', compact('users'));

    }

    public function viewcontact($id){
        $contact = Contacts::findOrFail($id);
        return view('admin.contacts.contacts.viewcontact', compact('contact'));
    }

    public function editcontact($id)
    {
        $contact = Contacts::findOrFail($id);
        return view('admin.contacts.contacts.editcontact', compact('contact'));
    }

    public function updatecontact(Request $request, $id)
    {
        $contact = Contacts::findOrFail($id);

        $request->validate([
            'full_name'         => 'required|string|max:255',
            'email'             => 'nullable|email|max:255',
            'phone'             => 'nullable|string|max:255',
            'company'           => 'nullable|string|max:255',
            'designation'       => 'nullable|string|max:255',
            'country'           => 'nullable|string|max:255',
            'city'              => 'nullable|string|max:255',
            'address'           => 'nullable|string',
            'source'            => 'nullable|string|max:255',
            'contact_type'      => 'nullable|string|max:50',
            'status'            => 'nullable|string|max:50',
            'priority'          => 'nullable|string|max:50',
            'message'           => 'nullable|string',
            'assigned_to'       => 'nullable|integer|exists:users,id',
            'tags'              => 'nullable|string|max:255',
            'notes'             => 'nullable|string',
            'ip_address'        => 'nullable|ip',
            'utm_source'        => 'nullable|string|max:255',
            'utm_medium'        => 'nullable|string|max:255',
            'utm_campaign'      => 'nullable|string|max:255',
            'last_contacted_at' => 'nullable|date',
        ]);

        $contact->update([
            'full_name'         => $request->full_name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'company'           => $request->company,
            'designation'       => $request->designation,
            'country'           => $request->country,
            'city'              => $request->city,
            'address'           => $request->address,
            'source'            => $request->source,
            'contact_type'      => $request->contact_type ?? 'lead',
            'status'            => $request->status ?? 'new',
            'priority'          => $request->priority ?? 'medium',
            'message'           => $request->message,
            'assigned_to'       => $request->assigned_to,
            'tags'              => $request->tags,
            'notes'             => $request->notes,
            'ip_address'        => $request->ip() ?? $request->ip_address,
            'utm_source'        => $request->utm_source,
            'utm_medium'        => $request->utm_medium,
            'utm_campaign'      => $request->utm_campaign,
            'last_contacted_at' => $request->last_contacted_at,
        ]);

        return redirect()->route('admin.contacts.list')->with('success', 'Contact updated successfully!');
    }

    public function deletecontact($id)
    {
        $contact = Contacts::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.contacts.list')->with('success', 'Contact deleted successfully!');
    }
}
