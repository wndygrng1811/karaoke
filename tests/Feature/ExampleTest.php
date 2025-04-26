<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
// use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
<<<<<<< HEAD
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
=======
     */
    public function test_the_application_returns_a_successful_response(): void
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
