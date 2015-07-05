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
Route::get('/Login', function () {
    return view('login');
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
    return view('noticias');
});
Route::get('/Products', function () {
    return view('products');
});
Route::get('/Contact', function () {
    return view('contact');
});
Route::get('/Entrada', function () {
    return view('entrada');
});


//Route::resource('Noticia', 'NoticiaController');

Route::get('/admin', function () {
    return view('admin.index');
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'noticia'], function ()    {
        Route::get('crear', ['uses' => 'Admin\NoticiaController@crear']);
        Route::get('', ['uses' => 'Admin\NoticiaController@index']);
        Route::post('guardar', ['uses' => 'Admin\NoticiaController@guardar']);
    });
});


Route::get('/Admin/Ver', function () {
    return view('admin.ver_noticia');
});
