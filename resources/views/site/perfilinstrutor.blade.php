@php
use Carbon\Carbon;
@endphp


@extends('layouts.main')

@section('content')

<div class="container">
        <div class="row ">
            <div class="col-sm-3 col-12" >
                <br>

                <div class="card mb-12 contperfil" style="max-width: 540px; max-height: 500px; background: #060a4b; border: none;">
  
    <div class=" text-center"><br>
      <img src="{{asset('storage/'.$instrutor->imagem)}}" alt="foto de instrutor" class="rounded-circle fotoaluno img-fluid"/ style="margin:  5px"><br>
      <button type="button" class="btn " data-toggle="modal" data-target=".adcfoto" style="margin-top: 5px; background-color: ; border: 1px solid #; border-radius: 15%"> <img src="../svg/photo-camera.svg" alt="foto de aluno" class=" img-fluid" width="25" height="25" style=""></button>
    </div>
    <div class="">
      <div class="card-body">
        <h5 class="card-title text-white ficha"  style="font-size: 25px"><strong>{{$instrutor->name}}</strong></h5>
            <div class="descriperfil text-white">
               <strong> CREF:</strong> {{$instrutor->cref}}                        
            </div>
        <br>
      </div>
    </div>
</div>
</div>
            <div class="col-md-9">
                <div class="profile-content" >
                    <div class="row">
                        <div class="col-md-12">
                            <h2>MEUS ALUNOS <button type="button" class="btn btnlaranja" data-toggle="modal" data-target=".modalaluno">ADICIONAR  <i class="fa fa-user-plus" aria-hidden="true"></i></button></h2>


     <form class="form-row" >
      <div class="form-group col-8 col-sm-8">
        <input class="form-control inputb" type="search" placeholder="Pesquisar " aria-label="Search" name="aluno">
      </div>
      <div class="form-group col-4 col-sm-4">
      <button class="btn btnlaranja"  type="submit" style="border-radius: 50%"> <i class="fa fa-search" aria-hidden="true"></i></button>
      <a href="/instrutor/perfil"><i class="fa fa-times" aria-hidden="true" style="font-size: 18px; color:red"></i></a>
    </div>
    </form>
    <br>
<div class="scroll">
<div class="overflow-auto">
@foreach($alunos as $aluno)
<div class="row" >
  <div class="col-12 col-sm-2 foto">
   
    <div class="text-center">
    <img src="{{$aluno->imagem ? asset('storage/'.$aluno->imagem) : '../img/usuario.png'}}" alt="foto de perfil do aluno" class="rounded-circle" style="width: 80px; height: 80px">
    </div>
  
 </div>
  <div class="col-12 col-sm-6 text-left botoes">
    <p class="nomealuno " style=" margin-bottom: 5px;">{{$aluno->name}}</p>
    <div class="form-group">
      <a href="{{asset('storage/'.$aluno->avaliacao)}}" class="btn btnazul" >Avaliação Física <i class="fa fa-download"  aria-hidden="true"></i></a>
      <a href="/ficha/create?user={{$aluno->id}}" class="btn btnazul" style="margin-top: 2px">{{$aluno->ficha ? 'Ver Ficha' : 'Criar Ficha'}}<i class="fa fa-file-text-o " aria-hidden="true"></i></a>
    @if(!$aluno->ficha)
        <span class="text-danger">Novo aluno!</span>
    @endif
    @if(!is_null($aluno->ficha) && $aluno->ficha->revisao <= Carbon::now())
        <span class="text-success">Revisar ficha!</span>
    @endif
    </div>
  </div>
</div>
@endforeach
                            <br>
                        </div>
                      </div>
                    </div>
            <h4>TOTAL:{{$totalAlunos}}</h4>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>

@include('site.partials.modal-aluno')

<!-- modal de adcionar foto -->

@include('site.partials.modal-fotoperfil')

@endsection
