<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($id)
    {
        $post = Post::with('category', 'tags')->find($id);

        return Inertia::render('Show', [
            'post' => $post
        ]);
    }
}
