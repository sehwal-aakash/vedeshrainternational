<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Regions;
use App\Models\Countries;

class SubRegions extends Model
{
    // Table name (optional if naming convention matches)
    protected $table = 'subregions';

    // Mass assignable fields
    protected $fillable = [
        'name',
        'translations',
        'region_id',
        'flag',
        'wikiDataId',
    ];

    // Casts
    protected $casts = [
        'translations' => 'array', // handle JSON column
    ];

    // Relationships
    public function region()
    {
        return $this->belongsTo(Regions::class, 'region_id');
    }

    public function countries()
    {
        return $this->hasMany(Countries::class, 'subregion_id');
    }
}
