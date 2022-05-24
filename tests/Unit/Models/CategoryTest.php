<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\RefreshDatabase;
//use PHPUnit\Framework\TestCase;

/**
 * @group unit
 * @group category
 */
class CategoryTest extends TestCase
{
   use RefreshDatabase;

   /** @test */
   public function can_create_category_without_factory()
   {
        $actual = Category::create([
            'title' => 'mon titre',
            'slug' => ''
        ]);
       // dd($actual);
        $this->assertInstanceOf(Category::class, $actual);
        $this->assertEquals('', $actual->slug);
   }
   /** @test */
   public function can_create_category_with_factory()
   {
       $actual = Category::factory()->create([
        'title' => 'mon titre',
        'slug' => 'mon-titre',
       ]);
      // dd($actual);
       $this->assertInstanceOf(Category::class, $actual);
       $this->assertEquals('mon-titre', $actual->slug);
   }

    /**
     * @test
     */
    public function category_can_have_parent()
    {
        $category = Category::factory()->create();

        $this->assertModelExists($category);
        $this->assertDatabaseCount('categories', 1);

    }

    /**
     * @test
     */
    public function category_can_have_childrens()
    {
        Category::factory()
        ->has(Category::factory()->count(3), 'childrens')
        ->create();

       $this->assertDatabaseCount('categories', 4);

    }


    /**
     * @test
     */
    public function category_may_have_posts_without_factory()
    {
        $actual = Category::create([
            'title' => 'mon titre',
            'slug' => 'mon-titre'
        ]);

        $actual = Post::factory(3)->create([
             'category_id' => 1,
             'title' => 'mon premier titre',
             'slug' => 'mon-premier-titre',
             'content' => 'moncontenu'
        ]);
        $this->assertDatabaseCount('categories', 1);
        $this->assertDatabaseCount('posts', 3);
        $this->assertDatabaseHas('posts', [
            'title' => 'mon premier titre',
        ]);
    }
    /** @test */
    public function category_may_have_posts_with_factory()
    {
         Category::factory()->has(Post::factory([
            'category_id' => 1,
            'title' => 'mon premier titre',
            'slug' => 'mon-premier-titre',
            'content' => 'moncontenu'
        ])->count(3), 'posts')->create();

        $this->assertDatabaseCount('categories', 1);
        $this->assertDatabaseCount('posts', 3);

    }

}
