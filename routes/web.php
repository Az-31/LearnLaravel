<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/blog', function () {
    return view('blog', [
        'header' => 'Blog Page',
        'title' => 'Blog'
    ]);
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

