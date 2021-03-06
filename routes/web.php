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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/homes', 'HomesController@index')->name('homes');

Route::get('guest', 'Auth\LoginController@guestLogin')->name('login.guest');
Route::get('/home', 'ArticleController@index')->name('articles.index');

Route::resource('/articles', 'ArticleController')->except(['index', 'show'])->middleware('auth');
Route::resource('/articles', 'ArticleController')->only(['show']);
Route::prefix('articles')->name('articles.')->group(function () {
    Route::put('/{article}/like', 'ArticleController@like')->name('like')->middleware('auth');
    Route::delete('/{article}/like', 'ArticleController@unlike')->name('unlike')->middleware('auth');
});

Route::get('/tags/{name}', 'TagController@show')->name('tags.show');
Route::prefix('users')->name('users.')->group(function () {
    Route::get('/{name}', 'UserController@show')->name('show');
    Route::get('/{name}/likes', 'UserController@likes')->name('likes');
    Route::get('/{name}/followings', 'UserController@followings')->name('followings');
    Route::get('/{name}/followers', 'UserController@followers')->name('followers');
    Route::patch('/{name}', 'UserController@update')->name('update');
    Route::get('/{name}/edit', 'UserController@edit')->name('edit');
    Route::resource('comment', 'CommentsController', ['only' => ['store']]);
});
Route::middleware('auth')->group(function () {
    Route::put('/{name}/follow', 'UserController@follow')->name('follow');
    Route::delete('/users/{name}/follow', 'UserController@unfollow')->name('users.unfollow');
    Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');

    Route::post('/folders/create', 'FolderController@create');
    Route::get('/folders/{id}/tasks', 'TasksController@index')->name('tasks.index');
    Route::get('/folders/{id}/tasks/create', 'TasksController@showCreateForm')->name('tasks.create');
    Route::post('/folders/{id}/tasks/create', 'TasksController@create');
    Route::get('/folders/{id}/tasks/{task_id}/edit', 'TasksController@showEditForm')->name('tasks.edit');
    Route::post('/folders/{id}/tasks/{task_id}/edit', 'TasksController@edit');

    });
