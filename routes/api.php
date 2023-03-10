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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });                                       commentate perchè l'api che utilizzeremo non è nella fase di auth

Route::get('/posts', 'Api\PostController@index')->name('posts.index');
Route::get('/posts/random', 'Api\PostController@random')->name('posts.random');
Route::get('/posts/{post}', 'Api\PostController@show')->name('posts.show');
