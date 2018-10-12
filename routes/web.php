<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductController');

Route::resource('empresas', 'EmpresaController');

Route::get('/print/{id}', ['uses' => 'ProductController@imprimir', 'as' => 'product.print']);