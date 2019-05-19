@extends('layouts.main')

@section('content')

<br><br>
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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="required" style="font-size: 18px">{{ __('E-MAIL') }}</label>

                            <div class="input-group">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                        
                                <button type="submit" class="btn btnlaranja btn-block">
                                    {{ __('Enviar link de redefinir senha') }}
                                </button>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
