<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        Inertia::setRootView('admin');

        $posts = Post::all();

        return Inertia::render('Admin/Posts/Index', [
            'posts' => $posts
        ]);
    }
}
