@extends('layouts.main')

@section('content')
<div class="container">
    <div class="profile">
        <div class="row   ">

            <div class="col-md-12 col-12 perfil ">
                <div class="profile-sidebar justify-content-center">

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
                        
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
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
    <br>
    <br>
    @endsection
