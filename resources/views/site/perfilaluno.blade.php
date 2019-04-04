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
        <a class="dropdown-item" href="/ficha-aluno">MINHA FICHA</a>
    </li>
  </ul>
</nav>

<div class="container " style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3 text-center" >
      
     <img src="../img/usuario.png" alt="..." class="img-thumbnail rounded-circle fotoaluno text-center" >
      
      <p class="Nomeperfil">Nome Aluno</p>
      <span class="descriperfil"> <b>Modalidade:</b>  <br> Musculação </span>
      <p class="descriperfil">  <b> Data de Pagamento: </b><br> data  </p>
      <button type="button" class="btn  btnazul " style="width: 170px;">ADICIONAR FOTO <i class="fa fa-file-image-o" aria-hidden="true"></i></button>
      <button type="button" class="btn  btnlaranja" style="width: 170px; margin-top: 2px">MINHA AVALIAÇÃO <i class="fa fa-download"  aria-hidden="true"></i></button>
      <br><br>
    
    
    </div>


    <div class="col-sm-9">
      <br>
<div class="container">
        <div class="section-header">
          <h2 class="text-center">MINHA FICHA</h2>
          <hr style="width: 13%">
        </div>
        <h2>Treino de Hoje:</h2>
    </div>
   

    <div class="container justify-content-center ">
<div class="row " >
  <div class="col-sm-12">
    <div class="row">
      <div class="col-12 col-sm-6">
<table class="table table-sm table-borderless">
  <thead>
    <tr>
      <th scope="col" class="ficha">Aquecimento:</th>
      <th scope="col" class="ficha">Intervalo:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" class="ficha" >{{$ficha->aquecimento}} minutos</td>
      <td class="ficha">{{$ficha->intervalo}} minutos</td>
    </tr>
    
  </tbody>
</table>

  
</table>
</div>      
      <div class="col-12 col-sm-6">
       <table class="table table-sm text-center table-bordered " style="max-width: 500px;">
  <thead>
    <tr>
      <th scope="col">S</th>
      <th scope="col">T</th>
      <th scope="col">Q</th>
      <th scope="col">Q</th>
      <th scope="col">S</th>
      <th scope="col">S</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"><a href="">A</a></td>
      <td><a href="">B</a></td>
      <td><a href="">C</a></td>
      <td><a href="">A</a></td>
      <td><a href="">B</a></td>
      <td><a href="">C</a></td>
    </tr>
    <tr>
      <td scope="row"><a href="">A</a></td>
      <td><a href="">B</a></td>
      <td><a href="">C</a></td>
      <td><a href="">A</a></td>
      <td><a href="">B</a></td>
      <td><a href="">C</a></td>
    </tr>
    <tr>
      <td scope="row"><a href="">A</a></td>
      <td><a href="">B</a></td>
      <td><a href="">C</a></td>
      <td><a href="">A</a></td>
      <td><a href="">B</a></td>
      <td><a href="">C</a></td>
    </tr> 
  </tbody>
</table>
      </div>
    </div>
    </div>
    </div>





  <div class="row ">

  <table class="table table-sm table-bordered  col-12 col-sm-12">
  <thead class="text-center fontth">
    <tr>
      <th scope="col">EXERCÍCIO</th>
      <th scope="col">SÉRIE</th>
      <th scope="col">PESO</th>
    </tr>
  </thead>
  <tbody class="fonttd">
    @foreach($ficha->ficha_exercicios as $exercicio)
      <tr>
        <td> <input type="checkbox" aria-label="Checkbox for following text input" style="border: 1px solid #D9E0E6"> {{$exercicio->exercicio->titulo}} 
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-play-circle-o playicon" aria-hidden="true" style="font-size: 25px"></i>
            </button>

          </td>
        <td class="text-center">{{$exercicio->series}} x {{$exercicio->repeticoes}}</td>
        <td class="text-center">{{$exercicio->peso}} Kg</td>
      </tr>
    @endforeach
  </tbody>
  <tfoot class="fonttd">
    <tr>
      <th scope="col" colspan="3">
        Instrutor: <img src="../img/usuario.png" alt="..." class="rounded-circle" style="width: 30px; height: 30px"> {{$ficha->ficha_instrutor->instrutor->name}}   
      </th scope="col">
    </tr>
    <tr>
      <th>
        Data: {{$ficha->created_at}}
      </th>
       <th scope="col" colspan="2">
        Revisão: 25/02/2019
      </th>
    </tr>
  </tfoot>
</table>
</div>
</div>
</div>
</div>
      <br>

<br>


@endsection
