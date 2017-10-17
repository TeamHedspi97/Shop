<!doctype html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>Learning Laravel Website </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/myStyle.css')}}"> 
	</head>
 <body>
 	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">The Gioi di dong</a>
	    </div>
	  </div>
	</nav>
	 @yield('content')
	 <script src="{{asset('js/jquery.js')}}"></script>
	 <script src="{{asset('js/bootstrap.min.js')}}"></script>
 </body>
</html>