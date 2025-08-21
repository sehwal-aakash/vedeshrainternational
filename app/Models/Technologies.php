<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technologies extends Model
{
    protected $table = 'technologies';

    protected $fillable = [
        'name',
        'slug',
        'title',
        'short_description',
        'icon',
    ];
}
