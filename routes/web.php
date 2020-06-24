<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/genre', function () {
    return view('genre');
});


//buat nampilin Film sinopsis sbgnya nanti~
// Route::get('film','FilmController@index');
Route::resource('admin/film','FilmController');

//buat autentikasi jika telah berhasil login/register
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Halaman admin
Route::view('admin','admin.index');
Route::resource('admin/user','UserController');
// Route::get('/destroy/', [ 'as' => 'users.destroy', 'uses' => 'UserController@create']);
// Route::view('admin.film','film.index');
// Route::resource('admin.film.index', 'FilmController');