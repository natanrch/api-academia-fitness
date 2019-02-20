@extends('layouts.main')

@section('content')

<!-- O menu esta dentro da pasta layout, nome do aquivo main-->


<!--Decricacao da academia-->

<div class="jumbotron jumbotron-fluid text-center">
  <div class="container">
    <img src="..." class="img-fluid" alt="Responsive image">
    <h1 class="display-4">ACADEMIA FITNESS</h1>
    <p class="lead">DESCRIÇÃO This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
</header>

<!--texto modalidades-->
<div class="container">
        <div class="section-header">
          <h2 class="text-center">MODALIDADES</h2>
        </div>

<!--tipos de modalidades-->

<div class="container">
  <div class="card-deck "  >
  <div class="row">
    <div class="col-sm-4 card " style="border:none;"  >
      <img class="card-img-top" src="img/musculacao.png" alt="Imagem de capa do card">
      <h3 class="text-center">musculação</h3>
    </div>
    <div class="col-sm-4 card"  style="border:none;">
      <img class="card-img-top" src="img/musculacao.png" alt="Imagem de capa do card">
      <h3 class="text-center">musculação</h3>
    </div>
    <div class="col-sm-4 card" style="border:none;" >
      <img class="card-img-top" src="img/musculacao.png" alt="Imagem de capa do card">
      <h3 class="text-center">musculação</h3>
    </div>
  </div>
</div>

<div class="card-deck" >
  <div class="row">
    <div class="col-sm-4 card"  style="border:none;">
      <img class="card-img-top" src="img/musculacao.png" alt="Imagem de capa do card">
      <h3 class="text-center">musculação</h3>
    </div>
    <div class="col-sm-4 card"  style="border:none;">
      <img class="card-img-top" src="img/musculacao.png" alt="Imagem de capa do card">
      <h3 class="text-center">musculação</h3>
    </div>
    <div class="col-sm-4 card"  style="border:none;">
      <img class="card-img-top" src="img/musculacao.png" alt="Imagem de capa do card">
      <h3 class="text-center">musculação</h3>
    </div>
  </div>
</div>
</div>

<br>

<!-- chamada para planos -->
<div class="container">
<div class="row">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-12 col-sm-6">
        <h3>PLANOS PERFEITOS PARA VOCÊ</h3>
        <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
      </div>
      <div class="col-12 col-sm-6">
        <img src="img/musculacao.png" class="img-fluid" alt="Imagem responsiva">
      </div>
    </div>
  </div>
</div>
</div>

<br>


<!--tipos de planos-->
<div class="container"> 
<div class="card-deck">
  <div class="card bg-primary" style="border:none;">
    <div class="card-body text-center">
      <h5 class="card-title">MUSCULAÇÃO</h5>
      <p class="card-text">Primeira mensalidade:</p>
      <p class="card-text">Icones e valor</p>
    </div>
  </div>
  <div class="card bg-primary" style="border:none;">
    <div class="card-body text-center">
      <h5 class="card-title">MUSCULAÇÃO</h5>
      <p class="card-text">Primeira mensalidade:</p>
    </div>
  </div>
  <div class="card bg-primary" style="border:none;">
   <div class="card-body text-center">
      <h5 class="card-title">MUSCULAÇÃO</h5>
      <p class="card-text">Primeira mensalidade:</p>
    </div>
  </div>
</div>
<br>
<div class="card-deck">
  <div class="card bg-primary" style="border:none;">
    <div class="card-body text-center">
      <h5 class="card-title">MUSCULAÇÃO</h5>
      <p class="card-text">Primeira mensalidade:</p>
      <p class="card-text">Icones e valor</p>
    </div>
  </div>
  <div class="card bg-primary" style="border:none;">
    <div class="card-body text-center">
      <h5 class="card-title">MUSCULAÇÃO</h5>
      <p class="card-text">Primeira mensalidade:</p>
    </div>
  </div>
  <div class="card bg-primary" style="border:none;">
   <div class="card-body text-center">
      <h5 class="card-title">MUSCULAÇÃO</h5>
      <p class="card-text">Primeira mensalidade:</p>
    </div>
  </div>
</div>
</div>

<br>

<!-- O foooter esta dentro da pasta layout, nome do aquivo main-->

@endsection
