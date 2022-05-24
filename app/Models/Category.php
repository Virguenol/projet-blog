<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'categories';

    /**
     * relationship between internal of the category
     *
     * @return BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * a category can have child categories
     *
     * @return HasMany
     */
    public function childrens()
    {
        return $this->hasMany(Category::class, 'parent_id');

    }
    /**
     * allows to autocomplete the slug
     *
     * @return Attribute
     */
    public static function slug()
    {
       return Attribute::make(
            get: fn ($value) => $value,
            set: fn ($value) => Str::slug($value),
        );

    }
    /**
     * a category can have multiple posts
     *
     * @return HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }


}
