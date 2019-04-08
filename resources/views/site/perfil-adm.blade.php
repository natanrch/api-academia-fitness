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
  <div class="row">
    <div class="col-12 col-sm-6" >

    	<h2>INSTRUTOR  <button type="button" class="btn btnlaranja" data-toggle="modal" data-target=".bd-example-modal-lg" >ADICIONAR <i class="fa fa-user-plus" aria-hidden="true"></i></button></h2>
    	

       <form class="form-row" >
      <div class="form-group col-6 col-sm-8">
        <input class="form-control inputb" type="search" placeholder="Pesquisar" aria-label="Search">
      </div>
      <div class="form-group col-2 col-sm-2">
      <button class="btn btnlaranja"  type="submit">PESQUISAR</button>
    </div>
    </form>
    <br>

    <div class="row" >
  <div class="col-6 col-sm-2">
   
    <div class="text-center">
    <img src="../img/usuario.png" alt="..." class="rounded-circle" style="width: 80px; height: 80px">
    </div>
  
 </div>
  <div class="col-6 col-sm-4">
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
      <h2>ALUNO <button type="button" class="btn btnlaranja" data-toggle="modal" data-target=".modalaluno">ADICIONAR  <i class="fa fa-user-plus" aria-hidden="true"></i></button></h2>


     <form class="form-row" >
      <div class="form-group col-6 col-sm-8">
        <input class="form-control inputb" type="search" placeholder="Pesquisar" aria-label="Search">
      </div>
      <div class="form-group col-2 col-sm-2">
      <button class="btn btnlaranja"  type="submit">PESQUISAR</button>
    </div>
    </form>
    <br>

<div class="row" >
  <div class="col-6 col-sm-2">
   
    <div class="text-center">
    <img src="../img/usuario.png" alt="..." class="rounded-circle" style="width: 80px; height: 80px">
    </div>
  
 </div>
  <div class="col-6 col-sm-8">
    <p class="nomealuno " style=" margin-top: 5px;">Nome Aluno</p>

    <div class="form-group" >
      <label for="selecao-arquivo" class="btn btnazul btn-sm" style="margin-top: 13px;" >Reavaliar <i class="fa fa-share" aria-hidden="true"></i></label>
      <input type="file" id='selecao-arquivo'>
      

      <button type="button" class="btn btnazul btn-sm" style="margin-top: 5px; width: 80px">Excluir <i class="fa fa-trash-o" aria-hidden="true"></i></button>

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


<!-- modal de avaliação fisica 


<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-sm">
   
        <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close" style="font-size: 30px;">
          <span aria-hidden="true">&times;</span>
        </button>
        
    <div class="modal-content">
      <div class="container" style="margin-top: 20px; margin-bottom: 10px">
        <div class=" row">             
            <div class="col-12">
             <div class="custom-file">
               <input type="file" class="custom-file-input">
               <label class="custom-file-label" for="customFile">Arquivo</label>
               </div>
              
                 <div class="modal-footer">
                  <button type="submit" class="btn btnlaranja">ENVIAR <i class="fa fa-upload" aria-hidden="true"></i></button>
                  </div>
           </div>
      </div>
      </div>
    </div>
  </div>
</div>
-->

@endsection
