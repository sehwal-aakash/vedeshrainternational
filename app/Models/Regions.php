<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\SubRegions;
use App\Models\Countries;

class Regions extends Model
{

    use HasFactory;
    // Table name (if it's not the plural of the model name)
    protected $table = 'regions';

    // Mass assignable attributes
    protected $fillable = [
        'name',
        'translations',
        'flag',
        'wikiDataId',
    ];

    // Casts
    protected $casts = [
        'translations' => 'array', // if stored as JSON
    ];

    // Relationship: One Region has many SubRegions
    public function subRegions()
    {
        return $this->hasMany(SubRegions::class, 'region_id');
    }

    public function countries()
    {
        return $this->hasMany(Countries::class, 'region_id');
    }
}
