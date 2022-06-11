<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_welcome_page_works()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Welcome');
    }
    public function test_the_contact_page_works()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSeeText('Contact');
    }
}
