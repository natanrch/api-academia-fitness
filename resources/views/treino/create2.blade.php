@extends('layouts.main')

@section('content')

<br>
<!--texto criar ficha-->
<div class="container">
        <div class="section-header">
          <h2 class="text-center">CRIAR TREINOS</h2>
          <P class="text-center">Preencha os dados para criar os treinos.</P>
        </div>
        <br>
<div class="container">
<form method="POST">
	{{csrf_field()}}
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
	<div class="row mb-2">
		<div class="col-md-3 mt-4">
			<button type="submit" class="btn btnlaranja btn-lg">Criar Ficha <i class="fa fa-check" aria-hidden="true"></i></button>
	</div>
</div>
</form>
</div>
@endsection
