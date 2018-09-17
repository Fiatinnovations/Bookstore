<?php

namespace App\Http\Controllers;
use App\Book;
use App\Photo;
use App\Cart;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

/*use App\Http\Requests;*/

class BooksController extends Controller
{
	// Logic for displaying all books
   public function index(){
	    $books=Book::orderBy('created_at','desc')->get();
	   	return view('books.index',['books'=> $books]);

   }

    public function addToCart(Request $request, $id){
    	$book = Book::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($book, $book->id);
    	$request->session()->put('cart', $cart);
    	return redirect()->route('books.index');


    }

    public function shoppingCart(){
        if(!Session::has('cart')){
            return view('book.cart', ['books' => null]);
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return redirect()->back()->with('books.cart', ['books'=>$cart->items, 'totalPrice' =>$cart->totalPrice]);
    }


	/*
	This function handles the Post request logic to create a new Book.
	It also Validates User input
	*/
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

    //This function displays the create Book page

   public function newbook(){
   		return view('books.create');
   }

   // This function handles the individual book display logic.

   public function displayBook($id){
   		$book = Book::findOrFail($id);
   		return view('books.display', compact('book'));
   			
   }


   public function deleteBook($id){
   	$book = Book::where('id', $id)->first();
   	$message = 'You cant Delete this Book';
   	if(Auth::user() != $book->user){
   		return redirect()->back()->with($message);
   	}else{
   		$book->delete();
   		return redirect()->route('books.index')->with(['message'=>'Book Deleted Successfully']);
   	}

   }


}
