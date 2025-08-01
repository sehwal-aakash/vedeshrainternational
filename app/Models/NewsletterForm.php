<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsletterForm extends Model
{
    // Define the table if it's not the default "contact_forms"
    protected $table = 'newsletterform';

    // Define the fields that are mass assignable
    protected $fillable = [
        'newsletterforminput',
        'ip_address',
        'pageurl'
    ];
}
