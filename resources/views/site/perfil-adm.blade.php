@extends('layouts.main')

@section('content')

 <nav id="navbar-example2" class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#mdo"><img src="../img/usuario.png" alt="..." class="rounded-circle" style="width: 30px; height: 30px"></a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MENU</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#one">MEUS DADOS</a>
        <a class="dropdown-item" href="#two">MINHS FICHA</a>
    </li>
  </ul>
</nav>

<div class="container " >
  <div class="row">
    <div class="col-12 col-sm-6" >

    	<h2>INSTRUTOR  <button type="button" class="btn btnlaranja" data-toggle="modal" data-target=".bd-example-modal-lg">ADICINIONAR <i class="fa fa-user-plus" aria-hidden="true"></i></button></h2>
    	

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
      <h2>ALUNO <button type="button" class="btn btnlaranja" data-toggle="modal" data-target=".modalaluno">ADICINIONAR <i class="fa fa-user-plus" aria-hidden="true"></i></button></h2>


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
      <button type="button" class="btn btnazul btn-sm" data-toggle="modal" data-target=".bd-example-modal-sm" style="margin-top: 5px;">Reavaliar <i class="fa fa-share" aria-hidden="true"></i></button>
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


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="container">
          <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close" style="font-size: 30px;">
          <span aria-hidden="true">&times;</span>
        </button>
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card" style="border:none;">
                
                 <div class="card-header">
                    <h2 class="text-center">{{ __('Cadastrar Instrutor') }}</h2>
                </div>


                <div class="card-body fonttd">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NOME') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('CREF') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btnlaranja">
                                    {{ __('CADASTRAR') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
  </div>
</div>


<div class="modal fade modalaluno" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
<div class="container" >
  <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close" style="font-size: 30px;">
          <span aria-hidden="true">&times;</span>
        </button>
    <div class="row justify-content-center">
        <div class="col-md-10" >
            <div class="card" style="border:none;">
                <div class="card-header">
                    <h2 class="text-center">{{ __('Cadastrar Aluno') }}</h2>
                </div>

                <div class="card-body fonttd">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NOME') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-MAIL') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('MODALIDADE') }}</label>

                            <div class="col-md-6">
                               <select class="form-control" style="border: 1px solid #1827f580">
                                   <option selected>Selecione</option>
                                    <option value="">Musculação</option>
                               </select>
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('INSTRUTOR') }}</label>

                             <div class="col-md-6">
                               <select class="form-control" style="border: 1px solid #1827f580">
                                   <option selected>Selecione</option>
                                    <option value="">Jorge Costa</option>
                               </select>
                            </div>
                        </div>
                      
                      <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('AVALIAÇÃO FÍSICA') }}</label>

                             <div class="col-md-6">
                               <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Arquivo</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btnlaranja">
                                    {{ __('CADASTRAR') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
   </div>
    </div>
</div>



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


@endsection
