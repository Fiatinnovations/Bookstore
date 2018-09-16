<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');*/
use Illuminate\Http\Request as Request;
Route::post('/createabook', ['uses'=>'BooksController@createBook','as'=>'createBook']);
Route::get('/createanewbook', ['uses'=>'BooksController@newbook','as'=>'createanewBook'])->middleware('auth');
Route::resource('posts','Postscontroller');
Route::get('/admin/posts', 'Postscontroller@index');

Route::auth();

Route::get('/books', ['uses'=>'BooksController@index', 'as'=>'books.index'])->middleware('auth');


Route::get('/home', 'HomeController@index');
Route::get('/', ['uses'=>'ProductController@index', 'as'=>'product.index']);

Route::get('/profile', ['uses'=>'UserController@userProfile',
'as'=>'user.profile']);

Route::get('/Shopping-Cart/{id}',['uses'=>'productController@addToCart',
'as'=>'product.addToCart']);

Route::get('/yourshoppingcart', ['uses'=>'ProductController@shoppingCart', 'as'=>'products.cart']);