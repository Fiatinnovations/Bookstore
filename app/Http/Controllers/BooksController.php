<?php

namespace App\Http\Controllers;
use App\Book;
use App\Photo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*use App\Http\Requests;*/

class BooksController extends Controller
{
   public function index(){

	    $books=Book::orderBy('created_at','desc')->get();
	   	return view('books.index',['books'=> $books]);

   }

   public function createBook(Request $request){

   		$validator = Validator::make($request->all(),[
   			'title' => 'required|string|max:50',
   			'description' => 'required|string|max:3000',
   			'amount' => 'required|integer',
   			'photo_id' => 'required'

   		]);

   		$title = $request['title'];
   		$description = $request['description'];
   		$amount = $request['amount'];
   		$photo_id = $request->file['photo_id'];


   			 if($file=$request->file('photo_id')){
                    $name=time() . $file->getClientOriginalName();
                    $file-> move('images',$name);
                    $photo=Photo::create(['file'=>$name]);
                    $photo_id = $photo->id;

        }

   		$book = new Book();
   		$book->title = $title;
   		$book->description = $description;
   		$book->amount = $amount;
   		$book->photo_id = $photo_id;
   		$message = 'Your Book wasn\'t created';

   		if($validator->fails()){
   			return redirect('createanewbook')->withErrors($validator)->withInput();

   		}else{

   			if($request->user()->books()->save($book)){
   			$message = 'Book Created Successfully';
   			return redirect()->route('books.index')->with(['message'=>'$message']);
   		}
   		}
   }

   public function newbook(){
   		return view('books.create');
   }
}
