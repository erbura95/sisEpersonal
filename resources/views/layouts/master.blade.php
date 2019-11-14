<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') | Portafolio Electronico</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
	<link rel="icon" href="http://www.centroeducativoeca.edu.mx/wp-content/themes/eca-overflow/img/icon-encuesta.svg">
	<link href="{{ asset('css/all.min.css') }}" rel="stylesheet">

     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	
</head>
@include('layouts.nav') 

<center >
	<h2>@yield('titulo')</h2>
	<div><h3>@yield('titulo2')</h3></div>
</center>

<body>
	<div class="container-fluid">
		
		<div class="container">
			<hr style="width:100%;">
			@yield('botones')
			@yield('content')

		</div>

		
	</div>

	<script src="{{asset('js/jquery-3.3.1.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>

	@yield('footer')

</body>

</html>