<?php

namespace App\Http\Controllers;
use App\Product;
use App\Cart;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class ProductController extends Controller
{
    public function index(){
    	$products = Product::all();
    	return view('product.index', ['products'=>$products]);

    }

    public function addToCart(Request $request, $id){

    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product, $product->id);
    	$request->session()->put('cart', $cart);
    	return redirect()->route('product.index');


    }

    public function shoppingCart(){
        if(!Session::has('cart')){
            return view('product.cart', ['products' => null]);
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('product.cart', ['products'=>$cart->items, 'totalPrice' =>$cart->totalPrice]);
    }
}
 