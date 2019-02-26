<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/estilo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet ">
    <link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,500,600,700" rel="stylesheet">

    <link href="{{ url('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ url('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ url('lib/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ url('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <title>Academia Fitness</title>
</head>
<body>
 	<header>
 		
 			<nav class="navbar navbar-expand-lg  navbar-light colormenu " >

  <!--logo -->
  <a class="navbar-brand" href="#"><img src="img/logo.png" style="width: 111px; height: 50px"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!--links -->
<div class="collapse navbar-collapse linkmenu" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link " href="layout/grupomuscular.blade.php" style="color: #F1F1F1">SOBRE NÓS</a>
      </li>
      <li class="nav-item ">
        <div style="background-color: #B95922;  " >
        <a class="nav-link logincolor "  href="layout/primeiraetapalogin.blade.php" style="color: #F1F1F1;" ><i class="fa fa-user-o" aria-hidden="true"></i>
         LOGIN</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

    
    @yield('content')
</header>
 		
<footer class="footer">
<div class="container">
<div class="row ">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-12 col-sm-4">
        <p class="pfooter">REDES SOCIAS</p>
      </div>
      <div class="col-12 col-sm-4">
        <P class="pfooter">ONDE NOS ENCONTRAR?</P>
        <small class="small p1footer">Rua São José, 1143</small><br>
        <small class="small p1footer">Proximo a escola Pudium</small>
      </div>
      <div class="col-12 col-sm-4">
        <P class="pfooter">CONTATO</P>
        <small class="p1footer">(96) 9 9144-5397 <br> (96)  9 8118-1047</small>
      </div>
    </div>
  </div>
</div>
</div>
</footer>
</body>

</html>
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="../js/efeito.js"></script>
@stack('scripts')