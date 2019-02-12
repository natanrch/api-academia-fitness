<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <title>Academia Fitness</title>
</head>
<body>
  <div class="container">


	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

		<div class="container">
     
		  <a class="navbar-brand h1 mb-0" href="/">Academia Fitness</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
	          <span class="navbar-toggler-icon"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="navbarSite">
	      	
			  <ul class="navbar-nav ml-auto">
			    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
			    <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
			    <li class="nav-item"><a class="nav-link" href="/register">Cadastrar-se</a></li>
			  </ul>
	      </div>
		</div>

	</nav>

    @yield('content')

  </div>

  <script type="text/javascript" src="/js/app.js"></script>
  @stack('scripts')
</body>

</html>