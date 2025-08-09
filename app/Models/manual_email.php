<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class manual_email extends Model
{
    use HasFactory;

    protected $table = 'manual_email';

    protected $fillable = [
        'recipient_name',
        'recipient_email',
        'subject',
        'content_type',
        'template_id',
        'template_variables',
        'message',
    ];

    public function template()
    {
        return $this->belongsTo(EmailTemplate::class, 'template_id');
    }
}
