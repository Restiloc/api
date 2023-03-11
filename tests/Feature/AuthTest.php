<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Expert;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    private string $password = 'password123';

    public function test_login_with_good_credentials(): void
    {
        $user = Expert::first();

        $response = $this->postJson('/api/auth/login', [
            'identifier' => $user->username,
            'password' => $this->password,
        ]);

        $response->assertStatus(200);

        $this->assertArrayHasKey('token', $response->json());

        $this->assertEquals([
            "status" => true,
            "message" => "Expert logged in successfully",
            "token" => $response->json()['token']
        ], $response->json());
    }

    public function test_login_with_wrong_credentials(): void
    {
        $response = $this->postJson('/api/auth/login', [
            'identifier' => 'jo.usr',
            'password' => $this->password,
        ]);
        $response->assertStatus(401);
        $this->assertEquals([
            "status" => false,
            "message" => "Email or Username and Password does not match with our record."
        ], $response->json());
    }
}
