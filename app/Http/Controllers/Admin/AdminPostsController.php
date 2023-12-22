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

    public function create()
    {   
        Inertia::setRootView('admin');

        $categories = Category::all();
        $tags = Tag::all();

        return Inertia::render('Admin/Posts/Create', with([
            'categories' => $categories,
            'tags' => $tags
        ]));
    }

    public function store(Post $post, Request $request)
    {
        $this->validate($request, ['title' => 'required|min:5|max:60']);

        $post = Post::create([
            'title' => $request->get('title'),
            // 'url' => Str::slug($request->get('title')),
        ]);

        return to_route('admin.posts.edit', $post);
    }

    public function edit(Post $post)
    {

        return Inertia::render('Admin/Posts/Edit',[
            'post' => $post
        ]);
    }

    // public function store(Request $request)
    // {
    //     // Renombra 'category' a 'category_id' antes de la validación.
    //     $request->merge(['category_id' => $request->input('category')]);
        
    //     // Validaciones
    //     $request->validate([
    //         'title' =>['required', 'min:5', 'max:60'],
    //         'body' => ['required', 'min:5', 'max:500'],
    //         'category_id' => ['required', 'exists:categories,id'],
    //         'excerpt' => ['required', 'min:5', 'max:100']
    //     ]);

    //     // \Log::info($request->all());

    //     $post = new Post;
    //     $post->title = $request->input('title');
    //     $post->url = Str::slug($request->input('title'));
    //     $post->body = $request->input('body');
    //     $post->published_at = $request->input('published_at') ? Carbon::parse($request->get('published_at')) : null;
    //     $post->category_id = $request->input('category');
    //     $post->excerpt = $request->input('excerpt');
        
    //     $post->save();

    //     $post->tags()->attach($request->get('tags'));

    //     return back()->with('success', 'Post creado correctamente');
    // }
}
