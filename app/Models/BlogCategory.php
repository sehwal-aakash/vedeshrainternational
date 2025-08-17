<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogCategory extends Model
{
    protected $table = 'blogcategory';

    // Mass assignable fields
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'banner_image',
        'parent_id',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'is_active',
    ];

    // Cast fields
    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Relationship: Category has many blog posts
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Blog::class, 'category_id');
    }

    /**
     * Relationship: Parent category (self-referencing)
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'parent_id');
    }

    /**
     * Relationship: Child categories (self-referencing)
     */
    public function children(): HasMany
    {
        return $this->hasMany(BlogCategory::class, 'parent_id');
    }

    /**
     * Optional: Scope for active categories
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

}
