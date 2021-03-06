@php
use App\Helpers\RemoveAcentosHelper;
@endphp
@extends('layouts.main')

@section('content')

<br><br>
<!--texto CRIAR FICHA-->
<section>

<div class="container">
	@if(session('message'))
    @component('components.alert')
      @slot('type'){{ session('message')['type'] }}@endslot
      {{ session('message')['content'] }}
    @endcomponent
@endif
@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif
	        <div class="section-header">
	          <h2 class="text-center">REVISAR FICHA</h2>
	          <hr style="max-width: 170px; height: 3px; background-color: #B95922;">
	          <P class="ficha text-center">Preencha os dados para criar uma nova ficha.</P>
	        </div>

<br>

<div class="container">
<form method="POST">
	{{csrf_field()}}
	{{method_field('PUT')}}
  <div class="form-row">
    <div class="form-group col-md-6 ">
      <label for="objetivo" class="required">Objetivo</label>
      <input class="form-control " type="text" name="objetivo" id="objetivo" value="{{$ficha->objetivo}}" >
    </div>
    <div class="form-group col-md-6">
      <label for="metodo" class="required">Método</label>
		<input class="form-control" type="text" name="metodo" id="metodo" value="{{$ficha->metodo}}">
    </div>
    <div class="form-group col-md-3">
      <label for="aquecimento">Treino aeróbico </label>
		<select name="aerobico" class="form-control">
			<option>escolha</option>
			<option {{$ficha->treino_aerobico == "Esteira" ? 'selected' : ''}} value="Esteira">Esteira</option>
			<option {{$ficha->treino_aerobico == "Elíptico" ? 'selected' : ''}} value="Elíptico">Elíptico</option>
			<option {{$ficha->treino_aerobico == "Bicicleta Ergométrica" ? 'selected' : ''}} value="Bicicleta Ergométrica">Bicicleta Ergométrica</option>
		</select>
    </div>
    <div class="form-group col-md-3">
      <label for="aerobico">Treino aeróbico (minutos)</label>
		<input class="form-control" type="number" name="tempo_aerobico" id="aerobico" value="{{$ficha->tempo_aerobico}}">
    </div>
    <div class="form-group col-md-3">
      <label for="aquecimento" class="required">Aquecimento (minutos)</label>
		<input class="form-control" type="number" name="aquecimento" id="aquecimento" value="{{$ficha->aquecimento}}" >
    </div>
    <div class="form-group col-md-3">
      <label for="intervalo"  class="required">Intervalo (segundos)</label>
		 <input type="number" class="form-control" name="intervalo" id="intervalo" value="{{$ficha->intervalo}}">
    </div>
    <div class="form-group col-md-6">
      <label for="revisao" class="required">Data de Revisão</label>
		 <input type="date" class="form-control" name="revisao" id="revisao">
    </div>
    <div class="form-group col-md-6">
      <label for="observacoes">Observações</label>
			<input class="form-control" type="text" name="observacoes" id="observacoes" value="{{$ficha->observacoes}}">
    </div>
</div>
</div>

    
    


  <!--texto eXERCICIOS-->
<div class="container text-center">
	        <div class="section-header">
	          <h2 class="text-center">EXERCÍCIOS</h2>
	          <hr style="max-width: 170px; height: 3px; background-color: #B95922;">
	        </div>
	        <br>
</div>
<div class="">
	
    <form>
  <div class="form-row">
  	<div class="form-group col-md-12 ">
  		<p class="nomealuno" style="font-size: 20px">FILTRAR <i class="fa fa-filter playicon" aria-hidden="true" style="font-size: 20px"></i></p>
  	</div>
    <div class="form-group col-md-12 text-center ">
    
    		@foreach($tipos as $tipo)

    			<a href="#{{RemoveAcentosHelper::removeAcentos($tipo->titulo)}}" class="btn btnlaranja" style="margin:2px; text-transform: capitalize;">{{$tipo->titulo}}</a>
    		@endforeach
    	
    </div>
    <!-- 
    <div class="form-group col-md-2 text-left">
      <button class="btn btnlaranja"  type="submit" style="border-radius: 50%"> <i class="fa fa-search" aria-hidden="true"></i></button>
  </div> 
	-->
  </div>
  </div>
</div>
<br>
	
	<div class="container ficha ">
	@foreach($tipos as $tipo)
		<h2 id="{{RemoveAcentosHelper::removeAcentos($tipo->titulo)}}">{{ucfirst($tipo->titulo)}}</h2>
		@foreach($tipo->exercicios as $exercicio)
			<div class="row mb-3 " style="border-top:1px solid  #B95922 ">
				<div class="col-md-1">
					<label>Treino</label>
					<select name="treino[]" class="form-control">
						<option selected value="">x</option>
						<option value="1">A</option>
						<option value="2">B</option>
						<option value="3">C</option>
						<option value="4">D</option>
						<option value="5">E</option>
						<option value="6">F</option>
					</select>
				</div>
				<div class="col-md-5">
					<label>Exercicio</label>
					<input type="text" value="{{$exercicio->titulo}}" class="form-control" readonly>
					<input type="hidden" name="exercicio[]" value="{{$exercicio->id}}">
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
	<button type="submit" class="btn btnlaranja">CRIAR FICHA <i class="fa fa-check-circle" aria-hidden="true"></i></button>

</form>
</section>
<br>
<br>
@endsection