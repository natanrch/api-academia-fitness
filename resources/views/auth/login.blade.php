@extends('layouts.main')

@section('content')



<div style="background: url(../img/im.jpg); background-repeat: no-repeat; background-size: contain; background-size: 100% 100%; background-color:  ">
  <div class="container">
  <div class="row "  >
    <div class="col-12">
  <div class="login-form" >
    <form method="POST" action="/login">
        {{csrf_field()}}
        <h2 class="text-center">ENTRAR</h2> 
        @if(count($errors) > 0)
<div class="alert alert-danger">
  {{$errors->get('invalido')[0]}}
</div>
@endif
        <div class="form-group">
          <div class="input-group">

                <span class="input-group-addon"  style="border: 1px solid #ccc; padding: 4px;"><i class="fa fa-user playicon text-center" aria-hidden="true" style="font-size: 25px;"></i></span>
                <input id="password" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}"  required autofocus>
                <label class="form-control-placeholder" for="password">CPF</label>

              @if ($errors->has('cpf'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('cpf') }}</strong>
                  </span>
              @endif
            </div>
        </div>
    <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon" style="border: 1px solid #ccc; padding: 3px;"><i class="fa fa-key playicon text-center" aria-hidden="true" style="font-size: 20px"></i></span>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                <label class="form-control-placeholder" for="password">SENHA</label>
              @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btnlaranja btn-block">ENTRAR</button>
        </div>
        <div class="clearfix">
            
             @if (Route::has('password.request'))
                                    <a class="pull-right " href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a senha?') }}
                                    </a>
                                @endif
        </div>        
    </form>
    <p class="text-center small fontmodalidades" style="font-size: 16px">Não possui um usuário? Procure a academia e matricule-se!</p>
</div>

</div>
</div>
</div>
</div>
@endsection
