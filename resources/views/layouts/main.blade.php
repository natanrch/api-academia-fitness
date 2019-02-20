<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>Academia Fitness</title>
</head>
<body>
 	<header>
 		<div class="continer">
 			<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <!--logo -->
  <a class="navbar-brand" href="#"><img src="">Logo</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!--links -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto justify-content-end">
      <li class="nav-item">
        <a class="nav-link" href="site/perfilaluno.blade.php">Sobre nós</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">login</a>
      </li>
    </ul>
  </div>
</nav>
    
 		</div>
 

    @yield('content')


<div class="container">
<div class="row">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-12 col-sm-4">
        <p>REDES SOCIAS</p>
      </div>
      <div class="col-12 col-sm-4">
        <P>ONDE NOS ENCONTRAR?</P>
        <i>Rua São José, 1143</i>
        <i>Proximo a escola Pudium</i>
      </div>
      <div class="col-12 col-sm-4">
        <P>CONTATO</P>
        <i>(00) 0000-000</i>
      </div>
    </div>
  </div>
</div>
</div>

  <script type="text/javascript" src="/js/app.js"></script>
  @stack('scripts')
</body>

</html>