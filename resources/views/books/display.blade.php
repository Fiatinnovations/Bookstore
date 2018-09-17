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
    	<h4 id = "bookTitle" data-bookId={{$book->id}} >{{$book->title}} </h4>
     <p id="desc" data-bookId={{$book->id}}>{{$book->description}}</p>
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
    <button class="btn btn-primary" id="sunky" href="">Edit</button>
    
   </div>
   @endif

</div>

    </div>
    
  </div>
 <div class="modal" tabindex="-1" role="dialog" id="editModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          {{csrf_field()}}
          <div class="form-group">
            <label for="book-title">Edit Book Title</label>
    <input type="text" id="book-title" name="book-title" class="form-control"> 
            <label for="book-desc">Edit Book Description</label>
            <textarea class="form-control" name="book-desc" id="book-desc"  rows="5"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script>
        var bookId = 0;
        var sunky = document.getElementById('sunky');
        sunky.addEventListener('click', function(event){
          event.preventDefault();
          var description =document.getElementById('desc').innerHTML
          var title = document.getElementById('bookTitle').innerHTML
          bookId = document.querySelector('#desc').dataset['bookId'];
          $('#book-title').val(title);
          $('#book-desc').val(description);
          $('#editModal').modal();
        } )

        $('#modal-save').on('click', function(){
          $.ajax({
            headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 },
            method:'POST',
            url: url,
            data:{
              title:$('#book-title').val(),
              description:$('#book-desc').val(),
              bookId:bookId,
              _token:token,

            }
          })
          .done(function(msg){
            console.log(msg['message']);
            console.log(msg['title']);
            console.log(JSON.stringify(msg))

          });
        });
      </script>

      <script>
        var token = '{{Session::token()}}';
        var url = '{{route('edit')}}'; 
      </script>
</div>

@endsection
<div class="form-group">
    
</div>