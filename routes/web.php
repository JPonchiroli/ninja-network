<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ["id" => "1", "name" => "Naruto", "skill" => "Ninjutsu"],
        ["id" => "2", "name" => "Sasuke", "skill" => "Sharingan"],

    ];

    return view('ninjas.index', ["greeting" => "Hello", "ninjas" => $ninjas]);
});

Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show', ["id" => $id]);
});