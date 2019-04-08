@extends('layouts.main')

@section('content')

<br><br>
<!--texto CRIAR FICHA-->
<section>
<div class="container">
	        <div class="section-header">
	          <h2 class="text-center">CRIAR TREINOS</h2>
	          <hr style="max-width: 170px; height: 3px; background-color: #B95922;">
	          <P class="ficha text-center">Preencha os dados para criar os treinos.</P>
	        </div>

<br>

<div class="container">
<form method="POST">
	{{csrf_field()}}
  <div class="form-row">
    <div class="form-group col-md-6 ">
      <label for="objetivo">Objetivo</label>
      <input class="form-control " type="text" name="objetivo" id="objetivo">
    </div>
    <div class="form-group col-md-6">
      <label for="metodo">Método</label>
		<input class="form-control" type="text" name="metodo" id="metodo">
    </div>
    <div class="form-group col-md-3">
      <label for="aquecimento">Treino aeróbico </label>
		<select name="aerobico" class="form-control">
						<option selected>escolha</option>
						<option value="Esteira">Esteira</option>
						<option value="Elíptico">Elíptico</option>
						<option value="Bicicleta Ergométrica">Bicicleta Ergométrica</option>
		</select>
    </div>
    <div class="form-group col-md-3">
      <label for="aerobico">Treino aeróbico (minutos)</label>
		<input class="form-control" type="number" name="tempo_aerobico" id="aerobico">
    </div>
    <div class="form-group col-md-3">
      <label for="aquecimento">Aquecimento (minutos)</label>
		<input class="form-control" type="number" name="aquecimento" id="aquecimento">
    </div>
    <div class="form-group col-md-3">
      <label for="intervalo">Intervalo (segundos)</label>
		 <input type="number" class="form-control" name="intervalo" id="intervalo">
    </div>
    <div class="form-group col-md-6">
      <label for="revisao">Data de Revisão</label>
		 <input type="date" class="form-control" name="revisao" id="revisao">
    </div>
    <div class="form-group col-md-6">
      <label for="observacoes">Observações</label>
			<input class="form-control" type="text" name="observacoes" id="observacoes">
    </div>
    <div class="form-group col-md-12 text-center">
		<label for="dias" style="font-size: 18px">Dias de Treino</label>	
    </div>
    
    <div class="form-group col-md-6">
    
     	<table class="table table-sm text-center table-bordered " >
  <thead>
    <tr>
      <th scope="col">S</th>
      <th scope="col">T</th>
      <th scope="col">Q</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected value="">x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
      
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
     
      
    </tr>
    <tr>
      <td scope="row">
		<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
   
     
    </tr>
    <tr>
      
     
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
     
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
    </tr>
    </tbody>
	</table>
    </div>
    <div class="form-group col-md-6">
    	
     	<table class="table table-sm text-center table-bordered " >
  <thead>
    <tr>
      <th scope="col">Q</th>
      <th scope="col">S</th>
      <th scope="col">S</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>	
	</td>
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
      
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
     
      
    </tr>
    <tr>
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
   
     
    </tr>
    <tr>
      
     
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
     
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
      <td scope="row">
      	<select name="treino_do_dia[]" class="form-control">
						<option selected>x</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						
		</select>
	</td>
    </tr>
    </tbody>
	</table>
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
    <div class="form-group col-md-3 ">
      <select name="" class="form-control">
						<option selected>Categorias</option>
						<option value="abdomem">abdomem</option>
						
						
		</select>
    </div>
    <div class="form-group col-md-3">
      <select name="" class="form-control">
						<option selected>Exercícios</option>
						<option value="A">Supra na Prancha</option>
						
		</select>
    </div>
    <div class="form-group col-md-2 text-left">
      <button class="btn btnlaranja"  type="submit" style="border-radius: 50%"> <i class="fa fa-search" aria-hidden="true"></i></button>
  </div>
  <div class="form-group col-md-4 text-right fixte">
      <button type="submit" class="btn btnlaranja">CRIAR FICHA <i class="fa fa-check-circle" aria-hidden="true"></i></button>
  </div>
  </div>
  </div>
</div>
<br>
	
	<div class="container ficha ">
	@foreach($tipos as $tipo)
		<h2>{{ucfirst($tipo->titulo)}}</h2>
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