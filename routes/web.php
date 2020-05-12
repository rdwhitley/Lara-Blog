<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PostController@index');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/posts/{id}', 'PostController@show');

Route::get('/posts/{id}/edit', 'PostController@edit');

Route::put('/posts/{id}', 'PostController@update');

Route::delete('/posts/{id}', 'PostController@destroy');
//How to use Query Parameters

// });
// Route::get('/posts/{id}/comments/{comment_id}/', function ($id,$comment_id) {
//     return "Post id is ${id} <br> Comment id is ${comment_id}";
// });
// Route::get('/posts/{id}/comments/{comment_id}/{likes}', function ($id,$comment_id,$likes) {
//     return "You have ${likes} likes";
// });