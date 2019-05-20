@extends('layouts.main')

@section('content')

<!-- O menu esta dentro da pasta layout, nome do aquivo main-->
<!--Decricacao da academia-->
<section>
 <div class="jumbotron jumbotron-fluid altura  d-flex align-content-center flex-wrap " style="background-image: url(img/Fotoram.io.jpg); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-color: #fff ;   ">
     <div class="container">
      <div class="row">
        <div class="col-sm-5 col-12 align-content-sm-center text-center">
          <br>
          
          <p class="textoapp">CONHEÇA O APLICATIVO DE TREINO DA ACADEMIA FITNESS </p>
          
        </div>
         <div class="col-sm-7 col-12 align-content-sm-center">
         
          <div class="embed-responsive embed-responsive-16by9">
            
        <iframe class="embed-responsive-item" src="img/video1.mp4" allowfullscreen></iframe> 
      </div>
      <div class="text-center">
            <a href="" class="btn "><img src="img/store.png" alt="baixa aplicativo na play store" class="img-fluid" style="max-width: 200px; max-height: 50px" ></a>
            
            <br><br>
          </div>
      
    </div>
        </div>
      </div>
    </div>
</div>

</section>
<hr class="linha">
<section>
<div class="container text-center"  >
    <center>
    <div style="max-width: 600px">
    <h1 class="fontvigor " style="font-size: 40px; color:#B95922;  ">ACADEMIA FITNESS</h1>
    
    </div>
    
    <div style="max-width: 500px;  " >
      <p class="lead" style="font-family: IBM Plex Sans, Regular; font-size: 20px">A Academia Fitness está a mais de 20 anos atuando no Estado do Amapá, sendo referência no seu ramo, oferecendo um serviço de alta qualidade.</p>
    </div>
    </center>
  </div>
  </section>
     <hr class="linha">

<section>
<!--texto modalidades-->
<div class="container text-center">
        <div class="section-header">
          <h2 class="text-center ">MODALIDADES</h2>
          <p class="ficha text-center">Valor promocional até a data de vencimento</p>
    </div>
</div>
<br>
<!--tipos de modalidades-->

