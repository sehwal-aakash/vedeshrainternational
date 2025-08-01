<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PopupForm extends Model
{
    // Define the table if it's not the default "contact_forms"
    protected $table = 'popupform';

    // Define the fields that are mass assignable
    protected $fillable = [
        'name',
        'emailaddress',
        'mobilenumber',
        'companybusiness',
        'selectservices',
        'otherservices',
        'ip_address',
        'pageurl'
    ];
}
