<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Shows Post
     */
    public function show($slug)
    {
        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
