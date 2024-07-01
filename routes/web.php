<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Main Page";
});

Route::get('/xxx', function () {
    return "Hello World";
})->name("hello");

Route::get('/hallo', function () {
    return redirect()->route("hello");
});

Route::get('/greet/{name}', function ($name) {
    return "Hello " . $name . "!";
});

Route::fallback(function () {
    return "404 - Still got somewhere!";
});
