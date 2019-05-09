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
  <link href="https://fonts.googleapis.com/css?family=Carter+One|Russo+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">




    <title>Academia Fitness</title>
</head>
<body>
  <main>
 	<header >
    <nav class="navbar navbar-expand-lg navbar-light colormenu " id="navbar" style="padding: .1rem">
       <div class="container" id="topo">
  <!--logo -->
  <a class="navbar-brand" href="/"><img src="/../img/logo.png" style="max-width:200px; max-height: 50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="color: #fff; background-color: #fff; ">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse  justify-content-end linkmenu" id="navbarNavDropdown" style="padding: 3px">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link " href="/" style="color: #F1F1F1">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/sobrenos" style="color: #F1F1F1">SOBRE NÓS</a>
      </li>
       @if(!Auth::check())
       <li class="nav-item "> 
          <a class="nav-link btn btnlaranja"  href="/login" style="color: #F1F1F1; border-radius: 20px; " ><i class="fa fa-user-o " aria-hidden="true"></i>
           LOGIN</a> 
        </li>
       
        @else
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; font-size: 18px ">
          <img src="/../img/usuario.png" alt="foto de perfil" width="30" height="30" class="d-inline-block align-top rounded-circle">
        </a>
        <div class="dropdown-menu linkmenud colormenu text-left" aria-labelledby="navbarDropdownMenuLink" style="border:none;" >
          @if(Auth::user()->isInstrutor())
            <a class="dropdown-item" href="/instrutor/perfil" style="color: #F1F1F1"><i class="fa fa-user-o" aria-hidden="true" style="color: #F1F1F1" ></i> PERFIL </a>
          @elseif(Auth::user()->isDefault())
            <a class="dropdown-item" href="/aluno/perfil" style="color: #F1F1F1"><i class="fa fa-user-o" aria-hidden="true " style="color: #F1F1F1"></i> PERFIL </a>
            <a class="dropdown-item" href="/aluno/ficha" style="color: #F1F1F1"> <i class="fa fa-file-text-o " aria-hidden="true" style="color: #F1F1F1"></i> FICHA</a>
            <!-- <a class="dropdown-item" href="/perfil" style="color: #F1F1F1"><i class="fa fa-line-chart" aria-hidden="true"  style="color: #F1F1F1"></i> AVALIAÇÃO FÍSICA </a> -->
          @endif
          <a class="dropdown-item" href="/logout" style="color: #F1F1F1">SAIR</a>
        </div>
      </li>
         @endif
    </ul>
  </div>
  </div>
</nav>
</header>

    @yield('content')
</section>
 		
<footer class="footer ">
<div class="container text-center" style="padding-top: 10px">
<div class="row ">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-12 col-sm-4">
        <p class="pfooter">REDES SOCIAS</p>
        <a href=""><i class="fa fa-facebook-square playicon" aria-hidden="true" style=" font-size:  25px; margin-right: 5px" ></i></a>
        <a href=""><i class="fa fa-instagram playicon" aria-hidden="true" style=" font-size:  25px;"></i></a>
      </div>
      <div class="col-12 col-sm-4">
        <div >
        <P class="pfooter">ONDE NOS ENCONTRAR?</P>
        <small ><a href="https://goo.gl/maps/ZhcBZ68Cu5K2" class="small p1footer"><i class="fa fa-map-marker playicon " style="font-size: 25px;" aria-hidden="true"></i> Rua São José, 1143</a></small><br>
        <small class="small p1footer">Proximo a escola Pudium</small><br>
        </div>
      </div>
      <div class="col-12 col-sm-4">
        <P class="pfooter">CONTATO</P>
        <small class="p1footer"> <i class="fa fa-whatsapp playicon" aria-hidden="true" style="font-size: 16px;"></i> (96) 9 9144-5397  <br><i class="fa fa-phone playicon" aria-hidden="true" style="font-size: 16px;"></i> (96)  9 8118-1047 </small>

      </div>
    </div>
  </div>
</div>
<br>

</footer>
  <div class="smoothscroll-top">
    <span class="scroll-top-inner">
        <i class="fa fa-2x fa-arrow-circle-up"></i>
    </span>
</div>
</main>

</body>

</html>
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/sweetalert.js"></script>
<script type="text/javascript" src="../js/efeito.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script> 

@stack('scripts')