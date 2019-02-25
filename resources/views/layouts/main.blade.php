<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/estilo.css">
    <title>Academia Fitness</title>
</head>
<body>
 	<header>
 		<div class="container">
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
        <a class="nav-link" href="/perfil-aluno">Sobre nós</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/escolha-perfil">login</a>
      </li>
    </ul>
  </div>
</nav>
    
    @yield('content')

 		</div>

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

</body>

</html>
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="../js/efeito.js"></script>
@stack('scripts')