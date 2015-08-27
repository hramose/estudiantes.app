<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Estudiantes.app</title>

	<link href="{!! url('/css/app.css') !!}" rel="stylesheet">
	<link href="http://bootswatch.com/yeti/bootstrap.min.css" rel="stylesheet">
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{!! url('#') !!}">Estudiantes.app</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					@if(Auth::check())
						
						<li><a href="{!! url('/home') !!}">Inicio</a></li>
						<li><a href="{!! url('/participantes') !!}">Participantes</a></li>
					
						@if(Auth::user()->type == '1')				
							{{-- <li><a href="{!! url('#') !!}">Convocatorias</a></li> --}}
							<li><a href="{!! url('/grupo_investigaciones') !!}">Grupos de Investigaci&oacute;n</a></li>
							<li><a href="{!! url('/establecimientos') !!}">Establecimientos</a></li>			
							<li><a href="{!! url('/municipios') !!}">Municipios</a></li>
							<li><a href="{!! url('/users') !!}">Usuarios</a></li>
							{{-- <li><a href="{!! url('/reportes') !!}">Reportes</a></li> --}}
						@endif

					@endif
					

				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{!! url('/auth/login') !!}">Ingresar</a></li>
						{{-- <li><a href="{!! url('/auth/register') !!}">Registro</a></li> --}}
					@else
						<li class="dropdown">
							<a href="{!! url('#') !!}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{!! url('/auth/logout') !!}">Salir</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="{!! url('/js/app.js') !!}"></script>
	@yield('scripts')

</body>
</html>
