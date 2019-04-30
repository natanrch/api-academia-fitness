<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/estilo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet ">
    <link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

  <link href="{{ url('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ url('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ url('lib/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ url('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">



    <title>Academia Fitness</title>
</head>
<body>
  <main>
 	<header >
    <nav class="navbar navbar-light colormenu" style="padding: .1rem">
    <a class="navbar-brand" href="/"><img src="../img/logo.png" style="max-width:200px; max-height: 50px"></a>
  <a class="navbar-brand" href="#">
    <a href="#" class="btn btnlaranja" style="color: #F1F1F1; border-radius: 20px; ">Sair <i class="fa fa-share-square-o" aria-hidden="true"></i></a>
  </a>
</nav>
  </header>

  @yield('sessao')
<br><br>
  <footer>
    <nav class="nav nav-pills nav-fill colormenu fixed-bottom" >
  <a class="nav-item nav-link link-nav" href="/perfil-app" ><i class="fa fa-user-o "style="color: #F1F1F1" aria-hidden="true" ></i></a>
  <a class="nav-item nav-link link-nav" href="/ficha-app"><i class="fa fa-file-text-o" style="color: #F1F1F1" aria-hidden="true"></i></a>
</nav>
  </footer>

    </main>

</body>

</html>
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/sweetalert.js"></script>
<script type="text/javascript" src="../js/efeito.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script> 