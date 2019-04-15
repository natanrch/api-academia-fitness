@extends('layouts.main')

@section('content')
<nav class="nav nav-pills nav-fill">
  <a class="nav-item nav-link" href="/perfil-app" ><i class="fa fa-user-o" aria-hidden="true" ></i></a>
  <a class="nav-item nav-link" href="/ficha-app"><i class="fa fa-file-text-o " aria-hidden="true"></i></a>
</nav>

      <div class="container">
        <div class="section-header">
          <h2 class="text-center">MINHA FICHA</h2>
          <hr style="max-width: 122px; height: 3px; background-color: #B95922;">
        </div>
        <h2>Treino de Hoje: <i class="fa fa-hand-o-right playicon" aria-hidden="true" ></i></h2>
      </div>


      <div class="container justify-content-center ">
    <div class="row">
      <div class="col-12 col-sm-6">
        <form class="form-inline">
           <div class="form-group mx-sm-3 mb-2 col-12 ">
             <label for="treino" >Mudar treino </label> 
             <select name="treino" class="form-control" id="treino">
                <option selected value="">x</option>
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">C</option>
                <option value="4">D</option>
                <option value="5">E</option>
                <option value="6">F</option>
              </select>
           </div>
           <div class="col-auto">
          <button class="btn btnlaranja mb-2" type="submit" style="min-width: 78px">SIM <i class="fa fa-check-circle" aria-hidden="true"></i></button>   
        </form>
        <a href="" class="btn btnlaranja mb-2 ">CANCELAR <i class="fa fa-times" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="col-12 col-sm-6 text-center">
              <p class="nomealuno" style="font-size: 20px">Sequência de treinos: </p>
           <p class="">
      
              <span class="fontvigor" style="font-size: 25px">  <i class="fa fa-hand-o-right playicon" aria-hidden="true"></i> 
             
             e repete!</span>
          </p>
        </div>
        </div>
      </div>
        


    <div class="container justify-content-center ">
    <div class="row">
      <div class="col-12 col-sm-6">
        <div class="table-responsive">
<table class="table table-sm text-center table-bordered " >
  <thead>
    <tr class="bg-primary">
      <th scope="col" class="ficha">Objetivo</th>
      <th scope="col" class="ficha">Método</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" class="ficha" > </td>
      <td class="ficha"> </td>
    </tr>
  </tbody>
</table>
</div>
</div>

      <div class="col-12 col-sm-6">
        <div class="table-responsive">
<table class="table table-sm text-center table-bordered">
  <thead>
    <tr class="bg-primary">
      <th scope="col" class="ficha">Aquecimento</th>
      <th scope="col" class="ficha">Intervalo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" class="ficha" > minutos <i class="fa fa-clock-o playicon" aria-hidden="true "></i></td>
      <td class="ficha"> segundos <i class="fa fa-clock-o playicon" aria-hidden="true"></i></td>
      
    </tr>
  </tbody>
</table>
</div>
</div> 
</div>
</div>

 <div class="container" >
<div class="row " >
      <div class="col-12 col-sm-12 ">
        <div class=" " style="min-width: -50em">
  <table class="table table-sm table-bordered" >
  <thead class="text-center fontth">
    <tr class="bg-primary">
      <th scope="col">EXERCÍCIO</th>
      <th scope="col">SÉRIE</th>
      <th scope="col">PESO</th>
    </tr>
  </thead>
  <tbody class="fonttd">
     
        <tr>
          <td scope="row"> <input type="checkbox" aria-label="Checkbox for following text input" style="border: 1px solid #ccc"> 
              <!-- Button trigger modal -->
              <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-xl" style="border-radius: 20%">
                <i class="fa fa-play-circle-o playicon" aria-hidden="true" style="font-size: 25px"></i>
              </button>

            </td>
          <td class="text-center"></td>
          <td class="text-center">Kg</td>
        </tr>
  
  </tbody>
  <tfoot class="fonttd">
    <tr>
      <th scope="col" colspan="3">
        Instrutor: <img src="../img/usuario.png" alt="..." class="rounded-circle" style="width: 30px; height: 30px"> 
  <span><a class="btn btnazul " data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Observações
  </a></span>
  <div class="collapse" id="collapseExample">
  <div class="card card-body">
    
  </div>
    </div>
   </div>
      </th scope="col">
    </tr>
    <tr>
      <th scope="col">
       
      </th>
       <th scope="col" colspan="2">
        Revisão: 25/02/2019
      </th>
    </tr>
  </tfoot>
</table>
  <button class="btn btnlaranja" type="button" data-toggle="modal" data-target="#modal-alert" id="suss">CONCLUIR TREINO <i class="fa fa-check-circle" aria-hidden="true"></i></button><br><br>
</div>
</div>
</div>
</div>

<div class="modal fade" id="modal-alert">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
        <h1 class="fontvigor text-center" style=" font-size: 40px;  color: #000">Mais um pra conta!</h1>
        <img src="img/iconmusculo.png" alt="icone do musculo" class="rounded-circle " width="50" height="50" >
      </div>
      <div class="modal-footer" >
        <form method="POST" id="finaliza">
          
          <input type="hidden" name="treino" >
          <input type="hidden" name="ficha">
          <!--<button class="btn btnlaranja" type="submit" id="suss">CONCLUIR TREINO <i class="fa fa-check-circle" aria-hidden="true"></i></button>-->
          <button type="submit" id="enviar" class="btn btnlaranja">FINALIZAR</button>
        </form>
      </div>
    </div>
  </div>
  

</div>
@include('site.partials.modal-demostrativo')


@endsection

@push('scripts')
  <script type="text/javascript">
    $(document).ready(function() {
      $('successtreino').submit() {
        alert('Mais um pra conta!');
      }
    });
    $('#suss').click() {
      $('#idfinaliza').submit();
    }
  </script>

  <br>
@endpush