<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

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

    public function store(Request $request)
    {
        
        // Validaciones
        // $request->validate([
        //     'title' => 'required|min:5|max:100',
        //     'excerpt' => 'required|min:5|max:255',
        //     'body' => 'required|min:5',
        //     'category_id' => 'required|exists:categories,id',
        //     'published_at' => 'required|date',
        //     'tags' => 'required|array'
        // ]);

        // $post = Post::create($request->only('title', 'excerpt', 'body', 'category_id', 'published_at'));

        // $post->tags()->attach($request->tags);

        // return redirect()->route('admin.posts.index');
        // \Log::info($request->all());

        $post = new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->published_at = Carbon::parse($request->get('published_at'));
        $post->category_id = $request->get('category');
        $post->excerpt = $request->get('excerpt');
        
        $post->save();

        $post->tags()->attach($request->get('tags'));

        return back()->with('success', 'Post creado correctamente');
    }
}
