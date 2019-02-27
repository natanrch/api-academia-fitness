@extends('layouts.main')

@section('content')

 <nav id="navbar-example2" class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#mdo">iCON</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MENU<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#one">MEUS DADOS</a>
        <a class="dropdown-item" href="#two">MINHS FICHA</a>
    </li>
  </ul>
</nav>

<div class="container " style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3 text-center" >
      
     <img src="../img/usuario.png" alt="..." class="img-thumbnail fotoaluno text-center" style="border: 1px solid #131852">
      
      <p class="Nomeperfil">Nome Aluno</p>
      <p class="descriperfil"> Data de nascimento: <br> 00/00/000</P>
      <p class="descriperfil"> Dias que treino: <br> Seg, Ter, Sex  </p>
      <button type="button" class="btn  btnlaranja" style="width: 170px">ADICIONAR FOTO</button>

      <!-- BOTÃO PARA QUANDO O INSTRUTOR FOR VER O PERFIL DO ALUNO 

        <button type="button" class="btn  btnlaranja" style="width: 170px">CRIAR FICHA</button> -->
      <br><br>
    
    
    </div>


    <div class="col-sm-9">
      <h2>AVALIAÇÃO FÍSICA</h2>
      <br>
<table class="table ">
  <thead>
    <tr>
      <td scope="col">Peso:</td>
      <td scope="col">Altura:</td>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">IMC:</td>
      <td>Gordura:</td>
      
    </tr>
    <tr>
      <td scope="row">...</td>
      <td>...</td>
      
    </tr>
    <tr>
      <td scope="row">...</td>
      <td>...</td>
      
    </tr>
  </tbody>
</table>
<br>
<!--
<div class="container">
<div class="row">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-12 col-sm-6">
         <div class="fakeimg"></div>
      </div>
      <div class="col-12 col-sm-6">
        <div class="fakeimg"></div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-12 col-sm-6">
        <div class="fakeimg"></div>
      </div>
      <div class="col-12 col-sm-6">
         <div class="fakeimg"></div>
      </div>
    </div>
  </div>
</div>
</div> -->
<br>

@endsection
