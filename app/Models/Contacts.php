<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Contacts extends Model
{

    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'company',
        'designation',
        'country',
        'city',
        'address',
        'source',
        'contact_type',
        'status',
        'priority',
        'message',
        'assigned_to',
        'tags',
        'notes',
        'ip_address',
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'last_contacted_at',
    ];

}
