<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function show() {
        $posts = Post::all();

        return view('post.show', [
            'posts' => $posts,
            'user' => User::class,
            'color_posts' => 'text-secondary'
        ]);
    }

    public function create (Request $request) {
        if ($request->isMethod('get')) {
            return view('post.create');
        }

        if ($request->isMethod('post')) {
            $post = $request->validate([
                'title' => 'required|min:3',
                'description' => 'required|min:2'
            ]);

            $post['user_id'] = Auth::user()->getAuthIdentifier();

            Post::create($post);

            return view('home', ['color_home' => 'text-secondary'])->with('message', 'Post was created successfully');
        }
    }
}
