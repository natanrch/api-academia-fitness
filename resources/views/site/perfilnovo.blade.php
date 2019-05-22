@php

use App\Helpers\DataHelper;

@endphp

@extends('layouts.main')

@section('content')
<br>  <br>

<div class="container">
   @if(session('message'))
    @component('components.alert')
      @slot('type'){{ session('message')['type'] }}@endslot
      {{ session('message')['content'] }}
    @endcomponent
  @endif
        <div class="section-header">
          <h2 class="text-center">MEU PERFIL</h2>
          <hr style="max-width: 122px; height: 3px; background-color: #B95922;">
        </div>
        
      </div>
      <br><br>
<div class="container">
<div class="row ">
    <div class="col-sm-6">
<div class="card mb-3" style="max-width: 540px; background: #060a4b; border: none;">
  <div class="row">
    <div class="col-md-4 text-center"><br>
        <img src="{{$aluno->imagem ? asset('storage/'.$aluno->imagem) : '../img/usuario.png'}}" alt="foto de aluno" class="rounded-circle fotoaluno img-fluid"/ style="margin:  5px"><br>
      <button type="button" class="btn " data-toggle="modal" data-target=".adcfoto" style="margin-top: 5px; background-color: ; border: 1px solid #; border-radius: 15%"> <img src="../svg/photo-camera.svg" alt="foto de aluno" class=" img-fluid" width="25" height="25" style=""></button><br><br>

    </div>
    <div class="col-md-8">
      <div class="card-body" style="">
        <h5 class="card-title ficha text-white" style="font-size: 25px"><strong>{{$aluno->name}}</strong></h5>
        <div class="descriperfil text-white">
                            <strong> Modalidade: </strong>{{$aluno->modalidade}}
                            
                        </div>
                         <div class="descriperfil text-white">
                            <strong>Instrutor:</strong> {{$aluno->instrutor->instrutor->name}} 
                            
                        </div>
                         <div class="descriperfil text-white">
                            <strong>Pagamento:</strong> Dia {{$aluno->data_de_pagamento}}
                        </div>
                         <div class="descriperfil text-white">
                              <strong>Próxima Avaliação Física: </strong>{{DataHelper::formataData($aluno->proxima_avaliacao)}}
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
            <h2>Histórico de Treinos</h2>
           <div class=" ">
              <p class="nomealuno" style="font-size: 20px">Sequência Realizada </p>
           <p class="">
        
          <div class="scrolltreino">
{{--               <span class="fontvigor" style="font-size: 25px">
            
                @foreach($treinos as $treino)
                  {{$treino->treino->treino}}  <i class="fa fa-hand-o-right playicon" aria-hidden="true"></i> {{$treino->created_at}}
                @endforeach
             </span> --}}
             @if(!is_null($treinos))
                 <ul class="fontvigor" style="font-size: 25px">
                    @foreach($treinos as $treino)
                      <li style="list-style-type: none;"><i class="fa fa-arrow-down" aria-hidden="true"></i> {{$treino->treino->treino}}  <i class="fa fa-hand-o-right playicon" aria-hidden="true"></i> <span class="Nomeperfil">{{DataHelper::pegaDataDeDateTime($treino->created_at)}}</span></li>
                    @endforeach
                 </ul>
             @else
                  <p class="ficha">Ainda não foi realizado nenhum treino.</p>
             @endif
          </p>
          </div>
        </div>
        </div>
    </div>
</div>
</div>
<!-- modal de adcionar foto -->

@include('site.partials.modal-fotoperfil')
<br><br><br><br><br>
    @endsection
