<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainPages extends Model
{

    protected $table = 'mainpages';

    protected $fillable = [
        'name',
        'slug',
        'title',
    ];
}
