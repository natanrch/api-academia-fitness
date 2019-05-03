@php
use Carbon\Carbon;
@endphp


@extends('layouts.main')

@section('content')

<div class="container">
        <div class="row ">
            <div class="col-md-3 perfil">
                <br>

                <div class="card mb-3" style="max-width: 500px; background: #8fb1b31a; border: none;">
  
    <div class="col-md-12 text-center"><br>
      <img src="../img/usuario.png" alt="foto de aluno" class="rounded-circle fotoaluno img-fluid"/>
    </div>
    <div class="col-md-12">
      <div class="card-body">
        <h5 class="card-title Nomeperfil">Nome do Instrutor</h5>
            <div class="descriperfil">
                CRF: 0000000000-00                           
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
      <div class="form-group col-2 col-sm-2">
      <button class="btn btnlaranja"  type="submit" style="border-radius: 50%"> <i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
    </form>
    <br>
<div class="overflow-auto">
@foreach($users as $user)
<div class="row" >
  <div class="col-12 col-sm-2 foto">
   
    <div class="text-center">
    <img src="../img/usuario.png" alt="foto de perfil do aluno" class="rounded-circle" style="width: 80px; height: 80px">
    </div>
  
 </div>
  <div class="col-12 col-sm-6 text-left botoes">
    <p class="nomealuno " style=" margin-bottom: 5px;">{{$user->name}}</p>
    <div class="form-group">
      <a href="{{asset('storage/'.$user->avaliacao)}}" class="btn btnazul" >Avaliação Física <i class="fa fa-download"  aria-hidden="true"></i></a>
      <a href="/ficha/create?user={{$user->id}}" class="btn btnazul" style="margin-top: 2px">Criar Ficha <i class="fa fa-file-text-o " aria-hidden="true"></i></a>
    @if(!$user->ficha)
        <span class="text-danger">Novo aluno!</span>
    @endif
    @if(!is_null($user->ficha) && $user->ficha->revisao <= Carbon::now())
        <span class="text-success">Revisar ficha!</span>
    @endif
    </div>
  </div>
</div>
@endforeach
                            <br>
                        </div>
                    </div>
            <h4>TOTAL:</h4>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>

@include('site.partials.modal-aluno')


@endsection
