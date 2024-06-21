<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['name' => 'Nur Fatchurohman']);
});

Route::get("/about", function() {
    return view('about', ['name' => 'Nur Fatchurohman']);
});

Route::get('/blog', function() {
    return view('blog', ['name' => 'Nur Fatchurohman']);
});

Route::get('/contact', function() {
    return view('contact');
});
