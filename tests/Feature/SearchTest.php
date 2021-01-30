<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SearchTest extends TestCase
{
    /**
     * A basic search feature test.
     *
     * @return void
     */
    public function test_search_feature()
    {
        $response = $this->get('/?search=superman')->assertViewHasAll([
            'search_query',
            'superheroes'
        ]);
        $response->assertStatus(200);
        $response->assertViewIs('search');
    }

    public function test_index()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertViewIs('index');
    }
}
