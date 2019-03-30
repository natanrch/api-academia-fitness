@extends('layouts.main')

@section('content')

<!-- O menu esta dentro da pasta layout, nome do aquivo main-->


<!--Decricacao da academia-->

 <div class="jumbotron" style="background-color: #fff">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <p>Já pensou em ter seu treino em mão onde e quando quiser, com demostrativos dos execicios de forma correta. Aqui na Academia Fitness você pode baixar nosso Aplicativo e seguir seu treino elaborado pelos instrutores e com base na sua avaliação fisica. </p>
          <p>Venha conhecer a <strong>Academia Fitness!</strong></p>
        </div>
         <div class="col-sm-6 col-12 text-right">
          <img src="img/aplicativo.png" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </div>
</div>



<div class="container text-center"  >
    <center>
    <div style="max-width: 600px">
    <p class=" textacademia h1  " >ACADEMIA FITNESS</p>
    <hr style="max-width: 222px; height: 3px; background-color: #131852;">
    </div>
    
    <div style="max-width: 500px;  " >
      <p class="lead" style="font-family: IBM Plex Sans, Regular; font-size: 20px">A Academia Fitness está a mais de 20 anos atuando no Estado do Amapá, sendo referência no seu ramo, oferecendo um serviço de alta qualidade.</p>
    </div>
    </center>
  </div>
     <br>


<!--texto modalidades-->
<div class="container text-center">
        <div class="section-header">
          <h2 class="text-center ">MODALIDADES</h2>
    </div>
</div>

<!--tipos de modalidades-->

<div class="container text-center ">
  <div class="row" >
    <div class="col-12 col-sm-4  " style="border:none;"  >
      <img class="card-img-top imgmodalidades" src="img/musculacao.jpg" alt="Imagem de capa do card">
      <p class="text-center fontmodalidades font-weight-normal">Musculação</p>
      
    </div>
    <div class=" col-12 col-sm-4"  style="border:none;">
      <img class="card-img-top  imgmodalidades" src="img/ritmos.jpg" alt="Imagem de capa do card">
      <p class="text-center fontmodalidades font-weight-normal">Ritmos</p> 
    </div>
    <div class="col-12 col-sm-4 " style="border:none;" >
      <img class="card-img-top imgmodalidades" src="img/funcional.jpg" alt="Imagem de capa do card">
      <p class="text-center fontmodalidades font-weight-normal">Treinamento Funcional</p>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-sm-4"  style="border:none;">
      <img class="card-img-top imgmodalidades" src="img/karate.jpg" alt="Imagem de capa do card">
      <p class="text-center fontmodalidades font-weight-normal">Karatê</p> 
    </div>
    <div class="col-12 col-sm-4"  style="border:none;">
      <img class="card-img-top imgmodalidades" src="img/ginastica.jpg" alt="Imagem de capa do card">
      <p class="text-center fontmodalidades font-weight-normal">Ginástica</p> 
    </div>
    <div class="col-12 col-sm-4"  style="border:none;">
      <img class="card-img-top imgmodalidades" src="img/muay-thai.jpg" alt="Imagem de capa do card">
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
        <img src="svg/img-planos.svg" class="img-fluid " alt="Imagem responsiva" style="max-height: 330px">
      </div>
    </div>
  </div>
</div>
</div>

<br>



