<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create.blade.php something great!
|
*/

Auth::routes();

Route::get('/', 'PageController@home')->name('home');
Route::get('/home', 'PageController@home')->name('home');
Route::get('/upload', 'ImagesController@create');
Route::post('/upload', 'ImagesController@store')->name('upload');
Route::post('/delete', 'ImagesController@destroy');
Route::get('/images-show', 'ImagesController@index');
Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'), function () {
    Route::get('/', 'PageController@home');
    Route::resource('roles', 'RoleController',["as"=>"admin"]);
    Route::resource('users', 'UserController',["as"=>"admin"]);
});

Route::get('users/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@logout');
Route::get('users/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('users/login', 'Auth\LoginController@login');
