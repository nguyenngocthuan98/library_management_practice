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

//Admin:
Route::group(['namespace' => 'Admin', 'middleware' => 'is_admin', 'prefix' => 'admin'], function() {
    Route::get('statistical', 'HomeController@index')->name('admin.home.index');
    Route::get('borrows', 'BorrowController@index')->name('admin.borrow.index');
});

//Home
Route::get('/', 'HomeController@index')->name('home');

//Book
Route::resource('books', 'BookController');

//User
Route::resource('users', 'UsersController');

//Author
Route::resource('authors', 'AuthorController');

//Publisher
Route::resource('publishers', 'PublisherController');

//Comment
Route::post('comment/{id}', 'CommentController@comment')->name('comment.post');

//User Borrow
Route::get('borrow/{id}', 'BorrowController@show')->name('borrow.show');
Route::post('borrow/{id}', 'BorrowController@confirm')->name('borrow.confirm');
Route::get('borrow', 'BorrowController@index')->name('user.borrow.index');
Route::get('borrow/destroy/{id}', 'BorrowController@destroy')->name('user.borrow.destroy');
