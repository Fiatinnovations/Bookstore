<?php

namespace App\Http\Controllers;
use App\book;

use Illuminate\Http\Request;

use App\Http\Requests;

class BooksController extends Controller
{
   public function index(){

	    $books=Book::all();
	   	return view('books.index',['books'=> $books]);

   }
}
