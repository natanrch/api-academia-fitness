@extends('layouts.main')

@section('content')

<form method="POST">
	{{csrf_field()}}
	<label for="dias">Dias de Treino</label>
	<input class="form-control" type="number" name="dias" id="dias">
	<label for="objetivo">Objetivo</label>
	<input class="form-control" type="text" name="objetivo" id="objetivo">
	<label for="metodo">Método</label>
	<input class="form-control" type="text" name="metodo" id="metodo">
	<label for="aquecimento">Aquecimento (minutos)</label>
	<input class="form-control" type="number" name="aquecimento" id="aquecimento">
	<label for="aerobico">Treino aeróbico (minutos)</label>
	<input class="form-control" type="number" name="aerobico" id="aerobico">
	<label for="observacoes">Observações</label>
	<input class="form-control" type="text" name="observacoes" id="observacoes">
	<button type="submit" class="btn btn-info">Adicionar Treinos</button>
</form>

@endsection