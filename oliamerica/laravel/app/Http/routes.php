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

Route::get('/',['middleware' => 'lenguaje', function () {
    return view('index');

}]);
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

Route::get('/ingles', function () {
    Session::put('lenguaje','en');
    return redirect('/');
});

Route::get('/espaniol',function(){
    Session::put('lenguaje','es');
    return redirect('/');
});

Route::group(['prefix' => 'auth'],function(){
    Route::get('login',function(){
        return view('admin.auth.login');
    });
    Route::post('login',['uses' => 'SeguridadController@login']);
    Route::get('logout',['uses' => 'SeguridadController@logout']);
});

Route::group(['prefix' => 'admin','middleware' => 'auth'],function () {
    Route::get('', function () {
        return view('admin.noticia.index');
    });
    Route::group(['prefix' => 'noticia'], function ()    {
        Route::get('crear', ['uses' => 'Admin\NoticiaController@crear']);
        Route::get('editar/{id}', ['uses' => 'Admin\NoticiaController@editar']);
        Route::post('editar/{id}', ['uses' => 'Admin\NoticiaController@actualizar']);
        Route::get('', ['uses' => 'Admin\NoticiaController@index']);
        Route::post('guardar', ['uses' => 'Admin\NoticiaController@guardar']);
    });
});


Route::get('/Admin/Ver', function () {
    return view('admin.ver_noticia');
});
