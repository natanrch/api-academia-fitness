@php
	use App\Helpers\RemoveAcentosHelper;
@endphp

@extends('layouts.main')

@section('content')

<br>
<!--texto criar ficha-->
<div class="container">
        <div class="section-header">
          <h2 class="text-center">CRIAR FICHA</h2>
          <P class="text-center">Preencha os dados para criar ficha.</P>
        </div>
        <br>
<div class="container">
<form method="POST">
	{{csrf_field()}}
	@foreach($tipos as $tipo)
			<div class="col-md-12 "><h3>{{ucfirst($tipo->titulo)}}</h3></div>
		<div class="row mb-3 exercicio-{{RemoveAcentosHelper::removeAcentos($tipo->titulo)}}">
			
			<div class="col-md-4">
				<label class="fontth" >Exercicio</label>
				<select name="exercicio[]" class="form-control" style="border: 1px solid #1827f580">
					<option value="0">Selecione o exercício</option>
					@foreach($tipo->exercicios as $exercicio)
						<option value="{{$exercicio->id}}">{{$exercicio->titulo}}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-4">
				<label class="fontth">Repetições</label>
				<input class="form-control" type="number" name="repeticoes[]" style="border: 1px solid #1827f580" >
			</div>
			<div class="col-md-4">
				<label class="fontth">Séries</label>
				<input type="number" name="series[]" class="form-control" style="border: 1px solid #1827f580">
			</div>
		</div>

		<div id="novo-exercicio-{{RemoveAcentosHelper::removeAcentos($tipo->titulo)}}">
			
		</div>
		<div class="row mb-2">
			<div class="col-md- mt-">
				<span><i class="fa fa-plus glyph " aria-hidden="true"></i></span>
				<input type="button" class="btn btnlaranja button" id="novo-{{RemoveAcentosHelper::removeAcentos($tipo->titulo)}}" value="Adicionar ">

				
			</div>

		</div>
	@endforeach
	<div class="row mb-2">
		<div class="col-md-3 mt-4">
			<button type="submit" class="btn btnlaranja btn-lg">Criar Ficha <i class="fa fa-check" aria-hidden="true"></i></button>
	</div>
</div>
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