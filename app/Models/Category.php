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

    /** @test */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function childrens(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');

    }

    public static function slug(): Attribute
    {
       return Attribute::make(
            get: fn ($value) => $value,
            set: fn ($value) => Str::slug($value),
        );

    }
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }


}
