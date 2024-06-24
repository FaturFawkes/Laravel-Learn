<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get("/about", function() {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function() {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => "judul-article-1",
            'title' => 'Judul Article 1',
            'author'=> 'Nur Fatchurohman',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut assumenda cum voluptatibus facere inventore id
            tempora odio illum molestias commodi provident minus eaque, ex reprehenderit, minima sed tenetur vitae
            deserunt.'
        ],
        [
            'id' => 2,
            'slug' => "judul-article-2",
            'title' => 'Judul Article 2',
            'author'=> 'Nur Fatchurohman',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, porro provident
            magnam fugiat, ea non asperiores, autem fugit quia accusamus alias nostrum adipisci. Placeat libero at ullam
            nobis quia molestias.'
        ],
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Article 1',
            'slug' => "judul-article-1",
            'author'=> 'Nur Fatchurohman',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut assumenda cum voluptatibus facere inventore id
            tempora odio illum molestias commodi provident minus eaque, ex reprehenderit, minima sed tenetur vitae
            deserunt.'
        ],
        [
            'id' => 2,
            'title' => 'Judul Article 2',
            'slug' => "judul-article-2",
            'author'=> 'Nur Fatchurohman',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, porro provident
            magnam fugiat, ea non asperiores, autem fugit quia accusamus alias nostrum adipisci. Placeat libero at ullam
            nobis quia molestias.'
        ],
    ];

    $post = Arr::first($posts, function($post) use($slug) {
        return $post['slug'] == $slug;
    });

    return view('/post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact']);
});
