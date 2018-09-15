@extends('layouts.main')
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
     <div class="carousel-item active">
      <img class="d-block w-100" src="{{URL::asset('img/image1.jpg')}}" alt="First slide">
    </div>
    </div>
    <div class="col" style="padding-top: 50px;">
    	<h4>h4. Bootstrap heading</h4>
     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
     <div class="dropdown">
     	 <a class="btn btn-success" href="">Add Item to Cart</a>
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

</div>

    </div>
    <div class="col">
   
    </div>
  </div>
</div>
@endsection