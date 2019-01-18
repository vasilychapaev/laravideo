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

Route::get('/', function () {return view('welcome');});

Route::get('/video', 'VideoController@index');
Route::post('/video/upload', 'VideoController@upload');
Route::get('/video/{id}/delete', 'VideoController@delete'); // или метод delete?

//Route::get('/login', 'UserController@login');
//Route::post('/login', 'UserController@login');
Route::match(['get', 'post'], '/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');

Route::get('/playlists', 'PlaylistController@index');
Route::get('/playlist/add/{name}', 'PlaylistController@add');
Route::get('/playlist/{id}/show', 'PlaylistController@show');
Route::get('/playlist/{id}/delete', 'PlaylistController@delete'); // или метод delete?
Route::get('/playlist/{id}/rename/{name}', 'PlaylistController@rename');

Route::get('/playlist/{playlist_id}/add/{video_id}', 'PlaylistController@videoAdd');
Route::get('/playlist/{playlist_id}/delete/{video_id}', 'PlaylistController@videoDelete');



Route::get('/dbtest', function() {
    if(DB::connection()->getDatabaseName()){
        echo "connected sucessfully to database" . DB::connection()->getDatabaseName();
    }
});