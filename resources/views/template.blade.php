<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="{{ asset('/css/blog.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/especializati.css">

	<!--JQuery-->
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" type="image/png" href="imgs/logo1.png">
</head>
<body>
<header class="header">
			<div class="container">
				<h1 class="oculta">Projeto Blog - Curso Laravel Express</h1>

				<div class="logo">
					<img src="imgs/logo1.png" alt="Blog Vida Sustentável" title="Vida Sustentável" class="logo">
				</div>

				<nav>
					<ul class="menu">
						<li>
							<a href="/">Home</a>
						</li>
						<li>
							<a href="meioambiente">Meio Ambiente</a>
						</li>
						<li>
							<a href="noticias">Notícias</a>
						</li>
						<li>
							<a href="ideias">Idéias Sustentáveis</a>
						</li>
					</ul>
				</nav>
				</div>
		</header>
		<!--Final do Header-->

<!--Final do Header-->


<div class="container">
    <!-- areas de atualizacao-->
    @yield('content')
</div>

<!-- Scripts -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>