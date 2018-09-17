<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| All routes for this application is registered here.
|
*/
use Illuminate\Http\Request as Request;

Route::post('/createabook', ['uses'=>'BooksController@createBook','as'=>'createBook']);

Route::get('/createanewbook', ['uses'=>'BooksController@newbook','as'=>'createanewBook'])->middleware('auth');

Route::get('book/{id}',['uses'=>'BooksController@displayBook', 'as'=>'displayBook']);

Route::get('deletepost/{id}',['uses'=>'BooksController@deleteBook','as'=>'deleteBook']);

Route::get('/Shopping-Cart/{id}',['uses'=>'BooksController@addToCart',
'as'=>'book.addToCart'])->middleware('auth');

Route::get('/yourshoppingcart', ['uses'=>'BooksController@shoppingCart', 'as'=>'books.cart']);

Route::auth();

Route::get('/books', ['uses'=>'BooksController@index', 'as'=>'books.index'])->middleware('auth');
Route::get('/home', 'HomeController@index');
Route::get('/', ['uses'=>'BooksController@index', 'as'=>'books.index']);
