<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    // Table name (if not plural of model)
    protected $table = 'countries';

    // Primary key
    protected $primaryKey = 'id';

    // Auto-incrementing key is an integer
    public $incrementing = true;

    // Primary key type
    protected $keyType = 'int';

    // Timestamps (created_at, updated_at)
    public $timestamps = true;

    // Fillable fields for mass assignment
    protected $fillable = [
        'name',
        'iso3',
        'numeric_code',
        'iso2',
        'phonecode',
        'capital',
        'currency',
        'currency_name',
        'currency_symbol',
        'tld',
        'native',
        'region',
        'region_id',
        'subregion',
        'subregion_id',
        'nationality',
        'timezones',
        'translations',
        'latitude',
        'longitude',
        'emoji',
        'emojiU',
        'flag',
        'wikiDataId'
    ];

    // If you want date casting
    protected $casts = [
        'latitude'   => 'decimal:8',
        'longitude'  => 'decimal:8',
        'flag'       => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relationships
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function subregion()
    {
        return $this->belongsTo(SubRegion::class, 'subregion_id');
    }
}
