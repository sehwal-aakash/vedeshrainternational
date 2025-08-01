<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industries extends Model
{
    protected $table = 'industries';

    protected $fillable = [
        'name',
        'slug',
        'title',
        'short_description',
        'icon',
    ];
}
