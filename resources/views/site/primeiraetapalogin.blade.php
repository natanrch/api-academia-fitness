@extends('layouts.main')

@section('content')

<div class="container">
  <div class="col-sm-12 ">
  <div class="row line">

      <div class="col-4 stepText1 ">1ª Etapa</div>
      <div class="col-4 stepText2">2ª Etapa</div>
      <div class="col-4 stepText3">3ª Etapa</div>
  </div>
  <div class="row">
      <div class="col-4"><div class="step step1 active"></div></div>
      <div class="col-4"><div class="step step2"></div></div>
      <div class="col-4"><div class="step step3"></div></div>  
  </div> 
</div>
</div>
  <div class="container text-center">
    <br><br>
        <div class="section-header">
          <h2 class="text-center">Escolha como você deseja realizar seu login</h2>
          <br><br>
           <button type="button" id="next" class="btn btn-primary btn-lg first next" style="margin: 10px; width: 215px">Entra como Instrutor</button>
    <button type="button" id="next" class="btn btn-primary btn-lg " style="width: 215px">Entra como aluno</button>
    <br><br>
     <p class="font-weight-normal">Não possui um usuário? Procure a academia e matricule-se!</p>
        </div>
    </div>
   
  

 
<!-- <div id="next">NEXT STEP</div> -->

  


@endsection