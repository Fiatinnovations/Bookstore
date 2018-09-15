@extends('layouts.main')

@section('title')
Laravel Shopping Cart
@endsection

@section('content')

@foreach($books->chunk(3) as $bookChunk)
<div class="row spacer">
@foreach($bookChunk as $book )
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
<div class="card" style="width: 18rem;">
  <img  class="card-img-top im-responsive" src="{{URL::asset('img/image1.jpg')}}" alt="Card image cap">
  <div class="card-body" align="center">
    <h5 class="card-title" style="margin-top: -30%">Bootstrap heading</h5>
    <p class="card-text description"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
    </p>
    <h5 class="card-title"><i class="fas fa-dollar-sign"></h5>
    <a class="btn btn-success" href="">Add Item to Cart</a>
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