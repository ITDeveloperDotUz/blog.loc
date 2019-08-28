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

Route::get('/', 'SiteController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::resource('posts', 'PostController');
Route::post('posts/{string}/search', 'PostController@search')->name('posts.search');
Route::resource('authors', 'AuthorController');
Route::resource('comments', 'CommentController');
Route::resource('categories', 'CategoryController');
Route::get('categories/{id}/process', 'CategoryController@process');