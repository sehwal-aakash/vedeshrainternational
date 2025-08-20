<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Countries;

class States extends Model
{
    protected $table = 'states';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'country_id',
        'country_code',
        'fips_code',
        'iso2',
        'iso3166_2',
        'type',
        'level',
        'parent_id',
        'native',
        'latitude',
        'longitude',
        'timezone',
        'flag',
        'wikiDataId',
    ];

    /**
     * Relationship: State belongs to a Country
     */
    public function country()
    {
        return $this->belongsTo(Countries::class, 'country_id');
    }

    /**
     * Relationship: A State may have a parent state (for hierarchical structures)
     */
    public function parent()
    {
        return $this->belongsTo(States::class, 'parent_id');
    }

    /**
     * Relationship: A State may have many child states
     */
    public function children()
    {
        return $this->hasMany(States::class, 'parent_id');
    }
}
