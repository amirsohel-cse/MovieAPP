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

Route:: get('/','HomeController@index');

Route::get('/admin', function () {
    return view('admin_layout');
});

// Slider Routes here
Route:: get('/add_slider','SliderController@index');
Route:: post('/save_slider','SliderController@save_slider');
Route:: get('/all_slider','SliderController@all_slider');
Route:: get('/delete_slider/{slider_id}','SliderController@delete_slider');

// Movie Related Routes here

Route:: get('/add_movie','MovieController@add_movie');
Route:: post('/save_movie','MovieController@save_movie');
Route:: get('/all_movie','MovieController@all_movie');
Route:: get('/delete_movie/{movie_id}','MovieController@delete_movie');
Route:: get('/edit_movie/{movie_id}','MovieController@edit_movie');
Route:: post('/update_movie/{movie_id}','MovieController@update_movie');
Route:: post('/search','HomeController@search');

