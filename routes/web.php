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
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/style-guide', function () {
    return view('style-guide');
});

//Route::get('/projects', 'ProjectsController@index')->name('projects.index');
//Route::post('/projects', 'ProjectsController@store');
//Route::get('/projects/create', 'ProjectsController@create');
//Route::get('/projects/{project}', 'ProjectsController@show')->name('projects.show');
//Route::get('/projects/{project}/edit', 'ProjectsController@edit');
//Route::put('/projects/{project}', 'ProjectsController@update');

Route::resource('projects', 'ProjectsController');





