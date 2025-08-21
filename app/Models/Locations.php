<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    // Table name (agar default 'locations' se different ho)
    protected $table = 'locations';

    // Mass assignable fields
    protected $fillable = [
        'page_type',        // service / industry / technology
        'page_id',          // selected service/industry/technology ID
        'template_name',    // blade template file
        'page_slug',        // url slug
        'meta_title',       // SEO meta title
        'meta_description', // SEO meta description
        'meta_keywords',    // SEO keywords
        'status'            // active / inactive
    ];

    /**
     * Relationships to fetch the actual Service, Industry, Technology
     */

    public function service()
    {
        return $this->belongsTo(Services::class, 'page_id')->where('type', 'service');
    }

    public function industry()
    {
        return $this->belongsTo(Industries::class, 'page_id')->where('type', 'industry');
    }

    public function technology()
    {
        return $this->belongsTo(Technologies::class, 'page_id')->where('type', 'technology');
    }

    /**
     * Helper to get the related model based on page_type
     */
    public function page()
    {
        switch ($this->page_type) {
            case 'service':
                return $this->service();
            case 'industry':
                return $this->industry();
            case 'technology':
                return $this->technology();
            default:
                return null;
        }
    }
}
