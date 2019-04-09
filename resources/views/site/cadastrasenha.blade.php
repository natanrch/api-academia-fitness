@extends('layouts.main')

@section('content')

<h1 class="text-center mb-3">Cadastre sua nova senha para continuar</h1>

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
</form>

@endsection