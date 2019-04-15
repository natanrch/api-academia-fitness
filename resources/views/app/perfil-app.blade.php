@extends('layouts.main')

@section('content')
<br><br>
<!-- Just an image -->
<nav class="navbar navbar-light colormenu">
    <a class="navbar-brand" href="/"><img src="../img/logo.png" style="max-width:200px; max-height: 50px"></a>
  <a class="navbar-brand" href="#">
    <a href="#" class="btn btnlaranja" style="color: #F1F1F1; border-radius: 20px; ">Sair <i class="fa fa-share-square-o" aria-hidden="true"></i></a>
  </a>
</nav>
<nav class="nav nav-pills nav-fill colormenu fixed-bottom">
  <a class="nav-item nav-link link-nav" href="/perfil-app" ><i class="fa fa-user-o "style="color: #F1F1F1" aria-hidden="true" ></i></a>
  <a class="nav-item nav-link link-nav" href="/ficha-app"><i class="fa fa-file-text-o" style="color: #F1F1F1" aria-hidden="true"></i></a>
</nav>

<div class="container">
    <div class="profile">
        <div class="row ">

            <div class="col-md-8 col-12 ">
                <div class="profile-sidebar">

                    <div class="input-file-container text-center">
                        <center>
        <canvas id="imageCanvas" class="rounded-circle fotoaluno img-fluid text-center"></canvas>
        </center>
    <input class="input-file" id="my-file" type="file">
    <label tabindex="0" for="my-file" class="input-file-trigger btn btnlaranja text-center">Selecione  <i class="fa fa-camera" aria-hidden="true"></i></label>
  </div>
  <p class="file-return text-center"></p>
                    

                    <div class="profile-usertitle">
                        <div class="Nomeperfil">
                            Nome do Aluno
                        </div>
                        <div class="descriperfil">
                            Modalidade:<br>
                            
                        </div>
                         <div class="descriperfil">
                            Data de Pagamento: <br>
                        </div>
                         <div class="descriperfil">
                            Instrutor: <br>
                        </div>
                    </div>

                    <div class="profile-userbuttons">

                        <a href="edit.html" class="btn btnlaranja btn-sm">AVALIAÇÃO FÍSICA <i class="fa fa-line-chart" aria-hidden="true"  style="color: #F1F1F1"></i></a>
                    </div>

                </div>
            </div>
                        
    
        <div class="col-md-4">
            <div>
                <h2>HISTORICO DE TREINO</h2>
                <p class="nomealuno" style="font-size: 20px">Sequência realizada: </p>
           <p class="">
             
              <span class="fontvigor" style="font-size: 25px">  <i class="fa fa-hand-o-right playicon" aria-hidden="true"></i> 
                </span>
          </p>
            </div>
        </div>
    </div>
    </div>
</div>
    <br>
    <br>

    @endsection
