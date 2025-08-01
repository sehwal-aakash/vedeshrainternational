<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    // Define the table if it's not the default "contact_forms"
    protected $table = 'contactform';

    // Define the fields that are mass assignable
    protected $fillable = [
        'firstname',
        'lastname',
        'emailaddress',
        'mobilenumber',
        'companybusiness',
        'selectservices',
        'otherservices',
        'message',
        'ip_address',
        'pageurl'
    ];
}
