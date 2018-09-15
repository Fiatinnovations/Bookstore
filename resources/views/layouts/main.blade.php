<html>
	<head>
		<title>@yield('title')</title>
		<link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="{{URL::asset('css/src/style.css')}}" type="text/css">
		@yield('style') <!-- if you want to over ride the style -->
	</head>
        <div>@include('partials.header')</div> 
	<body>
		
		<div style="padding-top: 55px;">@include('partials.slider')</div>
		
		<div class="container">
			@yield('content')  
		</div>
		   
	<script src="{{URL::asset('js/bootstrap.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('js/jquery-3.3.1.js')}}" type="text/javascript"></script>	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	@yield('script')
	</body>
	<footer>
		@yield('footer')
	</footer>
</html>