<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Post;
use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class AdminPostsController extends Controller
{
    public function index()
    {
        Inertia::setRootView('admin');

        $posts = Post::all();

        return Inertia::render('Admin/Posts/Index',[
            'posts' => $posts
        ]);
    }

    // public function create()
    // {   
    //     Inertia::setRootView('admin');

    //     $categories = Category::all();
    //     $tags = Tag::all();

    //     return Inertia::render('Admin/Posts/Create', with([
    //         'categories' => $categories,
    //         'tags' => $tags
    //     ]));
    // }

    public function store(Post $post, Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:5', 'max:60']
        ]);

        $post = Post::create([
            'title' => $request->get('title'),
            'url' => Str::slug($request->get('title')),
        ]);

        return to_route('admin.posts.edit', with([
            'post' => $post,
        ]
    ));
    }

    public function edit(Post $post)
    {
        Inertia::setRootView('admin');

        $categories = Category::all();
        $tags = Tag::all();

        return Inertia::render('Admin/Posts/Edit', 
            with([
                'post' => $post,
                'categories' => $categories,
                'tags' => $tags
            ]));
    }

    public function update(Post $post, Request $request)
    {
        // Renombra 'category' a 'category_id' antes de la validación.
        $request->merge(['category_id' => $request->input('category')]);
        
        // Validaciones
        $request->validate([
            'title' =>['required', 'min:5', 'max:60'],
            'body' => ['required', 'min:5', 'max:500'],
            'category_id' => ['required', 'exists:categories,id'],
            'excerpt' => ['required', 'min:5', 'max:100']
        ]);

          // \Log::info($request->all());

          $post = Post::create([
            'title' => $request->get('title'),
            'url' => Str::slug($request->get('title')),
            'body' => $request->get('body'),
            'published_at' => $request->get('published_at') ? Carbon::parse($request->get('published_at')) : null,
            'category_id' => $request->get('category_id'),
            'excerpt' => $request->get('excerpt')
        ]);

        $post->tags()->sync($request->get('tags'));
        return back()->with('success', 'Tu publicación ha sido guardada.');
    }
}
