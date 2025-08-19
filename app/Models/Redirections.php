<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redirections extends Model
{
    protected $table = 'redirections';

    protected $fillable = [
        'redirection_from',
        'redirection_to'
    ];
}
