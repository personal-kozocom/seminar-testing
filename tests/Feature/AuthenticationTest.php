<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_profile()
    {
        $user = User::factory()->create();
 
        $response = $this->actingAs($user)
                         ->get('profile');
        
        $response->assertStatus(200);
    }
}
