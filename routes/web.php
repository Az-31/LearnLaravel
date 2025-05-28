<?php

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
        'posts' => [
            [
                'id' => 1,
                'title' => 'Judul 1',
                'author' => 'Author 1',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam earum ex harum numquam, iure laboriosam unde repellendus doloremque f
            acere reiciendis incidunt cumque distinctio iusto qui excepturi minima autem ut ipsum?'
            ],
            [
                'id' => 2,
                'title' => 'Judul 2',
                'author' => 'Author 2',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, totam facilis. Eum, saepe nulla. Aliquam minima explicabo culpa quidem sed aperiam atque esse suscipit id, cupiditate inventore velit magnam cum.'
            ]

        ]
    ]);
});

Route::get('/posts/{id}', function ($id) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul 1',
            'author' => 'Author 1',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam earum ex harum numquam, iure laboriosam unde repellendus doloremque f
            acere reiciendis incidunt cumque distinctio iusto qui excepturi minima autem ut ipsum?'
        ],
        [
            'id' => 2,
            'title' => 'Judul 2',
            'author' => 'Author 2',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, totam facilis. Eum, saepe nulla. Aliquam minima explicabo culpa quidem sed aperiam atque esse suscipit id, cupiditate inventore velit magnam cum.'
        ]

    ];

    $post = Arr::first($posts, function($post) use ($id){
        return $post['id'] == $id;
    });

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
