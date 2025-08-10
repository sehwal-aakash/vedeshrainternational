<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\manual_email;

class EmailTemplate extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'subject', 'content'];

    public function manualEmails()
    {
        return $this->hasMany(manual_email::class, 'template_id');
    }
}
