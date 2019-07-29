<?php

Route::get('/', function () {
    return view('welcome');
});

// php artisan route:list

Route::resource('carro', 'CarroController');
