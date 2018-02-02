<?php
/*
Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', function () {
    return view('home');
});

Route::get('/', 'IndexController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/movie/create', 'MovieController@create');
    Route::post('/movie', 'MovieController@store');
    Route::get('/movie/{movie}/edit', 'MovieController@edit');
    Route::patch('/movie/{movie}', 'MovieController@update')->name('movie.update');
    Route::delete('/movie/{movie}', 'MovieController@destroy')->name('movie.destroy');

    Route::get('/admin', 'AdminController@index')->name('dashboard');
    Route::get('/admin/userlist', 'AdminController@userlist');
    Route::get('/admin/movielist', 'AdminController@movielist');
    Route::get('/admin/actorlist', 'AdminController@actorlist');
    Route::get('/admin/showlist', 'AdminController@showlist');

    Route::delete('user/{user}', 'UserController@destroy')->name('user.destroy');

    Route::get('/show/create', 'ShowController@create');
    Route::post('/show', 'ShowController@store');
    Route::get('/show/{show}/edit', 'ShowController@edit');
    Route::patch('/show/{show}', 'ShowController@update')->name('show.update');
    Route::delete('/show/{show}', 'ShowController@destroy')->name('show.destroy');

    Route::get('/actor/create', 'ActorController@create');
    Route::get('/actor/{actor}/edit', 'ActorController@edit');
    Route::post('/actor', 'ActorController@store');
    Route::patch('/actor/{actor}', 'ActorControler@update')->name('actor.update');
    Route::delete('/actor/{actor}', 'ActorController@destroy')->name('actor.destroy');

    Route::get('/category/create', 'CategoryController@create');
    Route::get('/category/{category}/edit', 'CategoryController@edit');
    Route::post('/category', 'CategoryController@store');
    Route::patch('/category/{category}', 'CategoryController@update')->name('category.update');
    Route::delete('/category/{category}', 'CategoryController@destroy')->name('category.destroy');

    Route::post('/categories', 'CategoriesLinkController@store');
    Route::delete('/categories/{categories}', 'CategoriesLinkController@destroy')->name('categories.destroy');

    Route::get('season/{season}/edit', 'SeasonController@edit');
    Route::post('season', 'SeasonController@store');
    Route::patch('season/{season}', 'SeasonController@update')->name('season.update');
    Route::delete('season/{season}', 'SeasonController@destroy')->name('season.destroy');

    Route::post('episode', 'EpisodeController@store');
    Route::patch('episode', 'EpisodeController@update')->name('episode.update');
    Route::delete('episode/{episode}', 'EpisodeController@destroy')->name('episode.destroy');
});

Route::get('/movie', 'MovieController@index');
Route::get('/movie/{movie}', 'MovieController@show');

Route::get('/show', 'ShowController@index');
Route::get('/show/{show}', 'ShowController@show');

Route::get('/actor', 'ActorController@index');
Route::get('/actor/{actor}', 'ActorController@show');

Route::get('/search', 'SearchController@search');
Route::post('/search', 'SearchController@result');

Route::delete('comment/{comment}', 'CommentController@destroy')->name('comment.destroy');
Route::post('comment', 'CommentController@store');