<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_unauthenticated_user_cannot_see_the_dashboard()
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(302);
    }

    public function test_the_authenticated_can_see_the_dashboard()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/dashboard');
        $response->assertStatus(200);
    }

    public function test_the_normal_user_cannot_see_the_posts()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/posts');
        $response->assertStatus(403);
    }

    public function test_the_admin_user_can_see_the_posts()
    {
        $admin = User::factory()->create(['is_admin' => 1]);

        $response = $this->actingAs($admin)->get('/posts');
        $response->assertStatus(200);
    }
    public function test_the_admin_user_can_see_the_tags()
    {
        $admin = User::factory()->create(['is_admin' => 1]);

        $response = $this->actingAs($admin)->get('/tags');
        $response->assertStatus(200);
    }
}
