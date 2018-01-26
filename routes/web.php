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

// Route::get('/', 'PageController@root')->name('upload');

// Route::post('upload/avatar', 'PageController@upload_avatar')->name('upload-avatar');

Route::get('/', 'PageController@root');

Route::post('upload/avatar', 'ImageController@upload_avatar')->name('upload.avatar');
