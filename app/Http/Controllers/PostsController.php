<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        $post->load('category', 'tags');

        return Inertia::render('Show', [
            'post' => $post
        ]);
    }
}
