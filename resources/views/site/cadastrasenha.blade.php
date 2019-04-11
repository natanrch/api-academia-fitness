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


<div class="container">
  <div class="row "  >
    <div class="col-12">
  <div class="login-form" >
    <form method="POST" action="/login">
        {{csrf_field()}}
        <h2 class="text-center">Cadastre sua nova senha</h2> 
        <div class="form-group">
             <label for="password">{{ __('Senha') }}</label>
          <div class="input-group">
           
                <span class="input-group-addon"  style="border: 1px solid #ccc; padding: 3px;"><i class="fa fa-key playicon" aria-hidden="true"></i></span>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="nova senha" required autofocus>

              
                   @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            </div>
        </div>
    <div class="form-group">
        <label for="password-confirm">{{ __('Confirmar Senha') }}</label>
            <div class="input-group">
              
                <span class="input-group-addon" style="border: 1px solid #ccc; padding: 3px;"><i class="fa fa-key playicon" aria-hidden="true"></i></span>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="nova senha" required>
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btnlaranja btn-block">CONFIRMAR</button>
        </div>  
    </form>
</div>

</div>
</div>
</div>

@endsection