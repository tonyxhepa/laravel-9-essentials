<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_we_have_no_posts_on_welcome_page()
    {
        $response = $this->get('/');

        $response->assertSeeText('No Posts');
    }

    public function test_the_post_we_created_exists()
    {
        $post = Post::factory()->create();

        $response = $this->get('/');

        $this->assertDatabaseCount('posts', 1);
        $this->assertDatabaseHas('posts', [
            'title' => $post->title,
        ]);

        $response->assertSeeText($post->title);
    }
}
