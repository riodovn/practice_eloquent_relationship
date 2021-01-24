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
    return redirect('home');
});
Route::get('/home','ViewController@home_index')->name('home.index');
Route::resources([
    'users' => UserController::class,
    'comments' => CommentController::class,
]);
Route::get('/users/all_comments/{user}','UserController@show_allComments')->name('users.comments');