@extends('layouts.adminlayout')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">View Contact</h5>
                    <a href="{{ route('admin.contacts.list') }}">
                        <span class="btn btn rounded-pill btn-primary-100 text-primary-600 radius-8 px-24 py-4">Back</span>
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.contacts.update.post', $contact->id) }}" method="POST">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-6">
                                <label for="full_name" class="form-label">Full Name</label>
                                <input type="text" name="full_name" class="form-control" id="full_name" required value="{{ $contact->full_name }}" readonly>
                            </div>
                            <div class="col-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" required value="{{ $contact->email }}" readonly>
                            </div>
                            <div class="col-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" name="phone" class="form-control" id="phone" value="{{ $contact->phone }}" readonly>
                            </div>
                            <div class="col-6">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" name="company" class="form-control" id="company" value="{{ $contact->company }}" readonly>
                            </div>
                            <div class="col-6">
                                <label for="designation" class="form-label">Designation</label>
                                <input type="text" name="designation" class="form-control" id="designation" value="{{ $contact->designation }}" readonly>
                            </div>
                            <div class="col-6">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" name="country" class="form-control" id="country" value="{{ $contact->country }}" readonly>
                            </div>
                            <div class="col-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" name="city" class="form-control" id="city" value="{{ $contact->city }}" readonly>
                            </div>
                            <div class="col-6">
                                <label for="source" class="form-label">Source</label>
                                <input type="text" name="source" class="form-control" id="source" value="{{ $contact->source }}" readonly>
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <textarea name="address" class="form-control" id="address" rows="3" readonly>{{ $contact->address }}</textarea>
                            </div>
                            <div class="col-6">
                                <label for="contact_type" class="form-label">Contact Type</label>
                                <input type="text" name="contact_type" class="form-control" id="contact_type" value="{{ $contact->contact_type }}" readonly>
                            </div>
                            <div class="col-6">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" name="status" class="form-control" id="status" value="{{ $contact->status }}" readonly>
                            </div>
                            <div class="col-12">
                                <label for="priority" class="form-label">Priority</label>
                                <input type="text" name="priority" class="form-control" id="priority" value="{{ $contact->priority }}" readonly>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="message" class="form-control" id="message" rows="3" readonly>{{ $contact->message }}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="tags" class="form-label">Tags</label>
                                <textarea name="tags" class="form-control" id="tags" rows="3" readonly>{{ $contact->tags }}</textarea>
                            </div>
                            <div class="col-6">
                                <label for="assigned_to" class="form-label">Assigned to</label>
                                <input type="text" name="assigned_to" class="form-control" id="assigned_to" value="{{ $contact->assigned_to }}" readonly>
                            </div>
                            <div class="col-6">
                                <label for="ip_address" class="form-label">IP Address</label>
                                <input type="text" name="ip_address" class="form-control" id="ip_address" value="{{ $contact->ip_address }}" readonly>
                            </div>
                            <div class="col-12">
                                <label for="notes" class="form-label">Notes</label>
                                <textarea name="notes" class="form-control" id="notes" rows="3" readonly>{{ $contact->notes }}</textarea>
                            </div>
                            <div class="col-6">
                                <label for="utm_source" class="form-label">UTM Source</label>
                                <input type="text" name="utm_source" class="form-control" id="utm_source" value="{{ $contact->utm_source }}" readonly>
                            </div>
                            <div class="col-6">
                                <label for="utm_medium" class="form-label">UTM Medium</label>
                                <input type="text" name="utm_medium" class="form-control" id="utm_medium" value="{{ $contact->utm_medium }}" readonly>
                            </div>
                            <div class="col-6">
                                <label for="utm_campaign" class="form-label">UTM Campaign</label>
                                <input type="text" name="utm_campaign" class="form-control" id="utm_campaign" value="{{ $contact->utm_campaign }}" readonly>
                            </div>
                            <div class="col-6">
                                <label for="last_contacted_at" class="form-label">Last Contacted At</label>
                                <input type="text" name="last_contacted_at" class="form-control" id="last_contacted_at" value="{{ $contact->last_contacted_at }}" readonly>
                            </div>
                            {{-- <div class="col-12 mt-60">
                                <button type="submit" class="btn btn-primary-600">Update</button>
                            </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
