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

Route::get('/', 'ArticlesController@index');  

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('favorite', 'FavoritesController@store')->name('favorites.favorite');
        Route::delete('unfavorite', 'FavoritesController@destroy')->name('favorites.unfavorite');
        Route::get('favorites', 'UsersController@favorites')->name('users.favorites');
    });
});

Route::resource('users', 'UsersController', ['only' => ['index']]);
Route::resource('article', 'ArticlesController', ['only' => ['create', 'store', 'destroy']]);

Route::resource('airline', 'AirlinesController', ['only' => ['index']]);
Route::resource('micropost', 'MicropostsController', ['only' => ['store']]);

Route::get('company/profile', function () {
    return view('company.profile');
})->name('profile.get');

Route::get('company/contact', 'ContactsController@create')->name('contacts.get');
Route::post('company/contact', 'ContactsController@store')->name('contacts.post');