<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GetQuoteForm extends Model
{
    // Define the table if it's not the default "contact_forms"
    protected $table = 'getquoteform';

    // Define the fields that are mass assignable
    protected $fillable = [
        'firstname',
        'lastname',
        'emailaddress',
        'mobilenumber',
        'companybusiness',
        'website',
        'selectservices',
        'otherservices',
        'selectregion',
        'message',
        'ip_address',
        'pageurl'
    ];
}
