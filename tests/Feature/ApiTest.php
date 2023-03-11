<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Expert;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use function PHPUnit\Framework\assertIsArray;

class ApiTest extends TestCase
{
    private string $password = 'password123';

    private function auth(): array
    {
        $user = Expert::first();

        $response = $this->postJson('/api/auth/login', [
            'identifier' => $user->username,
            'password' => $this->password,
        ]);

        return $response->json();
    }

    public function test_me(): void
    {
        $response = $this->getJson('/api/me', ['Authorization' => 'Bearer ' . $this->auth()['token']]);
        $response->assertStatus(200);

        $this->assertEquals([
            "id" => $response->json()['id'],
            "lastName" => $response->json()['lastName'],
            "firstName" => $response->json()['firstName'],
            "email" => $response->json()['email'],
            "email_verified_at" => $response->json()['email_verified_at'],
            "phoneNumber" => $response->json()['phoneNumber'],
            "username" => $response->json()['username'],
            "created_at" => $response->json()['created_at'],
            "updated_at" => $response->json()['updated_at']
        ], $response->json());
    }

    public function test_me_missions(): void
    {
        $response = $this->getJson('/api/me/missions', ['Authorization' => 'Bearer ' . $this->auth()['token']]);
        $response->assertStatus(200);

        $this->assertIsArray($response->json());
    }

    public function test_experts(): void
    {
        $response = $this->getJson('/api/experts', ['Authorization' => 'Bearer ' . $this->auth()['token']]);
        $response->assertStatus(200);

        $this->assertIsArray($response->json());
    }

    public function test_vehicles(): void
    {
        $response = $this->getJson('/api/vehicles', ['Authorization' => 'Bearer ' . $this->auth()['token']]);
        $response->assertStatus(200);

        $this->assertIsArray($response->json());
    }
}
