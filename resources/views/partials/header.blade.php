<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('books.index')}}">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <ul class="navbar-nav" style="padding-right: 50px;">
       <li class="nav-item" style="padding-right: 9px;">
        @if(Auth::guest())
        <li><a class="nav-link" href="{{url('/login')}}"><i class="fas fa-sign-in-alt"></i> Login In</a></li>
      <li><a class="nav-link" href="{{url('register')}}"><i class="fas fa-user-plus"></i>Sign up</a></li>
      @else
        <a class="nav-link" href="{{route('books.index')}}"><i class="fas fa-shopping-cart badges"></i> Cart <span>${{Session::has('cart') ? Session::get('cart')->totalPrice : ''}}</span></a>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-user"></i> {{Auth::user()->name}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('createanewBook')}}">Create a Book</a>
          <!-- <a class="dropdown-item" href="#">Another action</a> -->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/logout')}}">Log Out</a>
        </div>
      </li>
      @endif
      </ul>
  </div>
</nav>

