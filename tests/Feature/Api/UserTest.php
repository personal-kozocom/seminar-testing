<?php

namespace Tests\Feature\Api;

use Spectator\Spectator;
use Tests\TestCase;

class UserTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->withoutExceptionHandling();
        Spectator::using('api-specs.yml');
        $response = $this->get('/api/users');

        $response->assertValidRequest()
            ->assertValidResponse();
        $response->assertStatus(200);
    }
}
