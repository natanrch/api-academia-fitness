@extends('layouts.main')

@section('content')
<br><br><br>
<div class="container">
                    <div class="section-header " style="margin-bottom: -20px">
          <h2 class="text-center">REDEFINIR SENHA</h2>
          <hr style="max-width: 122px; height: 3px; background-color: #B95922;">
        </div>
        
      </div>
            <div class="container">
  <div class="row justify-content-center "  >
    <div class="col-12 col-sm-6">
        <div class="login-form"  >
            

                <div class="card-body" >

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <label for="email" class="required" >{{ __('E-MAIL') }}</label>

                            <div class="input-group">
                                 <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus placeholder="email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="password" class="required" >{{ __('SENHA') }}</label>

                            <div class="input-group">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <span ><p class="text-right " style="color: #000; font-family: IBM Plex Sans, Regular; font-size: 14px;">mínimo 6 caracteres</p></span>
                        </div>
                         <div class="form-group" style="margin-top: -15px">
                            <label for="password-confirm" class="required" >{{ __('CONFIRMA SENHA') }}</label>

                            <div class="input-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                        
                                <button type="submit" class="btn btnlaranja btn-block">
                                    {{ __('Redefinir senha') }}
                                </button>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
