@extends('layouts.main')

@section('content')
<br>
<div class="container">
        <div class="section-header">
          <h2 class="text-center">MINHA FICHA</h2>
          <hr style="width: 13%">
        </div>
        <h2>Treino de Hoje: A </h2>
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
      <td scope="row" class="ficha" >10 Minutos</td>
      <td class="ficha">30 Seguntos </td>
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




<div class="container justify-content-center">
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
    <tr>
      <td> <input type="checkbox" aria-label="Checkbox for following text input" style="border: 1px solid #D9E0E6"> Agachamento livre <a href=""><i class="fa fa-play-circle-o playicon" aria-hidden="true" style="font-size: 25px"></i></a></td>
      <td class="text-center">4x12</td>
      <td class="text-center">40kg</td>
    </tr>
  </tbody>
  <tfoot class="fonttd">
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
</div>

@endsection