<div class="container text-center ">
  <div class="row" >
    <div class="col-12 col-sm-4  "  >
      <article>
      <p class="text-center fontmodalidades font-weight-normal">Musculação</p>
      <img class="card-img-top imgmodalidades" src="img/musculacao.jpg" alt="Musculação">
      <center>
        <div class="pmodalidades " style=" padding: 5px; border-bottom: 1px solid  #B95922" >
        <div class="d-flex  mb-2 ">
          <div class="mr-auto  "><span class="valorplanos" >R$ 65,00 <i class="fa fa-money" style="color: green; font-size: 20px" aria-hidden="true"></i></span><br><span class="preco">DINHEIRO</span></div>
          
          <div class="bd-highlight"><span class="valorplanos">R$ 70,00 <i class="fa fa-credit-card-alt playicon" aria-hidden="true"></i></span><br><span class="preco">CARTÃO</span></div>
        </div>
      </div>
      </center>
      <article>
    </div>
    <div class=" col-12 col-sm-4"  style="border:none;">
      <article>
      <p class="text-center fontmodalidades font-weight-normal">Ritmos</p>
      <img class="card-img-top  imgmodalidades" src="img/ritmos.jpg" alt="Ritmos">
      <center>
        <div class="pmodalidades " style=" padding: 5px; border-bottom: 1px solid  #B95922" >
        <div class="d-flex  mb-2 ">
          <div class="mr-auto  "><span class="valorplanos" >R$ 60,00 <i class="fa fa-money" style="color: green; font-size: 20px" aria-hidden="true"></i></span><br><span class="preco">DINHEIRO</span></div>
          
          <div class="bd-highlight"><span class="valorplanos">R$ 65,00 <i class="fa fa-credit-card-alt playicon" aria-hidden="true"></i></span><br><span class="preco">CARTÃO</span></div>
        </div>
      </div>
      </center>
      </article>
    </div>
    <div class="col-12 col-sm-4 " style="border:none;" >
      <article>
      <p class="text-center fontmodalidades font-weight-normal">Treinamento Funcional</p>
      <img class="card-img-top imgmodalidades" src="img/funcional.jpg" alt="Treinamento Funcional">
      <center>
        <div class="pmodalidades " style=" padding: 5px; border-bottom: 1px solid  #B95922" >
        <div class="d-flex  mb-2 ">
          <div class="mr-auto  "><span class="valorplanos" >R$ 70,00 <i class="fa fa-money" style="color: green; font-size: 20px" aria-hidden="true"></i></span><br><span class="preco">DINHEIRO</span></div>
          
          <div class="bd-highlight"><span class="valorplanos">R$ 75,00 <i class="fa fa-credit-card-alt playicon" aria-hidden="true"></i></span><br><span class="preco">CARTÃO</span></div>
        </div>
      </div>
      </center>
      
    </div>
    </article>
  </div>

  <div class="row">
    <div class="col-12 col-sm-4"  style="border:none;">
      <article>
      <p class="text-center fontmodalidades font-weight-normal">Karatê</p> 
      <img class="card-img-top imgmodalidades" src="img/karate.jpg" alt="Karatê">
      <center>
        <div class="pmodalidades " style=" padding: 5px; border-bottom: 1px solid  #B95922" >
        <div class="d-flex  mb-2 ">
          <div class="mr-auto  "><span class="valorplanos" >R$ 60,00 <i class="fa fa-money" style="color: green; font-size: 20px" aria-hidden="true"></i></span><br><span class="preco">DINHEIRO</span></div>
          
          <div class="bd-highlight"><span class="valorplanos">R$ 65,00 <i class="fa fa-credit-card-alt playicon" aria-hidden="true"></i></span><br><span class="preco">CARTÃO</span></div>
        </div>

      </div>
      </center>
      </article>
    </div>
    <div class="col-12 col-sm-4"  style="border:none;">
      <article>
      <p class="text-center fontmodalidades font-weight-normal">Ginástica</p>
      <img class="card-img-top imgmodalidades" src="img/ginastica.jpg" alt="Ginástica">
      <center>
        <div class="pmodalidades " style=" padding: 5px; border-bottom: 1px solid  #B95922" >
        <div class="d-flex  mb-2 ">
          <div class="mr-auto  "><span class="valorplanos" >R$ 70,00 <i class="fa fa-money" style="color: green; font-size: 20px" aria-hidden="true"></i></span><br><span class="preco">DINHEIRO</span></div>
          
          <div class="bd-highlight"><span class="valorplanos">R$ 75,00 <i class="fa fa-credit-card-alt playicon" aria-hidden="true"></i></span><br><span class="preco">CARTÃO</span></div>
        </div>
      </div>
      </center>
       </article>
    </div>
    <div class="col-12 col-sm-4"  style="border:none;">
      <article>
      <p class="text-center fontmodalidades font-weight-normal">Muay-thai</p>
      <img class="card-img-top imgmodalidades" src="img/muay-thai.jpg" alt="Muay-thai">
      <center>
        <div class="pmodalidades " style=" padding: 5px; border-bottom: 1px solid  #B95922" >
        <div class="d-flex  mb-2 ">
          <div class="mr-auto  "><span class="valorplanos" >R$ 70,00 <i class="fa fa-money" style="color: green; font-size: 20px" aria-hidden="true"></i></span><br><span class="preco">DINHEIRO</span></div>
          
          <div class="bd-highlight"><span class="valorplanos">R$ 75,00 <i class="fa fa-credit-card-alt playicon" aria-hidden="true"></i></span><br><span class="preco">CARTÃO</span></div>
        </div>
      </div>
      </center>
       </article>
    </div>
  </div>
</div>
</section>
<!-- chamada para planos -->
<br>
<section>
  <article>
