@extends('layouts.main')

@section('content')

<!-- <h1 class="text-center mb-3">Cadastre sua nova senha para continuar</h1>

<form method="POST">
	{{csrf_field()}}
    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>
	<button class="btn btn-success" type="submit">Cadastrar</button>
</form> -->

<br><br>
<div class="container">
  <div class="row "  >
    <div class="col-12">
        <div class="login-form"  >
            <form method="POST" action="" style="border-radius: 50px;">
                {{csrf_field()}}
                <h2 class="text-center">Crie sua nova senha</h2> 
                <div class="form-group">
                     <label for="password" class="required">{{ __('Senha') }}</label>
                  <div class="input-group">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Insira sua nova senha" required autofocus style="border-radius: 50px;">

                      
                           @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    </div>
                    <span ><p class="text-right " style="color: #000; font-family: IBM Plex Sans, Regular; font-size: 14px;">mínimo 6 caracteres</p></span>
                </div>
                <div class="form-group" style="margin-top: -15px">
                    <label for="password-confirm" class="required">{{ __('Confirmar Senha') }}</label>
                    <div class="input-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repita sua nova senha" required style="border-radius: 50px;">
                    </div>
                </div>        
                <div class="form-group">
                    <button type="submit" class="btn btnlaranja btn-block" style="border-radius: 50px;">CRIAR</button>
                </div>  
            </form>
        </div>

</div>
</div>
</div>
<br><br><br>
@endsection