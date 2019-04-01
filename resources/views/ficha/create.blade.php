@extends('layouts.main')

@section('content')

<form method="POST">
	{{csrf_field()}}
	<div class="row">
		<div class="col-md-6">	
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
		</div>
		
	</div>

	<div class="container">
	        <div class="section-header">
	          <h2 class="text-center">CRIAR TREINOS</h2>
	          <P class="text-center">Preencha os dados para criar os treinos.</P>
	        </div>
	        <br>
	<div class="container">

	@foreach($tipos as $tipo)
		<h2>{{ucfirst($tipo->titulo)}}</h2>
		@foreach($tipo->exercicios as $exercicio)
			<div class="row mb-3 border-top">
				<div class="col-md-1">
					<label>Treino</label>
					<select name="treino[]" class="form-control">
						<option></option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
					</select>
				</div>
				<div class="col-md-3">
					<label>Exercicio</label>
					<input type="text" name="exercicio[]" value="{{$exercicio->titulo}}" class="form-control" readonly>
				</div>
				<div class="col-md-2">
					<label>Séries</label>
					<input type="number" name="series[]" class="form-control">
				</div>
				<div class="col-md-2">
					<label>Repetições</label>
					<input type="number" name="repeticoes[]" class="form-control">
				</div>
				<div class="col-md-2">
					<label>Peso</label>
					<input type="number" name="peso[]" class="form-control">
				</div>
			</div>
		@endforeach
	@endforeach

	<button type="submit" class="btn btn-info">Adicionar</button>
</form>

@endsection