<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignLog extends Model
{
    protected $fillable = [
        'campaign_id', 
        'contact_id', 
        'status', 
        'sent_at'
    ];
}
