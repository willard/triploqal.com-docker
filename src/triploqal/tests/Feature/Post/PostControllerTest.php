<?php

namespace Tests\Feature\Post;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;

class PostControllerTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Determine if Post has Single Post.
     *
     * @return void
     */
    public function testPostHasSinglePost()
    {
        $post = Post::factory()->create();
        $response = $this->get('/post/' . $post->uuid);
        $response->assertStatus(200);
    }

    /** @test */
    public function user_can_create_a_new_post()
    {
        $post = Post::factory()->create();

        $response = $this->get('/post/' . $post->uuid);

        $response->assertStatus(200);
    }



}
