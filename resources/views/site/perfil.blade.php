@extends('layouts.main')

@section('content')

<br>
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 text-center">
            <p><img src="../img/usuario.png" alt="..." class="img-thumbnail rounded-circle fotoaluno text-center" ></p>
           <button type="button" class="btn btnazul btn-sm" data-toggle="modal" data-target=".foto" style="margin-top: 5px;">ADICIONAR <i class="fa fa-camera" aria-hidden="true"></i></button>
      <hr class="d-sm-none">
            <br>  
            <div >
            <p class="Nomeperfil">Nome Aluno</p>
      <span class="descriperfil"> Modalidade:  <br> Musculação </span>
      <p class="descriperfil">   Data de Pagamento: <br> data  </p>
      <button type="file" class="btn  btnlaranja" >MINHA AVALIAÇÃO <i class="fa fa-download"  aria-hidden="true"></i></button></div>
          </div>
        </div>
      </div>
      <br>
@include('site.partials.modal-foto')







@endsection