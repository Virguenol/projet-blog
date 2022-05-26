<?php

namespace Tests\Unit\Models;

use App\Models\Post;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
//use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *@test
     * @return void
     */
    public function a_user_can_have_multiple_posts()
    {
       $user = User::factory()->for(Post::factory()->count(3)->create());
       $this->assertDatabaseCount('posts', 3);

    }


}
