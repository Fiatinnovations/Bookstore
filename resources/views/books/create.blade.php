@extends('layouts.main')
@section('content')


<div class="container" style='margin-top:70px;';>
  
  <div class="row">
    <div class="col">
   
    </div>
    <div class="col">
    	<div style="padding-right: 70px;">@include('partials.validation')</div>
     <form action ="{{route('createBook')}}" method="post" enctype="multipart/form-data">
     	{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Book Name</label>
    <input type="text" id="title" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Book Name"> 
</div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Enter Description Here</label>
    <textarea id="description" name = "description" class="form-control" rows="3"></textarea>
    </div>
    <div class="form-group">
    <input type="file" id="photo_id" name="photo_id" class="form-control-file" >
</div>
<div class="form-group">
    <input type="amount" id="amount" name="amount" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Book Price"> 
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <input type="hidden" name="_token" value="{{Session::token()}}">
</form>
    </div>
    <div class="col">
      
    </div>
  </div>
</div>

@endsection