@extends('layouts.main')

@section('title')
Best Seller Books
@endsection

@section('content')
@foreach($books->chunk(3) as $bookChunk)
<div class="row spacer">
@foreach($bookChunk as $book )
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
<div class="card" style="width: 18rem;">
 <a href="{{route('displayBook',[$book->id])}}"><img  class="card-img-top im-responsive" src="images/{{isset($book->photo)?$book->photo['file']: 'has no Photo'}}" alt="Card image cap"></a> 
  <div class="card-body" align="center" style="margin-top:20px; ">
    <a href="{{route('displayBook',[$book->id])}}"><h5 class="card-title" style="margin-top: -30%">{{$book->title}}</h5></a>
    <p class="card-text description">{{$book->description}}
    </p>
    <h5 class="card-title"><i class="fas fa-dollar-sign"></i>{{$book->amount}}</h5>
    <a class="btn btn-success" href="{{route('book.addToCart', ['id' => $book->id])}}">Add Item to Cart</a>
  </div>
</div>
</div>
</div>
@endforeach
</div>

@endforeach

@endsection


@section('footer')

@endsection











