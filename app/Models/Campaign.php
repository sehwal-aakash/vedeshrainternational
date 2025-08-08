<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'name', 
        'subject', 
        'sender_name', 
        'sender_email', 
        'email_body', 
        'scheduled_at', 
        'status'
    ];
}
