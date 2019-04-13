@extends('layouts.main')

@section('content')
<div class="container">
        <div class="row profile">
            <div class="col-md-3 perfil">
                <div class="profile-sidebar">
                    <div class="profile-img">
                        <img src="../img/usuario.png" alt="" class="rounded-circle fotoaluno img-fluid"/>
                        <div class="file btn btn-lg btn-primary">
                           MUDAR <i class="fa fa-camera" aria-hidden="true"></i>
                            <input type="file" name="file" />
                        </div>
                    </div>

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
            <div class="col-md-9">
                <div class="profile-content border" >
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Historico de Treinos</h3>
                            <br>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
    <br>
    @endsection
