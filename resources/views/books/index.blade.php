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
 <a href=""><img  class="card-img-top im-responsive" src="images/{{isset($book->photo)?$book->photo['file']: 'has no Photo'}}" alt="Card image cap"></a> 
  <div class="card-body" align="center" style="margin-top:20px; ">
    <a href=""><h5 class="card-title" style="margin-top: -30%">{{$book->title}}</h5></a>
    <p class="card-text description">{{$book->description}}
    </p>
    <h5 class="card-title"><i class="fas fa-dollar-sign"></i>{{$book->amount}}</h5>
    <a class="btn btn-success">Add Item to Cart</a>
  </div>
</div>
</div>
</div>
@endforeach
</div>

@endforeach
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection


@section('footer')

@endsection











