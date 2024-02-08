<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\AdminPostsController;

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

Route::get('/blog/{post}', [PostsController::class, 'show'])->name('posts.show');

// Admin
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth'],
     function() {
        Route::get(('/'), [AdminController::class, 'index'])->name('dashboard');
        Route::get('/posts', [AdminPostsController::class, 'index'])->name('admin.posts.index');
        Route::get('/posts/create', [AdminPostsController::class, 'create'])->name('admin.posts.create');
        Route::post('/posts/store', [AdminPostsController::class, 'store'])->name('admin.posts.store');
        Route::get('/posts/{post}', [AdminPostsController::class, 'edit'])->name('admin.posts.edit');
        Route::put('/posts/{post}', [AdminPostsController::class, 'update'])->name('admin.posts.update');
        Route::post('/posts/{post}/photos', [PhotoController::class, 'store'])->name(('admin.posts.photos.store'));
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
