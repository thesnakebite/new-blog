<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    
    public function run(): void
    {
        Post::truncate();
        Category::truncate();

        $category = new Category();
        $category->name = "Categoría 1";
        $category->save();

        $category = new Category();
        $category->name = "Categoría 2";
        $category->save();

        $post = new Post();
        $post->title = "Mi primer post";
        $post->excerpt = "Extracto de mi primer post";
        $post->body = "<p>Contenido de mi primer post</p>";
        $post->category_id = 1;
        $post->published_at = Carbon::now()->subDays(4);
        $post->save();

        $post = new Post();
        $post->title = "Mi segundo post";
        $post->excerpt = "Extracto de mi segundo post";
        $post->body = "<p>Contenido de mi segundo post</p>";
        $post->category_id = 2;
        $post->published_at = Carbon::now()->subDays(3);
        $post->save();

        $post = new Post();
        $post->title = "Mi tercer post";
        $post->excerpt = "Extracto de mi tercer post";
        $post->body = "<p>Contenido de mi tercer post</p>";
        $post->category_id = 1;
        $post->published_at = Carbon::now()->subDay(2);
        $post->save();

        $post = new Post();
        $post->title = "Mi cuarto post";
        $post->excerpt = "Extracto de mi cuarto post";
        $post->body = "<p>Contenido de mi cuarto post</p>";
        $post->category_id = 2;
        $post->published_at = Carbon::now()->subDays(1);
        $post->save();
    }
}
