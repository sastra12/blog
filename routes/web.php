<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Category;


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

Route::get('/', [PostController::class, 'index']);
// Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('detail/{post:slug}', [PostController::class, 'show'])->name('detail');
Route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
})->name('categories');
// Route::get('categories', function () {
//     return view('categories', [
//         'title' => 'Post Categories',
//         'active' => 'categories',
//         'categories' => Category::all()
//     ]);
// });

// Route::get('categories/{category:slug}', function (Category $category) {
//     return view('home', [
//         'title' => "Post By Category : $category->name",
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// })->name('category');

// Route::get('author/{author:username}', function (User $author) {
//     return view('home', [
//         'title' => "Post By Author: $author->name",
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// })->name('author');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth')->name('dashboard');

Route::resource('post', DashboardPostController::class)
    ->middleware('auth');
