@php
	use App\Helpers\RemoveAcentosHelper;
@endphp

@extends('layouts.main')

@section('content')

<!--texto criar ficha-->
<div class="container">
        <div class="section-header">
          <h2 class="text-center">CRIAR FICHA</h2>
          <P class="text-center">Preencha os dados para criar ficha.</P>
        </div>

<div class="container">
<form method="POST">
	{{csrf_field()}}
	@foreach($tipos as $tipo)
			<div class="col-md-12 text-secondary"><h3>{{ucfirst($tipo->titulo)}}</h3></div>
		<div class="row mb-3 exercicio-{{RemoveAcentosHelper::removeAcentos($tipo->titulo)}}">
			
			<div class="col-md-4">
				<label >Exercicio</label>
				<select name="exercicio[]" class="form-control">
					<option value="0">Selecione o exercício</option>
					@foreach($tipo->exercicios as $exercicio)
						<option value="{{$exercicio->id}}">{{$exercicio->titulo}}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-4">
				<label>Repetições</label>
				<input class="form-control" type="number" name="repeticoes[]" >
			</div>
			<div class="col-md-4">
				<label>Séries</label>
				<input type="number" name="series[]" class="form-control">
			</div>
		</div>
		<div id="novo-exercicio-{{RemoveAcentosHelper::removeAcentos($tipo->titulo)}}">
			
		</div>
		<div class="row mb-3">
			<div class="col-md-4 mt-">
				<input type="button" class="btn btn-info" id="novo-{{RemoveAcentosHelper::removeAcentos($tipo->titulo)}}" value="Adicionar mais de {{$tipo->titulo}}">
			</div>
		</div>
	@endforeach
	<button type="submit" class="btn btn-success">Criar</button>
</form>
</div>
@endsection

@push('scripts')
<script type="text/javascript">

	@foreach($tipos as $tipo)
	    $('#novo-{{RemoveAcentosHelper::removeAcentos($tipo->titulo)}}').click(function () {
	        let clone = $('.exercicio-{{RemoveAcentosHelper::removeAcentos($tipo->titulo)}}').last().clone();
	        $('#novo-exercicio-{{RemoveAcentosHelper::removeAcentos($tipo->titulo)}}').append(clone);
	        return false;
	    });
    @endforeach

</script>
@endpush