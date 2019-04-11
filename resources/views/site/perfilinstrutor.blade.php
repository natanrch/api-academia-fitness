@extends('layouts.main')

@section('content')

<div class="container " style="margin-top:30px">
  <div class="row">
    <div class="col-12 col-sm-4 text-center" >
      
      <img src="../img/usuario.png" alt="..." class="img-thumbnail rounded-circle fotoaluno text-center">
      
      <p class="Nomeperfil">Nome Instrutor</p>
      <p class="descriperfil"> CREF: <br> 0000000000</P>
      <button type="button" class="btn btnazul btn-sm" data-toggle="modal" data-target=".foto" style="margin-top: 5px;">ADICIONAR <i class="fa fa-camera" aria-hidden="true"></i></button>
      <hr class="d-sm-none">
    
    </div>
    <div class="col-12 col-sm-8" style="padding-right: 2em; padding-left: 2em">
      <h2>MEUS ALUNOS <button type="button" class="btn btnlaranja" data-toggle="modal" data-target=".modalaluno">ADICIONAR  <i class="fa fa-user-plus" aria-hidden="true"></i></button></h2>


     <form class="form-row" >
      <div class="form-group col-8 col-sm-8">
        <input class="form-control inputb" type="search" placeholder="Pesquisar " aria-label="Search">
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
    <img src="../img/usuario.png" alt="..." class="rounded-circle" style="width: 80px; height: 80px">
    </div>
  
 </div>
  <div class="col-12 col-sm-6 text-left botoes">
    <p class="nomealuno " style=" margin-bottom: 5px;">{{$user->name}}</p>
    <div class="form-group">
      <a href="/user/{{$user->id}}" class="btn btnazul" >Avaliação Física <i class="fa fa-download"  aria-hidden="true"></i></a>
      <a href="/ficha/create?user={{$user->id}}" class="btn btnazul" style="margin-top: 2px">Criar Ficha <i class="fa fa-file-text-o " aria-hidden="true"></i></a>
    </div>
  </div>
</div>
@endforeach
</div>
  <br>

  <div>
      <h3>TOTAL:</h3>
    </div>

    </div>
  </div>
  
  
</div>
<br>
<br>
@include('site.partials.modal-aluno')

@include('site.partials.modal-foto')


<br>


@endsection
