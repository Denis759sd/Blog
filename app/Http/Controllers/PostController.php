<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show() {
        $posts = Post::all();

        return view('posts.show', [
            'posts' => $posts,
            'color_posts' => 'text-secondary',
            'color_home' => 'text-white']);
    }
}
