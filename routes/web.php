<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{name}/{id}', function ($name, $id) {
    return 'This is user '.$name.' with an id of '.$id;
});

Route::get('/about', function() {
    return view('page.about');
});
|
*/
// call pages controller with the index method
Route::get('/', 'PagesController@index');
// call pages controller with the about method
Route::get('/about', 'PagesController@about');
// call pages controller with the services method
Route::get('/services', 'PagesController@services');
// makes all request to PostController
Route::resource('posts', 'PostController');
