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

//Authenticator
Route::group(['namespace' => 'Auth'],function(){
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::get('/logout', 'LoginController@logout')->name('logout');
    Route::get('/register', 'RegisterController@index')->name('register');
    Route::post('/register', 'RegisterController@create');
});

//Home
Route::get('/', 'HomeController@index')->name('home');

//Book
Route::resource('books', 'BookController');

//Search
Route::get('home/search/{key}', 'HomeController@search');

//Back
Route::get('back', function(){
    return redirect()->back();
})->name('back');

//User
Route::resource('users', 'UsersController');
Route::get('users/search/{key}', 'UserController@search'); 

//Author
Route::resource('authors', 'AuthorController');
Route::get('authors/search/{key}', 'AuthController@search'); 

