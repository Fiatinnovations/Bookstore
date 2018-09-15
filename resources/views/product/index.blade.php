@extends('layouts.main')

@section('title')
Laravel Shopping Cart
@endsection

@section('content')
@foreach($products->chunk(3) as $productChunk)
<div class="row spacer">
@foreach($productChunk as $product )
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
<div class="card" style="width: 18rem;">
  <img  class="card-img-top im-responsive" src="{{$product->imagePath}}" alt="Card image cap">
  <div class="card-body" align="center">
    <h5 class="card-title" style="margin-top: -30%">{{$product->title}}</h5>
    <p class="card-text description">{{$product->description}}
    </p>
    <h5 class="card-title"><i class="fas fa-dollar-sign"></i>{{$product->price}}</h5>
    <a class="btn btn-success" href="{{route('product.addToCart', ['id' => $product->id])}}">Add Item to Cart</a>
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