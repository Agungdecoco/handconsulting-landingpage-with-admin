<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LandingPageControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function access_index()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function accsess_services()
    {
        $response = $this->get('/services');

        $response->assertStatus(200);
    }

    public function access_article()
    {
        $response = $this->get('/article');

        $response->assertStatus(200);
    }

    public function access_post()
    {
        $response = $this->get(route('post', ['slug' => 'slug']));

        $response->assertStatus(200);
    }

    public function access_about()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
}
