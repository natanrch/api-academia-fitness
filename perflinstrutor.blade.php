<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .fotoaluno{
    width: 170px;
    height: 200px;
  }
  body{
    overflow-x:hidden;
  }
  </style>
</head>
<body>

 <nav id="navbar-example2" class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#mdo"><img src="../img/usuario.png" alt="..." class="rounded-circle" style="width: 30px; height: 30px"></a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MENU</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#one">MEUS DADOS</a>
        <a class="dropdown-item" href="#two">MINHS FICHA</a>
    </li>
  </ul>
</nav>

<div class="container " style="margin-top:30px">
  <div class="row">
    <div class="col-12 col-sm-3 text-center" >
      
      <img src="../img/usuario.png" alt="..." class="img-thumbnail fotoaluno text-center" >
      
      <p class="font-weight-bold">Nome Instrutor</p>
      <p class="font-weight-normal"> Data de nascimento: <br> 00/00/000</P>
 
      <p class="font-weight-bold">Descrição</p>
      <p class="font-weight-normal"> Sou formado na area (?), <br>a (?) anos, atuano desde</P>

      <p class="font-weight-bold">Horáriosr</p>
      <p class="font-weight-normal"> Segunda à Sexta:</P>
      <button type="button" class="btn btn-info" style="width: 170px">ALTERAR PERFIL</button>
      <hr class="d-sm-none">
    
    </div>
    <div class="col-12 col-sm-9" style="padding-right: 2em; padding-left: 2em">
      <h1>MEUS ALUNOS</h1>


     <form class="form-row" >
      <div class="form-group col-8 col-sm-10">
        <input class="form-control" type="search" placeholder="Digite um nome" aria-label="Search">
      </div>
      <div class="form-group col-2 col-sm-2">
      <button class="btn" style=" border: 1px solid; height: 40px" type="submit">PESQUISAR</button>
    </div>
    </form>
    <br>

<div class="row" >
  <div class="col-6 col-sm-2">
   
    <div class="text-center">
    <img src="../img/usuario.png" alt="..." class="rounded-circle" style="width: 80px; height: 80px">
    </div>
  
 </div>
  <div class="col-4 col-sm-4">
    <p class="font-weight-bold " style=" margin-top: 5px;">Nome Aluno</p>
    <div class="form-group">
      <button type="button" class="btn btn-primary btn-sm">Ver Pefril</button>
    </div>
  </div>


  <div class="col-6 col-sm-2">
    <div class="text-center"> 
    <img src="../img/usuario.png" alt="..." class="rounded-circle" style="width: 80px; height: 80px"></div>
    </div>
  <div class="col-4 col-sm-4">
    <p class="font-weight-bold">Nome Aluno</p>
    <div class="form-group">
      <button type="button" class="btn btn-primary btn-sm">Ver Pefril</button>
    </div>
  </div>
</div>

    </div>
  </div>
</div>
<br>


<br>

</body>
</html>