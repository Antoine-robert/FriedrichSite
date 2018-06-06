<?php

Route::get('/produits', function () {
    $produits = \App\Tartes::all();
    return view('products.index', compact('produits'));
});
Route::get('/entreprise', function () {
    return view('entreprise');
});
Route::get('/contact', function () {
    return view('contact',compact('link'));
});
Route::resources([
    'Tartes' => 'ProduitsController'
]);

Route::get('/create','Produitscontroller@create');
Route::get('/edit', function () {
    $produits = \App\Tartes::all();
    return view('products.edit',compact('produits'));
});
Route::get('/edit/{id}','Produitscontroller@edit');

Route::get('/admin', function () {
    if (Auth::check()) {
        return view('home');
    }
    else
    return view('auth.login');
});

Route::get('/test', function () {
    $produits = \App\Tartes::all();
    return view('testlayout', compact('produits'));
});

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');