@extends('layouts.main')

@section('content')

  <nav id="navbar-example2" class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#mdo">iCON</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MENU</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#one">MEUS DADOS</a>
        <a class="dropdown-item" href="#two">MINHS FICHA</a>
    </li>
  </ul>
</nav>

  <div class="container">
        <div class="section-header">
          <h2 class="text-center">DADOS</h2>
          <hr style="width: 13%">
        </div>
    </div>
    <br>


  <div class="container">
    <div class="table-responsive">
    <table class="table table-sm"> 
  
  <tbody>
    <tr>
      <th scope="col" colspan="2">Nome: <small>Lidiane Santos das Neves </small> </th>
      <th scope="col" colspan=> Data de Nascimento: <small>10/07/1997</small></th>
    </tr>
    <tr>
      <th scope="row">Dias de treinamento: <small>3( ) 4( ) 5( ) 6( )</small></th>
      <th>Data: <small>10/07/1997</small> </th>
      <th>Revisão: <small>10/07/1997</small></th>

    </tr>
    <tr>
      <th scope="row">Objetivo: <small>Tonificação</small></th>
      <th scope="row">Intervalo: <small>45 seguntos</small></th>
      <th scope="row">Profª: <small>Jorge Costa</small></th>
    </tr>
    <tr>
      <th scope="row" colspan="2" >Método: <small>Não sei</small></th>
      <th><ul class="list-inline dias">
  <li class="list-inline-item">Seg</li>
  <li class="list-inline-item">Ter</li>
  <li class="list-inline-item">Qua</li>
  <li class="list-inline-item">Qui</li>
  <li class="list-inline-item">Sex</li>
</ul></th>
     
    </tr>
    </tr>
    <tr>
      <th scope="row" colspan="2">Aquecimento: <small> 10 minutos</small></th>
     <th>
      <ul class="list-inline">
        <li class="list-inline-item semanas" > </li>
        <li class="list-inline-item semanas" > </li>
        <li class="list-inline-item semanas" > </li>
        <li class="list-inline-item semanas" > </li>
        <li class="list-inline-item semanas" > </li>
      </ul>
    </th>
    </tr>
    <tr>
      <th scope="row" colspan="2">Treino Aeroróbico: <small> 20min ( ) 30min ( ) 40min ( ) 50min ( )</small></th>
     <th>
      <ul class="list-inline">
        <li class="list-inline-item semanas" > </li>
        <li class="list-inline-item semanas" > </li>
        <li class="list-inline-item semanas" > </li>
        <li class="list-inline-item semanas" > </li>
        <li class="list-inline-item semanas" > </li>
      </ul>
    </th>
      
    </tr>
    <tr>
      <th scope="row" colspan="2">Observações: </th>
      <th>
      <ul class="list-inline">
        <li class="list-inline-item semanas" > </li>
        <li class="list-inline-item semanas" > </li>
        <li class="list-inline-item semanas" > </li>
        <li class="list-inline-item semanas" > </li>
        <li class="list-inline-item semanas" > </li>
      </ul>
    </th>
     
    </tr>
  </tbody>
</table>
</div>
</div>
<br>
 <div class="container">
        <div class="section-header">
          
          <h2 class="text-center">GRUPOS MUSCULARES </h2>
          <hr style="width: 13%">
          <P class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br> sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. </P>
          
        </div>
    </div>

    <!--tipos de musculos-->
<br>
<div class="container">
  <div class="card-deck "  >
  <div class="row">
    <div class="col-sm-4 card " style="border:none;"  >
      <img class="card-img-top" src="../img/musculacao.png" alt="Imagem de capa do card">
      <h3 class="text-center">Coxas</h3>
    </div>
    <div class="col-sm-4 card"  style="border:none;">
      <img class="card-img-top" src="../img/musculacao.png" alt="Imagem de capa do card">
      <h3 class="text-center">Glúteos</h3>
    </div>
    <div class="col-sm-4 card" style="border:none;" >
      <img class="card-img-top" src="../img/musculacao.png" alt="Imagem de capa do card">
      <h3 class="text-center">Glúteos</h3>
    </div>
    <div class="col-sm-4 card" style="border:none;" >
      <img class="card-img-top" src="../img/musculacao.png" alt="Imagem de capa do card">
      <h3 class="text-center">Glúteos</h3>
    </div>
  </div>
</div>
</div>


@endsection
