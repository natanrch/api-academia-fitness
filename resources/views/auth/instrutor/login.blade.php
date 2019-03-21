@extends('layouts.main')

@section('content')

<br><br>
<div class="container d-flex justify-content-center">
  <div class="col-sm-5 ">
  <div class="row line">

      <div class="col-4 stepText1 ">1ª Etapa</div>
      <div class="col-4 stepText2">2ª Etapa</div>
      <div class="col-4 stepText3">3ª Etapa</div>
  </div>
  <div class="row">
      <div class="col-4"><div class="step step1 active"></div></div>
      <div class="col-4"><div class="step step2"></div></div>
      <div class="col-4"><div class="step step3"></div></div>  
  </div> 
</div>
</div>
<br><br>

<div class="container text-center">
    <br><br>
        <div class="section-header">
          <h2 class="text-center ">Insira seus dados de login abaixo</h2>
      </div>
</div>

<div class="container d-flex justify-content-center ">
        
  <form method="POST">

      @csrf
  
          
        
      <div class="form-group row d-flex justify-content-center  ">
                
          <div class="col-12 col-sm-9">
              <label for="cpf"  >{{ __('CPF:') }}</label>
              <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required autofocus>

              @if ($errors->has('cpf'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
      </div>
     
      
      <div class="form-group row  d-flex justify-content-center">   

          <div class="col-12 col-sm-9">
              <label for="password" ">{{ __('Senha:') }}</label>
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

              @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
      </div>


                         <!--<div class="form-group row">
                            <div class="col-md- offset-md-">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        
                        
                            </div>-->

                        
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btnlogin">
                                    {{ __('Proxíma Etapa') }}<i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        
                    </form>
    </div>
</div>


@endsection
