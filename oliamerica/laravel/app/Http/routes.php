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

Route::get('/', function () {
    return view('index');
});

Route::get('/Nosotros', function () {
    return view('nosotros');
});
Route::get('/Noticias', function () {
    return view('noticias');
});
Route::get('/Productos', function () {
    return view('productos');
});
Route::get('/Contacto', function () {
    return view('contacto');
});
Route::get('/Home', function () {
    return view('en_index');
});
Route::get('/AboutUs', function () {
    return view('about_us');
});
Route::get('/News', function () {
    return view('news');
});
Route::get('/Products', function () {
    return view('products');
});
Route::get('/Contact', function () {
    return view('contact');
});


Route::resource('Noticia', 'NoticiaController');

