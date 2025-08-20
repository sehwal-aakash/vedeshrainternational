<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\States;
use App\Models\Countries;

class Cities extends Model
{
    use HasFactory;

    // Define table if it's not plural (but here "cities" matches default, so optional)
    protected $table = 'cities';

    // Primary Key
    protected $primaryKey = 'id';

    // If primary key is auto-increment and integer (true by default, but can keep explicitly)
    public $incrementing = true;
    protected $keyType = 'int';

    // Timestamps (since you have created_at and updated_at fields)
    public $timestamps = true;

    // Fillable columns for mass assignment
    protected $fillable = [
        'name',
        'state_id',
        'state_code',
        'country_id',
        'country_code',
        'latitude',
        'longitude',
        'timezone',
        'flag',
        'wikiDataId',
    ];

    // Casts for specific data types
    protected $casts = [
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
        'flag' => 'boolean',
    ];

    /*
     |-------------------------------------------------
     | Relationships
     |-------------------------------------------------
     */

    // A city belongs to a state
    public function state()
    {
        return $this->belongsTo(States::class, 'state_id', 'id');
    }

    // A city belongs to a country
    public function country()
    {
        return $this->belongsTo(Countries::class, 'country_id', 'id');
    }
}
