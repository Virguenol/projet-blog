<?php

namespace Tests\Unit\Models;

use App\Models\Post;
use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *@test
     * @return void
     */
    public function a_user_can_have_multiple_posts()
    {
       $posts = Post::factory()->for(User::factory()->create());
    }
}
