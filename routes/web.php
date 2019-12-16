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
use App\Video;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas de vídeos
Route::get('crear-video', array(
    'as' => 'createVideo',
   'middleware' => 'auth',
   'uses' => 'VideoController@createVideo'
));

Route::post('guardar-video', array(
    'as' => 'saveVideo',
   'middleware' => 'auth',
   'uses' => 'VideoController@createVideo'
));