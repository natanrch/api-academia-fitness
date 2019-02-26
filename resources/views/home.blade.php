@extends('layouts.main')

@section('content')

<!-- O menu esta dentro da pasta layout, nome do aquivo main-->


<!--Decricacao da academia-->

 <div class="jumbotron jumbotron-fluid text-center ">
  <div class="container">
    <img src="..." class="img-fluid mw-100" alt="Responsive image">
    <h1 class=" textacademia">ACADEMIA FITNESS</h1>
    <hr style="width: 222px; height: 3px; background-color: #131852">
    <center>
    <div style="max-width: 500px">
      <p class="lead" style="font-family: IBM Plex Sans, Regular; font-size: 20px">A Academia Fitness está a mais de 20 anos atuando no Estado do Amapá, sendo referência no seu ramo, oferecendo um serviço de alta qualidade.</p>
    </div>
    </center>
  </div>
</div>
     


<!--texto modalidades-->
<div class="container">
        <div class="section-header">
          <p class="text-center planosh2 ">MODALIDADES</p>
    </div>
</div>

<!--tipos de modalidades-->

<div class="container ">
  <div class="row" >
    <div class="col-sm-4 card  " style="border:none;"  >
      <img class="card-img-top imgmodalidades" src="img/musculacao.png" alt="Imagem de capa do card">
      <p class="text-center fontmodalidades font-weight-normal">Musculação</p> 
    </div>
    <div class="col-sm-4 card"  style="border:none;">
      <img class="card-img-top  imgmodalidades" src="img/musculacao.png" alt="Imagem de capa do card">
      <p class="text-center fontmodalidades font-weight-normal">Ritmos</p> 
    </div>
    <div class="col-sm-4 card" style="border:none;" >
      <img class="card-img-top imgmodalidades" src="img/musculacao.png" alt="Imagem de capa do card">
      <p class="text-center fontmodalidades font-weight-normal">Treinamento Funcional</p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4 card"  style="border:none;">
      <img class="card-img-top imgmodalidades" src="img/musculacao.png" alt="Imagem de capa do card">
      <p class="text-center fontmodalidades font-weight-normal">Karatê</p> 
    </div>
    <div class="col-sm-4 card"  style="border:none;">
      <img class="card-img-top imgmodalidades" src="img/musculacao.png" alt="Imagem de capa do card">
      <p class="text-center fontmodalidades font-weight-normal">Ginástica</p> 
    </div>
    <div class="col-sm-4 card"  style="border:none;">
      <img class="card-img-top imgmodalidades" src="img/musculacao.png" alt="Imagem de capa do card">
      <p class="text-center fontmodalidades font-weight-normal">Muay-thai</p> 
    </div>
  </div>
</div>

<!-- chamada para planos -->
<br>
<div class="container">
<div class="row">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-12 col-sm-6">
        <p class="h2 text-left planosh2">PLANOS PERFEITOS PARA VOCÊ</p>
          <br>
        <div style="max-width: 300px; margin-left: 30px">
        <P class="descplanos text-left">Na Academia Fitness você encontra planos acessíveis ao seu bolso, e que te oferecem diversas modalidades.
            <br><br>
         Você pode pagar no dinheiro ou no cartão de crédito. Além disso oferecemos descontos para alunos que pagam antes do vencimento.</P>
      </div>
      
      </div>
      <div class="col-12 col-sm-6 text-center" >
        <img src="img/musculacao.png" class="img-fluid " alt="Imagem responsiva" style="max-height: 400px">
      </div>
    </div>
  </div>
</div>
</div>

<br>



<!--tipos de planos-->
<div class="container"> 
<div class="card-deck">
  <div class="card" style="border:none; background-color: #242B8C; max-width: 300px; height: 200px">
    <div class="card-body text-center">
      <h5 class="card-title" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 20px">MUSCULAÇÃO</h5>
      <p class="card-text" style="color: #F1F1F1; font-family: IBM Plex Sans, Regular; font-size: 16px;" >Primeira mensalidade:</p>
    </div>
  </div>
  <div class="card" style="border:none; background-color: #B95922">
    <div class="card-body text-center">
      <h5 class="card-title" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 20px">RITMOS E KARATÊ</h5>
      <p class="card-text" style="color: #F1F1F1; font-family: IBM Plex Sans, Regular; font-size: 16px;">Valor promocional até a data de vencimento da mensalidade</p>
    </div>
  </div>
  <div class="card" style="border:none; background-color: #242B8C;">
   <div class="card-body text-center">
      <h5 class="card-title" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 20px">PLANO FAMÍLIA</h5>
      <p class="card-text" style="color: #F1F1F1; font-family: IBM Plex Sans, Regular; font-size: 16px;">Valor promocional até a data de vencimento da mensalidade</p>
    </div>
  </div>
</div>
<br>
<div class="card-deck">
  <div class="card" style="border:none; background-color: #B95922; max-width: 300px; height: 200px">
    <div class="card-body text-center">
      <h5 class="card-title" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 20px">AVALIAÇÃO FÍSICA</h5>
      <p class="card-text" style="color: #F1F1F1; font-family: IBM Plex Sans, Regular; font-size: 16px;">Faça sua avaliação física completa com a gente.</p>
      
    </div>
  </div>
  <div class="card" style="border:none; background-color: #242B8C;">
    <div class="card-body text-center">
      <h5 class="card-title" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 20px">FUNCIONAL, GINÁSTICA E MUAY-THAI</h5>
      <p class="card-text" style="color: #F1F1F1; font-family: IBM Plex Sans, Regular; font-size: 16px;">Valor promocional até a data de vencimento da mensalidade</p>
    </div>
  </div>
  <div class="card" style="border:none; background-color: #B95922">
   <div class="card-body text-center">
      <h5 class="card-title" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 20px">DUAS MODALIDADES</h5>
      <p class="card-text" style="color: #F1F1F1; font-family: IBM Plex Sans, Regular; font-size: 16px;">Valor promocional até a data de vencimento da mensalidade</p>
    </div>
  </div>
</div>
</div>

<br>
<br>

<!-- O foooter esta dentro da pasta layout, nome do aquivo main-->

@endsection