<!--tipos de planos-->
<div class="container"> 
<div class="card-deck">
  <div class="card" style="border:none; background-color: #242B8C; ">
    <div class="card-body text-center">
      <h5 class="card-title" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 18px">MUSCULAÇÃO</h5>
      <p class="card-text" style="color: #F1F1F1; font-family: IBM Plex Sans, Regular; font-size: 15px;" >A primeira mensalidade tem o valor de R$ 75,00. <br> A partir da segunda:</p>
       

        <div class="d-flex  mb-2 ">
          <div class="mr-auto  "><img src="svg/001-money-color.svg" class="iconpgd"><small class="valorplanos">R$ 65,00</small></div>
          
          <div class="bd-highlight"><img src="svg/002-debit-card-color.svg" class="iconpgc"><small class="valorplanos">R$ 70,00</small></div>
        </div>
    </div>
  </div>
  <div class="card" style="border:none; background-color: #B95922">
    <div class="card-body text-center">
      <h5 class="card-title" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 20px">RITMOS E KARATÊ</h5>
      <p class="card-text" style="color: #F1F1F1; font-family: IBM Plex Sans, Regular; font-size: 16px;">Valor promocional até a data de vencimento da mensalidade</p>
      <br>

      <div class="d-flex  mb-2 ">
          <div class="mr-auto  "><img src="svg/001-money-color.svg" class="iconpgd"><small class="valorplanos">R$ 65,00</small></div>
          
          <div class="bd-highlight"><img src="svg/002-debit-card-color.svg" class="iconpgc"><small class="valorplanos">R$ 70,00</small></div>
        </div>
    </div>
  </div>
  <div class="card" style="border:none; background-color: #242B8C;">
   <div class="card-body text-center">
      <h5 class="card-title" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 20px">PLANO FAMÍLIA</h5>
      <p class="card-text" style="color: #F1F1F1; font-family: IBM Plex Sans, Regular; font-size: 16px;">Valor promocional até a data de vencimento da mensalidade</p><br>
      <div class="d-flex  mb-2 ">
          <div class="mr-auto  "><img src="svg/001-money-color.svg" class="iconpgd"><small class="valorplanos">R$ 65,00</small></div>
          
          <div class="bd-highlight"><img src="svg/002-debit-card-color.svg" class="iconpgc"><small class="valorplanos">R$ 70,00</small></div>
        </div>
    </div>
  </div>
</div>
<br>
<div class="card-deck">
  <div class="card" style="border:none; background-color: #B95922;  ">
    <div class="card-body text-center">
      <h5 class="card-title" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 20px">AVALIAÇÃO FÍSICA</h5>
      <p class="card-text" style="color: #F1F1F1; font-family: IBM Plex Sans, Regular; font-size: 16px;">Faça sua avaliação física completa com a gente.</p><br>

      <div class="d-flex  mb-4">
          <div class="mr-auto  "><img src="svg/001-money-color.svg" class="iconpgd"><small class="valorplanos">R$ 65,00</small></div>
          
          <div class="bd-highlight"><img src="svg/002-debit-card-color.svg" class="iconpgc"><small class="valorplanos">R$ 70,00</small></div>
        </div>
      
    </div>
  </div>
  <div class="card" style="border:none; background-color: #242B8C;">
    <div class="card-body text-center">
      <h5 class="card-title" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 20px">FUNCIONAL, GINÁSTICA E MUAY-THAI</h5>
      <p class="card-text" style="color: #F1F1F1; font-family: IBM Plex Sans, Regular; font-size: 16px;">Valor promocional até a data de vencimento da mensalidade</p>
      <div class="d-flex  mb-2 ">
          <div class="mr-auto  "><img src="svg/001-money-color.svg" class="iconpgd"><small class="valorplanos">R$ 65,00</small></div>
          
          <div class="bd-highlight"><img src="svg/002-debit-card-color.svg" class="iconpgc"><small class="valorplanos">R$ 70,00</small></div>
        </div>
    </div>
  </div>
  <div class="card" style="border:none; background-color: #B95922">
   <div class="card-body text-center">

      <h5 class="card-title" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 20px">DUAS MODALIDADES</h5>
      <p class="card-text" style="color: #F1F1F1; font-family: IBM Plex Sans, Regular; font-size: 16px;">Valor promocional até a data de vencimento da mensalidade</p><br>
      <div class="d-flex  mb-2 ">
          <div class="mr-auto  "><img src="svg/001-money-color.svg" class="iconpgd"><small class="valorplanos">R$ 65,00</small></div>
          
          <div class="bd-highlight"><img src="svg/002-debit-card-color.svg" class="iconpgc"><small class="valorplanos">R$ 70,00</small></div>
        </div>
    </div>
  </div>
</div>
</div>

<br>
<br>

<!-- O foooter esta dentro da pasta layout, nome do aquivo main-->

@endsection
