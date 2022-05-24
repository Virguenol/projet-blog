<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


/**
 * @author archange <virguenolngot@email.com>
 */
class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * A post can only belong to one category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
       return $this->belongsTo(Category::class);
    }

    /**
     * A post cannot belong to a single user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * A post can have multiple tags
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tag(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
