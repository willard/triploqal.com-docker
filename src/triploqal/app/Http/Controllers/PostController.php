<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use View;

class PostController extends Controller
{
    /*
     * Controller function to render single post page.
     *
     * @param Post $post
     * @return View
     * */
    public function showSingle(Post $post): \Illuminate\Contracts\View\View
    {
        $data = [
            'title'     => $post->title,
            'caption'   => $post->caption
        ];
        return View::make('post.single', $data);
    }
}
