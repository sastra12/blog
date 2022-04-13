<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('detail/{post:slug}', [PostController::class, 'show'])->name('detail');
Route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
})->name('categories');

Route::get('categories/{category:slug}', function (Category $category) {
    return view('home', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load('category', 'author'),
    ]);
})->name('category');

Route::get('author/{author:username}', function (User $author) {
    return view('home', [
        'title' => "Post By Author: $author->name",
        'posts' => $author->posts->load('category', 'author'),
    ]);
})->name('author');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');
