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

use App\Http\Controllers\VideoController;
use App\Video;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home', array(
    'as' => 'home',
   'uses' => 'HomeController@index'
));

//Rutas de vídeos
Route::get('crear-video', array(
    'as' => 'createVideo',
   'middleware' => 'auth',
   'uses' => 'VideoController@createVideo'
));

Route::post('guardar-video', array(
    'as' => 'saveVideo',
   'middleware' => 'auth',
   'uses' => 'VideoController@saveVideo'
));

Route::get('/miniatura/{filename}', array(
    'as' => 'imageVideo',
    'uses' => 'VideoController@getImage'
));

Route::get('/video/{video_id}', array(
    'as' => 'detailVideo',
    'uses' => 'VideoController@getVideoDetail'
));

Route::get('/video-file/{filename}', array(
    'as' => 'fileVideo',
    'uses' => 'VideoController@getVideo'
));