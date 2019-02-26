@extends('layouts.main')

@section('content')

<div class="container">
        <div class="section-header">
          <h2 class="text-center">MINHA FICHA</h2>
          <hr style="width: 13%">
        </div>
    </div>
   

    <div class="container justify-content-center ">
<div class="row " >
  <div class="col-sm-12">
    <div class="row">
      <div class="col-12 col-sm-6">
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Aquecimento:</th>
      <th scope="col">Intervalo:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">10 Minutos</td>
      <td>30 Seguntos </td>
    </tr>
    
  </tbody>
  <p class="h2">Treino de Hoje: <b style="color: blue">A</b> </p>
</table>
      </div>
      <div class="col-12 col-sm-6">
       <table class="table table-sm">
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
   <!-- <tr>
       <td scope="row">A</td>
      <td>B</td>
      <td>C</td>
      <td>A</td>
      <td>B</td>
      <td>C</td>
    </tr>
    <tr>
       <td scope="row">A</td>
      <td>B</td>
      <td>C</td>
      <td>A</td>
      <td>B</td>
      <td>C</td>
    </tr> -->
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Exercicio</th>
      <th scope="col">Serie</th>
      <th scope="col">Peso</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td> <input type="checkbox" aria-label="Checkbox for following text input"> Agachamento livre<i class="fa fa-play-circle-o" aria-hidden="true"></i></td>
      <td>4x12</td>
      <td>40kg</td>
    </tr>
  </tbody>
  <tfoot class="">
    <tr>
      <th scope="col" colspan="3">
        Instrutor: <img src="../img/usuario.png" alt="..." class="rounded-circle" style="width: 30px; height: 30px"> Jorge Costa   
      </th scope="col">
    </tr>
    <tr>
      <th>
        Data: 25/02/2019
      </th>
       <th scope="col" colspan="2">
        Revisão: 25/02/2019
      </th>
    </tr>
  </tfoot>
</table>
</div>

@endsection