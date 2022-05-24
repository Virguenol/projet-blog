<?php

namespace Tests\Unit\Models;

use App\Models\Category;
use Tests\TestCase;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
//use PHPUnit\Framework\TestCase;

/** @group post */
class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function can_create_post_without_factory()
    {
        $post = Post::create([
            'category_id' => 2,
            'title' => 'mon premier titre',
            'slug' => 'mon-premier-titre',
            'content' => 'moncontenu'
        ]);

        $this->assertDatabaseCount('posts',1);
    }
    /** @test */
    public function can_create_post_with_factory()
    {
        $post = Post::factory(3)->create([
            'category_id' => 2,
            'title' => 'mon premier titre',
            'slug' => 'mon-premier-titre',
            'content' => 'moncontenu'
        ]);
        $this->assertDatabaseCount('posts', 3);
    }
    /** @test */
    public function a_position_belongs_to_only_one_category()
    {
        Post::factory(3)->for(Category::factory())->create([
            'category_id' => 2,
            'title' => 'mon premier titre',
            'slug' => 'mon-premier-titre',
            'content' => 'moncontenu'
        ]);

        $this->assertDatabaseCount('posts', 3);
    }


}
