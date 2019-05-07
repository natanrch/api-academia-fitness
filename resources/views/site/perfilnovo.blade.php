@extends('layouts.main')

@section('content')
<br>  

<div class="container">
        <div class="section-header">
          <h2 class="text-center">MEU PERFIL</h2>
          <hr style="max-width: 122px; height: 3px; background-color: #B95922;">
        </div>
        
      </div>
      <br>
<div class="container">
<div class="row ">
    <div class="col-sm-6">
<div class="card mb-3" style="max-width: 540px; background: #060a4b; border: none;">
  <div class="row">
    <div class="col-md-4 text-center"><br>
      <img src="{{asset('storage/'.$aluno->imagem)}}" alt="foto de aluno" class="rounded-circle fotoaluno img-fluid"/ style="margin:  5px"><br>
      <button type="button" class="btn " data-toggle="modal" data-target=".adcfoto" style="margin-top: 5px; background-color: ; border: 1px solid #; border-radius: 15%"> <img src="../svg/photo-camera.svg" alt="foto de aluno" class=" img-fluid" width="25" height="25" style=""></button>

    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title Nomeperfil text-white">{{$aluno->name}}</h5>
        <div class="descriperfil text-white">
                            Modalidade: {{$aluno->modalidade}}
                            
                        </div>
                         <div class="descriperfil text-white">
                            Data de Pagamento: {{$aluno->data_de_pagamento}}
                        </div>
                         <div class="descriperfil text-white">
                            Data da Próxima Avaliação Física: {{$aluno->proxima_avaliacao}}
                        </div>
                         <div class="descriperfil text-white">
                            Instrutor: {{$aluno->instrutor->instrutor->name}}
                        </div>
                        <br>
                        <div class="">
                          <a href="{{asset('storage/'.$aluno->avaliacao)}}" class="btn btnlaranja btn-sm">AVALIAÇÃO FÍSICA <i class="fa fa-line-chart" aria-hidden="true"  style="color: #F1F1F1"></i></a>
                        </div>
      </div>
    </div>
</div>
</div>
  
    </div>
        <div class="col-sm-6">
            <h2>Historico de Treinos</h2>
           <div class="">
              <p class="nomealuno" style="font-size: 20px">Sequência Realizada </p>
           <p class="">
      
              <span class="fontvigor" style="font-size: 25px"> A  <i class="fa fa-hand-o-right playicon" aria-hidden="true"></i> B <i class="fa fa-hand-o-right playicon" aria-hidden="true"></i> C
             
             </span>
          </p>
        </div>
        </div>
    </div>
</div>
</div>
<!-- modal de adcionar foto -->

@include('site.partials.modal-fotoperfil')
<br><br><br>
    @endsection
