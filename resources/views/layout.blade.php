<!doctype html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>Learning Laravel Website </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	</head>
 <body>
 	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">The Gioi di dong</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="./">Home</a></li>
	      <li><a href="./addSanpham">Add san pham</a></li>
	    </ul>
	  </div>
	</nav>
	 @yield('content')
 </body>
</html>