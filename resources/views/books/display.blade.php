@extends('layouts.main')
@section('content')
<div class="container">
  <div style="padding-right: 70px;">@include('partials.validation')</div>
  
  <div class="row">
    <div class="col">
     <div class="carousel-item active">
      <!-- <img class="d-block w-100" src="/images/{{isset($book->photo)?$book->photo['file']: 'has no Photo'}}" alt="First slide"> -->
    </div>
    </div>
    <div class="col" style="padding-top: 50px;">
    	<h4>{{$book->title}}</h4>
     <p>{{$book->description}}</p>
     <div class="dropdown">
     	 <a class="btn btn-success" href="{{route('book.addToCart', ['id' => $book->id])}}">Add Item to Cart</a>
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Rate
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">1</a>
    <a class="dropdown-item" href="#">2</a>
    <a class="dropdown-item" href="#">3</a>
    <a class="dropdown-item" href="#">4</a>
    <a class="dropdown-item" href="#">5</a>
  </div>
  @if(Auth::user() == $book->user)
  <div style="margin-top: 10px;">
     <a class="btn btn-danger" href="{{route('deleteBook',['id'=>$book->id])}}">Delete</a>
    <a class="btn btn-primary" href="">Edit</a>
    
   </div>
   @endif

</div>

    </div>
    <div class="col">
   
    </div>
  </div>
</div>

@endsection