<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'subject', 'content'];

    public function manualEmails()
    {
        return $this->hasMany(ManualEmail::class, 'template_id');
    }
}
