<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * a post can only belong to one category
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
       return $this->belongsTo(Category::class);
    }

    /**
     * a post cannot belong to a single user
     *
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * a post can have multiple tags
     *
     * @return BelongsToMany
     */
    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
