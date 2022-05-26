<?php

namespace Tests\Unit\Models;

use App\Models\Tag;
use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

//use PHPUnit\Framework\TestCase;

/**
 * @group unit
 * @group post
*/
class PostTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * @test
     */
    public function can_create_post_without_factory()
    {
        $post = Post::create([
            'category_id' => 2,
            'user_id' => 1,
            'tag_id' => 1,
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
            'user_id' => 1,
            'tag_id' => 1,
            'title' => 'mon premier titre',
            'slug' => 'mon-premier-titre',
            'content' => 'moncontenu'
        ]);
        $this->assertDatabaseCount('posts', 3);
    }
    /** @test */
    public function a_post_belongs_to_only_one_category()
    {
        Post::factory(3)->for(Category::factory())->create([
            'category_id' => 2,
            'user_id' => 1,
            'tag_id' => 1,
            'title' => 'mon premier titre',
            'slug' => 'mon-premier-titre',
            'content' => 'moncontenu'
        ]);

        $this->assertDatabaseCount('posts', 3);
    }
    /** @test */
    public function a_post_belongs_to_only_one_user()
    {
        $posts = Post::factory()->for(User::factory())->create([
            'category_id' => 2,
            'user_id' => 1,
            'tag_id' => 1,
            'title' => 'mon premier titre',
            'slug' => 'mon-premier-titre',
            'content' => 'moncontenu'
        ]);
        $this->assertModelExists($posts);
    }
    /** @test */
    public function a_post_can_have_multiple_tags()
    {
        $post = Post::factory()->create();
        $tag = Tag::factory()->create([
            'name' => 'php',
            'slug' => 'php'
        ]);

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $post->tags);

    }

}
