@extends('layouts.main')

@section('content')

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
      
      <img src="../img/usuario.png" alt="..." class="img-thumbnail fotoaluno text-center" style="border: 1px solid #131852">
      
      <p class="Nomeperfil">Nome Instrutor</p>
      <p class="descriperfil"> Data de nascimento: <br> 00/00/000</P>
 
      <p class="descriperfil"> Meu Horário: <br> Segunda à Sexta:  </p>
      <button type="button" class="btn  btnlaranja" style="width: 170px">ADICIONAR FOTO</button>
      <hr class="d-sm-none">
    
    </div>
    <div class="col-12 col-sm-9" style="padding-right: 2em; padding-left: 2em">
      <h2>MEUS ALUNOS</h2>


     <form class="form-row" >
      <div class="form-group col-6 col-sm-8">
        <input class="form-control inputb" type="search" placeholder="Pesquisar" aria-label="Search">
      </div>
      <div class="form-group col-2 col-sm-2">
      <button class="btn btnlaranja"  type="submit">PESQUISAR</button>
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
    <p class="nomealuno " style=" margin-top: 5px;">Nome Aluno</p>
    <div class="form-group">
      <button type="button" class="btn btnazul btn-sm">Ver Perfil <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
    </div>
  </div>


  <div class="col-6 col-sm-2">
    <div class="text-center"> 
    <img src="../img/usuario.png" alt="..." class="rounded-circle" style="width: 80px; height: 80px"></div>
    </div>
  <div class="col-4 col-sm-4">
    <p class="nomealuno">Nome Aluno</p>
    <div class="form-group">
      <button type="button" class="btn btnazul btn-sm">Ver Perfil <i class="fa fa-chevron-right" aria-hidden="true"></i></button>

       <div class="text-left">
        <br>
  
    <a href=""><i class="fa fa-plus-circle text-left" aria-hidden="true" style="font-size: 50px; color: #242B8C"></i></a>
    </div>
    </div>
   
   
</div>

    </div>
  </div>
  
  
</div>


<br>


<br>

@endsection
