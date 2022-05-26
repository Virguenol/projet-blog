<?php

namespace Tests\Unit\Models;

use App\Models\Tag;
use Tests\TestCase;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
//use PHPUnit\Framework\TestCase;


class TagTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic unit test example.
     * @test
     * @return void
     */
    public function a_tag_belongs_to_several_posts()
    {
        $post = Post::factory()->create();
        $tag = Tag::factory()->create([
            'name' => 'php',
            'slug' => 'php'
        ]);


        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $tag->posts);
    }
}
