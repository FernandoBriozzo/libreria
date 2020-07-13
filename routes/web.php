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


//Auth::routes();

Route::get('/', function(){
    echo "hello world";
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('books', 'BookController');

Route::get('allvalues', 'BookController@books');

Route::get('/authors/create', 'AuthorController@create');
Route::post('/authors/create', 'AuthorController@store');
Route::get('/authors', 'AuthorController@index');
Route::get('/authors/{id}/edit', 'AuthorController@edit');
Route::put('/authors/{id}/edit', 'AuthorController@update');
Route::delete('/authors/{id}', 'AuthorController@destroy');

Route::get('/genres/create', 'genreController@create');
Route::post('/genres/create', 'genreController@store');
Route::get('/genres', 'genreController@index');
Route::get('/genres/{id}/edit', 'genreController@edit');
Route::put('/genres/{id}/edit', 'genreController@update');
Route::delete('/genres/{id}', 'genreController@destroy');

Route::get('login', 'SessionController@create')->name('login');
Route::post('login', 'SessionController@store');
Route::get('logout', 'SessionController@destroy')->name('logout');

Route::get('register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::get('/users', 'UserController@index');
Route::put('/changeeditor/{id}', 'UserController@manageEditors');