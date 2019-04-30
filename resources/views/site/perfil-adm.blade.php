@extends('layouts.main')

@section('content')
<br><br>


<div class="container " >
  @if(session('message'))
    @component('components.alert')
      @slot('type'){{ session('message')['type'] }}@endslot
      {{ session('message')['content'] }}
    @endcomponent
  @endif
  @if(count($errors) > 0)
    @component('components.alert')
      @slot('type'){{ 'danger' }}@endslot
      {{ 'Informações incompletas ou inválidas' }}
    @endcomponent
  @endif
  <div class="row">
    <div class="col-12 col-sm-6" >

    	<h2>INSTRUTOR  <button type="button" class="btn btnlaranja" data-toggle="modal" data-target=".bd-example-modal-lg" >ADICIONAR <i class="fa fa-user-plus" aria-hidden="true"></i></button></h2>
    	

       <form class="form-row" > <div class="form-group col-8 col-sm-8"> <input
class="form-control inputb" type="search" placeholder="Pesquisar"
aria-label="Search"> </div> <div class="form-group col-2 col-sm-2"> <button
class="btn btnlaranja"  type="submit" style="border-radius: 50%"> <i class="fa
fa-search" aria-hidden="true"></i></button> </div> </form> <br>

    <div class="row" >
  <div class="col-6 col-sm-2 fotosins">
   
    <div class="text-center">
    <img src="../img/usuario.png" alt="..." class="rounded-circle" style="width: 80px; height: 80px">
    </div>
  
 </div>
  <div class="col-6 col-sm-4 botoesins">
    <p class="nomealuno " style=" margin-top: 5px;">Instrutor</p>
    <div class="form-group">
      <button type="button" class="btn btnazul btn-sm">Excluir <i class="fa fa-trash-o" aria-hidden="true"></i></button>
    </div>
  </div>
    </div>
<br><br>
    <div>
    	<h3>TOTAL:</h3>
    </div>
</div>


    <div class="col-12 col-sm-6">
      <h2>ALUNO <button type="button" class="btn btnlaranja botoes1" data-toggle="modal" data-target=".modalaluno">ADICIONAR  <i class="fa fa-user-plus" aria-hidden="true"></i></button></h2>


     <form class="form-row" >
      <div class="form-group col-8 col-sm-8">
        <input class="form-control inputb" type="search" placeholder="Pesquisar" aria-label="Search">
      </div>
      <div class="form-group col-2 col-sm-2">
      <button class="btn btnlaranja"  type="submit" style="border-radius: 50%"> <i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
    </form>
    <br>

<div class="row" >
  <div class="col-6 col-sm-2 fotos">
   
    <div class="text-center">
    <img src="../img/usuario.png" alt="..." class="rounded-circle" style="width: 80px; height: 80px">
    </div>
  
 </div>
  <div class="col-6 col-sm-8 botoes1">
    <p class="nomealuno ">Nome Aluno</p>
    <div class="form-group" >
      <button type="button" class="btn btnazul btn-sm" data-toggle="modal" data-target=".avaliar" style="margin-top: 5px;">Reavaliar <i class="fa fa-share" aria-hidden="true" ></i></button>
      

      <button type="button" class="btn btnazul btn-sm" style="margin-top: 5px;">Excluir <i class="fa fa-trash-o" aria-hidden="true"></i></button>

      <button type="button" class="btn btnazul btn-sm" style="margin-top: 5px;">Bloquear <i class="fa fa-user-times" aria-hidden="true"></i></button>
    </div>
  </div>
  


</div>
<br><br>
    <div>
    	<h3>TOTAL:</h3>
    </div>

    </div>

  </div>
  
  
</div>


<br>


<br>

<!-- modal de cadastrar Instrutor -->

@include('site.partials.modal-instrutor')

<!-- modal de cadastrar aluno -->

@include('site.partials.modal-aluno')


<!-- modal de avaliação fisica -->

@include('site.partials.modal-avaliacao')





@endsection
