<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use oliamerica\Http\Controllers\Admin;

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/noticias', function () {
    return view('noticias');
});
Route::get('/productos', function () {
    return view('productos');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/home', function () {
    return view('en_index');
});
Route::get('/aboutUs', function () {
    return view('about_us');
});
Route::get('/news', function () {
    return view('noticias');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/entrada', function () {
    return view('entrada');
});


//Route::resource('Noticia', 'NoticiaController');

Route::get('/admin', function () {
    return view('admin.index');
});

Route::group(['prefix' => 'Admin'], function () {
    Route::group(['prefix' => 'Noticia'], function ()    {
        Route::get('Crear', ['uses' => 'Admin\NoticiaController@crear']);
        Route::post('Guardar', ['uses' => 'Admin\NoticiaController@guardar']);
    });
});


Route::get('/Admin/Ver', function () {
    return view('admin.ver_noticia');
});
