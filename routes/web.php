<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'] );

Route::get('/post', function() {
    return Post::all();
});

// Admin
Route::group([
    'prefix' => 'admin', 
    'middleware' => 'auth'],
     function() {
        Route::get(('/'), [AdminController::class, 'index'])->name('dashboard');
        Route::get('/posts', [PostsController::class, 'index'])->name('admin.posts.index');
        Route::get('/posts/create', [PostsController::class, 'create'])->name('admin.posts.create');
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
