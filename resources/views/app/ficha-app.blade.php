@extends('layouts.main')

@section('content')
<br><br>
<!-- Just an image -->
<nav class="navbar navbar-light colormenu">
    <a class="navbar-brand" href="/"><img src="../img/logo.png" style="max-width:200px; max-height: 50px"></a>
  <a class="navbar-brand" href="#">
    <a href="#" class="btn btnlaranja" style="color: #F1F1F1; border-radius: 20px; ">Sair <i class="fa fa-share-square-o" aria-hidden="true"></i></a>
  </a>
</nav>
<nav class="nav nav-pills nav-fill colormenu fixed-bottom">
  <a class="nav-item nav-link link-nav" href="/perfil-app" ><i class="fa fa-user-o "style="color: #F1F1F1" aria-hidden="true" ></i></a>
  <a class="nav-item nav-link link-nav" href="/ficha-app"><i class="fa fa-file-text-o" style="color: #F1F1F1" aria-hidden="true"></i></a>
</nav>
 <div class="container">
        <div class="section-header">
          <h2 class="text-center">MINHA FICHA</h2>
          <hr style="max-width: 122px; height: 3px; background-color: #B95922;">
        </div>
        <h2>Treino de Hoje: <i class="fa fa-hand-o-right playicon" aria-hidden="true" ></i> B</h2>
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
      
              <span class="fontvigor" style="font-size: 25px"> A  <i class="fa fa-hand-o-right playicon" aria-hidden="true"></i> B
             
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
      <td scope="row" class="ficha" >Emagrecer </td>
      <td class="ficha"> Normal</td>
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
      <td scope="row" class="ficha" > 10 minutos <i class="fa fa-clock-o playicon" aria-hidden="true "></i></td>
      <td class="ficha"> 30 segundos <i class="fa fa-clock-o playicon" aria-hidden="true"></i></td>
      
    </tr>
  </tbody>
</table>
</div>
</div> 
</div>
</div>


<div class="container">
<div class="card mb-3 text-white " style="max-width: 540px; border-radius: 20px; border:none; background: #9EDEF366">
  <div class="row">
    <div class="col-4 text-center">
       <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-xl" style="border-radius: 20%; background-color: #fff0">
                <img src="../img/play.png" style="max-width: 90px; margin-top:15px;">
                
              </button>
    </div>
    <div class="col-8">
      <div class="card-body">
        <h5 class="card-title text-left ficha" >Agachamento Livre</h5>
        <p class="card-text ficha" style="font-size:16px">SÉRIE: <strong>4 X 20</strong></p>
        <p class="card-text ficha" style="font-size:16px">PESO: <strong>40kg</strong> </p>
      </div>
    </div>
  </div>
</div>


<div class="card mb-3 text-white " style="max-width: 540px; border-radius: 20px; border:none; background: #9EDEF366">
  <div class="row">
    <div class="col-4 text-center">
       <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-xl" style="border-radius: 20%; background-color: #fff0">
                <img src="../img/play.png" style="max-width: 90px; margin-top:15px;">
                
              </button>
    </div>
    <div class="col-8">
      <div class="card-body">
        <h5 class="card-title text-left ficha" >Agachamento Livre</h5>
        <p class="card-text ficha" style="font-size:16px">SÉRIE: <strong>4 X 20</strong></p>
        <p class="card-text ficha" style="font-size:16px">PESO: <strong>40kg</strong> </p>
      </div>
    </div>
  </div>
</div>

</div>


     

    
 <div class="container" >
<div class="row " >
      <div class="col-12 col-sm-12 ">
        <div class=" " style="min-width: -50em">
  <table class="table table-sm table-bordered" >
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
       Data: 25/02/2019
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