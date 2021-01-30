<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DetailsTest extends TestCase
{
    /**
     * A basic testing /details route.
     *
     * @return void
     */
    public function test_details_redirection()
    {
        $response = $this->get('/details');
        $response->assertRedirect('/');
        $response->assertStatus(302);
    }

    public function test_details_api_response()
    {
        $response = $this->get('/details/354')->assertViewHasAll([
            'details'
        ]);
        $response->assertStatus(200);
        $response->assertViewIs('details');
    }
}