<div class="container">
    <div class="row">
      <div class="col-12 col-sm-6">
        <h2 class="planosh2 text-center">PLANOS PERFEITOS PARA VOCÊ</h2>
          <br>
        <div style="max-width: 300px; margin-left: 90px">
        <P class="descplanos text-left">Na Academia Fitness você encontra planos acessíveis ao seu bolso, e que te oferecem diversas modalidades.
            <br><br>
         Você pode pagar no dinheiro ou no cartão de crédito. Além disso oferecemos descontos para alunos que pagam antes do vencimento.</P>
      </div>
      
      </div>
      <div class="col-12 col-sm-6 text-center" >
        <img src="svg/img-planos.svg" class="img-fluid " alt="comprando planos" style="max-height: 330px">
      </div>
    </div>
</div>
</article>
<br>



<!--tipos de planos-->
<article>
<div class="container"> 
<div class="card-deck">
  <div class="card" style="border:none; background-color: #B95922;  ">
    <div class="card-body text-center">
      <h5 class="card-title" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 20px">AVALIAÇÃO FÍSICA</h5>
      <p class="card-text" style="color: #F1F1F1; font-family: IBM Plex Sans, Regular; font-size: 16px;">Faça sua avaliação física completa com a gente.</p><br>

      <center>
        <div class="pmodalidades " style=" padding: 5px; ">
        <div class="d-flex  mb-2 ">
          <div class="mr-auto  "><span class="valorplanos1" >R$ 30,00 <i class="fa fa-money" style="color: green; font-size: 20px" aria-hidden="true"></i></span><br><span class="preco1">DINHEIRO</span></div>
          
          <div class="bd-highlight"><span class="valorplanos1">R$ 35,00 <i class="fa fa-credit-card-alt" style="color:#0c0303b3; margin-top: 4px" aria-hidden="true"></i></span><br><span class="preco1">CARTÃO</span></div>
        </div>
      </div>
      </center>
       
    </div>
  </div>
   <div class="card" style="border:none; background-color: #060A4B;">
   <div class="card-body text-center">
      <h5 class="card-title" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 20px">PLANO FAMÍLIA</h5>
      <p class="card-text" style="color: #F1F1F1; font-family: IBM Plex Sans, Regular; font-size: 16px;">Valor promocional até a data de vencimento da mensalidade</p><br>
     <center>
        <div class="pmodalidades " style=" padding: 5px;"  >
        <div class="d-flex  mb-2 ">
          <div class="mr-auto  "><span class="valorplanos1" >R$ 75,00 <i class="fa fa-money" style="color: green; font-size: 20px" aria-hidden="true"></i></span><br><span class="preco1">DINHEIRO</span></div>
          
          <div class="bd-highlight"><span class="valorplanos1">R$ 75,00 <i class="fa fa-credit-card-alt" style="color:#0c0303b3; margin-top: 4px" aria-hidden="true"></i></span><br><span class="preco1">CARTÃO</span></div>
        </div>
      </div>
      </center>
       
    </div>
  </div>
  <div class="card" style="border:none; background-color: #B95922">
   <div class="card-body text-center">

      <h5 class="card-title" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 20px">DUAS MODALIDADES</h5>
      <p class="card-text" style="color: #F1F1F1; font-family: IBM Plex Sans, Regular; font-size: 16px;">Valor promocional até a data de vencimento da mensalidade</p><br>
      <center>
        <div class="pmodalidades " style=" padding: 5px;" >
        <div class="d-flex  mb-2 ">
          <div class="mr-auto  "><span class="valorplanos1" >R$ 110,00 <i class="fa fa-money" style="color: green; font-size: 20px" aria-hidden="true"></i></span><br><span class="preco1">DINHEIRO</span></div>
          
          <div class="bd-highlight"><span class="valorplanos1">R$ 115,00 <i class="fa fa-credit-card-alt"  style="color:#0c0303b3; margin-top: 4px" aria-hidden="true"></i></span><br><span class="preco1">CARTÃO</span></div>
        </div>
      </div>
      </center>
       
    </div>
  </div>
</div>
</div>
</div>
</article>
<br>
<br>

<!-- O foooter esta dentro da pasta layout, nome do aquivo main-->

@endsection
