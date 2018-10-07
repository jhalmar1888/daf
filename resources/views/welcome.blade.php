<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

		<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
  
    </head>
    <body>
    <body class="homepage">
		<div id="header">
			<div class="container"> 	
				<div id="logo">
					<h1><a href="#">ORDEN DE PAGO</a></h1>
					<span>DISEÑO ORIGINAL POR EDGAR LAYME</span>
				</div>
				<nav id="nav">
					<ul>
                   <li><a href="{{ route('products.index') }}">Listado de Ordenes de Pago</a></li>
                   <li><a href="{{ route('empresas.index') }}">Listado de Empresas y Personas</a></li>					
					</ul>
				</nav>
			</div>
		</div>
    </body>
</html>


