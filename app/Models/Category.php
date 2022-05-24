<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;


/**
 * @author archange <virguenolngot@email.com>
 */
class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'categories';

    /**
     * Relationship between internal of the category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * A category can have child categories
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childrens()
    {
        return $this->hasMany(Category::class, 'parent_id');

    }
    /**
     * Allows to autocomplete the slug
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
     * A category can have multiple posts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }


}
