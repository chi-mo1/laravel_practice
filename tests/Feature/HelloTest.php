<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class HelloTest extends TestCase
{

    use RefreshDatabase;

    public function testHello()
    {
        $this->assertTrue(true);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/hello');
        $response->assertStatus(302);

        /** @var Illuminate\Contracts\Auth\Authenticatable $user */
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/hello');
        $response->assertStatus(200);

        $response = $this->get('/no_route');
        $response->assertStatus(404);
    }
}
