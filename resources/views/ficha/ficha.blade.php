@php
  use App\Helpers\DataHelper;
@endphp
@extends('layouts.main')

@section('content')
<br>



      <div class="container">
        <div class="section-header">
          <h2 class="text-center">FICHA COMPLETA</h2>
          <hr style="max-width: 122px; height: 3px; background-color: #B95922;">
          <a href="/ficha/{{$ficha->id}}/edit" class="btn btnlaranja">Editar <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        </div>
        
      </div>
<br>
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

 <div class="container " >
<div class="row " >
      <div class="col-12 col-sm-12 ">
        <div class="table-responsive " style="min-width: -50em">
  <table class="table table-sm table-bordered " >
  <thead class="text-center fontth">
    <tr class="colormenu">
      <th scope="col" class="text-white">EXERCÍCIO</th>
      <th scope="col" class="text-white">SÉRIE</th>
      <th scope="col" class="text-white">PESO</th>
    </tr>
  </thead>
  <tbody class="fonttd">
      @foreach($ficha->ficha_exercicios as $exercicio)
        <tr>
          <td scope="row">
            <button type="button" class="btn" data-toggle="modal" data-target=".modal-{{$exercicio->exercicio->id}}" style="border-radius: 20%; background-color: #fff0">
                <img src="../svg/play.svg" style="max-width: 40px; "></button>
           <strong>{{$exercicio->treino->treino}} - {{$exercicio->exercicio->titulo}}</strong> </span>
              <!-- Button trigger modal 
              <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-xl" style="border-radius: 20%">
                <i class="fa fa-play-circle-o playicon" aria-hidden="true" style="font-size: 25px"></i>
              </button>--> 
              
              

            </td>
          <td class="text-center"><span><strong>{{$exercicio->series}} x {{$exercicio->repeticoes}}</strong> </span></td>
          <td class="text-center"><span><strong>{{$exercicio->peso}} Kg</strong> </span></td>
        </tr>
        @include('site.partials.modal-demostrativo', [
            'descricao' => $exercicio->exercicio->descricao,
            'exercicio' => $exercicio->exercicio->id,
          ])

      @endforeach
  </tbody>
  <tfoot class="fonttd">
    <tr>
      <th scope="col" colspan="3">
        Instrutor: <img src="{{$ficha->ficha_instrutor->instrutor->imagem ? asset('storage/'.$ficha->ficha_instrutor->instrutor->imagem) : '../img/usuario.png'}}" alt="..." class="rounded-circle" style="width: 30px; height: 30px"> {{$ficha->ficha_instrutor->instrutor->name}} 
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
  
</div>
</div>
</div>
</div>

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