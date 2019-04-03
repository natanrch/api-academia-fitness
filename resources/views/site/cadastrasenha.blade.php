@extends('layouts.main')

@section('content')

<form method="POST">
	<label for="senha">Cadastre uma nova senha</label>
	<input type="password" name="senha">
	<button>Cadastrar</button>
</form>

@endsection