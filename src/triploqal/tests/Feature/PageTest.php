<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class PageTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserCanViewThePageManager()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/dashboard/page');

        $response->assertStatus(200);
    }
}
