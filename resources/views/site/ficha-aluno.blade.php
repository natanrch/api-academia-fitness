@php
use App\Helpers\DataHelper;
@endphp


@extends('layouts.main')

@section('content')
<br>

      <div class="container">
        <div class="section-header">
          <h2 class="text-center">MINHA FICHA</h2>
          <hr style="max-width: 122px; height: 3px; background-color: #B95922;">
        </div>
        <h2>Treino de Hoje: <i class="fa fa-hand-o-right playicon" aria-hidden="true" ></i> {{$treinoDeHoje->treino}}</h2>
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
        <a href="{{url()->current()}}" class="btn btnlaranja mb-2 ">CANCELAR <i class="fa fa-times" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="col-12 col-sm-6 text-center">
              <p class="nomealuno" style="font-size: 20px">Sequência de treinos: </p>
           <p class="">
             @foreach($sequencia as $s)
              <span class="fontvigor" style="font-size: 25px"> {{$s->treino}} <i class="fa fa-hand-o-right playicon" aria-hidden="true"></i> 
             @endforeach
             e repete!</span>
          </p>
        </div>
        </div>
      </div>
        


    <div class="container justify-content-center ">
    <div class="row">
      <div class="col-12 col-sm-6">
        <div class="table-responsive">
          <table class="table table-sm text-center table-bordered">
  <thead>
    <tr class="colormenu">
      <th scope="col" class="ficha text-white">Data de Criação</th>
      <th scope="col" class="ficha text-white">Data de Revisão</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td class="ficha">{{DataHelper::pegaDataDeDateTime($ficha->created_at)}} <i class="fa fa-calendar playicon" aria-hidden="true"></i></td>
       <td scope="row" class="ficha" >{{DataHelper::formataData($ficha->revisao)}} <i class="fa fa-calendar playicon" aria-hidden="true"></i> </td>
      
    </tr>
  </tbody>
</table>
<table class="table table-sm text-center table-bordered " >
  <thead>
    <tr class="colormenu">
      <th scope="col" class="ficha text-white">Objetivo</th>
      <th scope="col" class="ficha text-white">Método</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" class="ficha" > {{$ficha->objetivo}} </td>
      <td class="ficha">{{$ficha->metodo}} </td>
    </tr>
  </tbody>
</table>


</div>
</div>

      <div class="col-12 col-sm-6">
        <div class="table-responsive">
          <table class="table table-sm text-center table-bordered " >
  <thead>
    <tr class="colormenu">
      <th scope="col" class="ficha text-white">Aeróbico </th>
      <th scope="col" class="ficha text-white">Tempo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" class="ficha" > {{$ficha->treino_aerobico}} </td>
      <td class="ficha"> {{$ficha->tempo_aerobico}} minutos <i class="fa fa-clock-o playicon" aria-hidden="true"></i></td>
    </tr>
  </tbody>
</table>

<table class="table table-sm text-center table-bordered">
  <thead>
    <tr class="colormenu">
      <th scope="col" class="ficha text-white">Aquecimento</th>
      <th scope="col" class="ficha text-white">Intervalo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" class="ficha" >{{$ficha->aquecimento}} minutos <i class="fa fa-clock-o playicon" aria-hidden="true "></i></td>
      <td class="ficha">{{$ficha->intervalo}} segundos <i class="fa fa-clock-o playicon" aria-hidden="true"></i></td>
      
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
    <tr class="colormenu">
      <th scope="col" class="text-white">EXERCÍCIO</th>
      <th scope="col" class="text-white">SÉRIE</th>
      <th scope="col" class="text-white">PESO</th>
    </tr>
  </thead>
  <tbody class="fonttd">
      @foreach($treino as $exercicio)
        <tr >
          <td scope="row" >
            
           <input type="checkbox" aria-label="Checkbox for following text input" style="">
            <!-- Button trigger modal -->
              <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-xl" style="border-radius: 20%; background-color: #fff0">
                <img src="../svg/play.svg" style="max-width: 40px; ">
                
              </button>
           <span><strong>{{$exercicio->exercicio->titulo}}</strong> </span>
              

            </td>
          <td class="text-center"><span><strong>{{$exercicio->series}} x {{$exercicio->repeticoes}}</strong> </span></td>
          <td class="text-center"><span><strong>{{$exercicio->peso}} Kg</strong> </span></td>
        </tr>
      @endforeach
  </tbody>
  <tfoot class="fonttd">
    <tr>
      <th scope="col" colspan="3">
        Instrutor: 
          <img src="{{$ficha->ficha_instrutor->instrutor->imagem ? asset('storage/'.$ficha->ficha_instrutor->instrutor->imagem) : '../img/usuario.png'}}" alt="..." class="rounded-circle" style="width: 30px; height: 30px"> 
        {{$ficha->ficha_instrutor->instrutor->name}} 
  <span><a class="btn btnlaranja " data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Observações
  </a></span>
  <div class="collapse" id="collapseExample">
  <div class="card card-body">
    {{$ficha->observacoes}}
  </div>
    </div>
   </div>
      </th scope="col">
    </tr>
   <!-- <tr>
      <th scope="col">
        Data: {{DataHelper::pegaDataDeDateTime($ficha->created_at)}}
      </th>
       <th scope="col" colspan="2">
        Revisão: {{DataHelper::formataData($ficha->revisao)}}
      </th>
    </tr> -->
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
        <img src="/img/iconmusculo.png" alt="icone do musculo" class="rounded-circle " width="50" height="50" >
      </div>
      <div class="modal-footer" >
        <form method="POST" id="finaliza">
          {{csrf_field()}}
          <input type="hidden" name="treino" value="{{$treinoDeHoje->id}}">
          <input type="hidden" name="ficha" value="{{$ficha->id}}">
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

  
@endpush