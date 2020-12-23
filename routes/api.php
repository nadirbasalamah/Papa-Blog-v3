<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// For Admin
Route::post('post', 'AdminController@createPost');
Route::put('post/{id}', 'AdminController@editPost');
Route::delete('post/{id}', 'AdminController@deletePost');

// For Posts
Route::get('posts', 'PostController@getPosts');
Route::get('post/{id}', 'PostController@getPost');
Route::get('post/title/{title}', 'PostController@searchPost');

// For User
Route::post('/like/post/{id}', 'UserController@likePost');
Route::post('/comment/post/{id}', 'UserController@commentPost');
Route::delete('/comment/post/{id}', 'UserController@removeComment');
Route::delete('/like/post/{id}', 'UserController@unlikePost');
Route::get('/profile/{id}', 'UserController@getProfile');
Route::put('/profile', 'UserController@editProfile');
