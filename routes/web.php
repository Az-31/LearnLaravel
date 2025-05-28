<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        'header' => 'Home Page',
        'title' => 'Home'
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'header' => 'Blog Page',
        'title' => 'Blog',
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{id}', function ($id) {

    $post = Post::find($id);

    // dd($post);

    return view('post', ['title' => 'Single Post' ,'header' => 'Blog Page', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', [
        'header' => 'About',
        'title' => 'About',
        'name' => 'Azzznl'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'header' => 'Contact',
        'title' => 'Contact'
    ]);
});
