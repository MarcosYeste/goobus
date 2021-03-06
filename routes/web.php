<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/
/* RUTAS DE LA WEB */
Route::resource('/','ArtWebController');
Route::get('home','ArtWebController@index');
Route::get('contact', 'ArtWebController@contact');
Route::get('privacidad', 'ArtWebController@privacity');
Route::get('cookies', 'ArtWebController@cookies');
Route::get('artCoinWeb', 'ArtWebController@artCoinWeb');
Route::get('ads', 'ArtWebController@ads');
Route::get('logout', 'ArtWebController@logout');
Route::get('stadistics', 'ArtWebController@stadistics');

/* RUTAS PERSON  */
Route::get('profile','PersonController@profile');
Route::get('register', 'PersonController@create');
Route::post('register', 'PersonController@store'); // Molaria ponerle un Name para que en la URL no saliera regitro
Route::post('update', 'PersonController@update');
Route::get('login', 'PersonController@login');
Route::post('login', 'PersonController@sign');// Molaria ponerle un Name para que en la URL no saliera login cuando te manda a la pagina principal
Route::post('coinWined', 'PersonController@coinWined');
Route::post('buy{id}','PersonController@buy');



/* RUTAS PRODUCTS  */ 
//Route::get('product','ProductController@showMyProducts');
Route::get('myArt','ProductController@showMyProducts');
Route::get('art','ProductController@showAllProducts');
Route::post('art','ProductController@store');
Route::get('artDesc{id}','ProductController@show');
Route::get('creatProduct','ProductController@create');
Route::post('destroy{id}','ProductController@destroy');


/*
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
*/