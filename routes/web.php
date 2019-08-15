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

Route::get('/', function () {
    return view('auth.login');
});
/*Route::get('/clients', function () {
    return view('clients.index');
});*/
/*Route::get('/clients/create', function () {
    return view('clients.create');
});*/

//Route::get('/clients', 'ClientController@index');
//Route::get('/clients/create', 'ClientController@create');
//Route::get('/clients/edit', 'ClientController@edit');

Route::resource('clients', 'ClientController');

Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
