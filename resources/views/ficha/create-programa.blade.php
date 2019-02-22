@extends('layouts.main')

@section('content')

<h1>Criar ficha</h1>
<h2></h2>

<form method="POST">
	@foreach($tipos as $tipo)
		<div class="row mb-3">
			
			<div class="col-md-12 text-secondary"><h3>{{ucfirst($tipo->titulo)}}</h3></div>
			<div class="col-md-3">
				<label>Exercicio</label>
				<select name="exercicio[]" class="form-control">
					@foreach($tipo->exercicios as $exercicio)
						<option value="{{$exercicio->id}}">{{$exercicio->titulo}}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-3">
				<label>Repetições</label>
				<input class="form-control" type="number" name="repeticoes[]" >
			</div>
			<div class="col-md-3">
				<label>Séries</label>
				<input type="number" name="series[]" class="form-control">
			</div>
			<div class="col-md-3 mt-3">
				<input type="button" class="btn btn-info" value="Adicionar outro exercício de {{$tipo->titulo}}">
			</div>
		</div>
	@endforeach
	<button type="submit" class="btn btn-success col-md-3">Cadastra</button>
</form>

@endsection