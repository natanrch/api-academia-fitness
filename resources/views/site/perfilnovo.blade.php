@extends('layouts.main')

@section('content')
<br>
<div class="container">
<div class="row ">
    <div class="col-sm-6">
<div class="card mb-3" style="max-width: 540px; background: #8fb1b31a; border: none;">
  <div class="row">
    <div class="col-md-4 text-center"><br>
      <img src="../img/usuario.png" alt="foto de aluno" class="rounded-circle fotoaluno img-fluid"/>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title Nomeperfil">Nome do Aluno</h5>
        <div class="descriperfil">
                            Modalidade: Musculação
                            
                        </div>
                         <div class="descriperfil">
                            Data de Pagamento: 20/04/2019
                        </div>
                         <div class="descriperfil">
                            Data da Avaliação Física: 20/04/2019
                        </div>
                         <div class="descriperfil">
                            Instrutor: Jorce Costa
                        </div>
                        <br>
                        <div class="">
                          <a href="edit.html" class="btn btnlaranja btn-sm">AVALIAÇÃO FÍSICA <i class="fa fa-line-chart" aria-hidden="true"  style="color: #F1F1F1"></i></a>
                        </div>
      </div>
    </div>
</div>
</div>
  
    </div>
        <div class="col-sm-6">
            <h2>Historico de Treinos</h2>
           <div class="">
              <p class="nomealuno" style="font-size: 20px">Sequência Realizada </p>
           <p class="">
      
              <span class="fontvigor" style="font-size: 25px"> A  <i class="fa fa-hand-o-right playicon" aria-hidden="true"></i> B <i class="fa fa-hand-o-right playicon" aria-hidden="true"></i> C
             
             </span>
          </p>
        </div>
        </div>
    </div>
</div>
</div>

<br><br><br><br><br><br><br>
    @endsection
