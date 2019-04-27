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
Route::resource('/','ArtWebController');
Route::get('home','ArtWebController@index');
//Route::resource('person','PersonController');
Route::post('artweb','ArtWebController@secondIndex');
Route::get('login', 'PersonController@login');
Route::post('login', 'PersonController@sign');// Molaria ponerle un Name para que en la URL no saliera login cuando te manda a la pagina principal
Route::get('register', 'PersonController@create');
Route::post('register', 'PersonController@store'); // Molaria ponerle un Name para que en la URL no saliera regitro
/*
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
*/