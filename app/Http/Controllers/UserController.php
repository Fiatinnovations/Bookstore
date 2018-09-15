<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function userProfile(){
    	$user = Auth::user();
    	return view('user.profile', ['user'=>$user]);
    }
}
