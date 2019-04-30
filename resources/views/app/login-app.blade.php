@extends('app.main-app')

@section('sessao')
<div style="background: url(../img/bap.jpg); background-repeat: no-repeat; background-size: contain; background-size: 100% 100%; background-color:  ">
  <div class="container">

  <div class="row "  >
    <div class="col-12">
  <div class="login-form text-center" >
 <a href="/"><img src="../img/logo.png" class="img-fluid" alt="logo academia fitness" style="max-width: 50%"></a>
    <form method="POST" action="/login" class="text-center">
     
        <h2 class="text-center" >ENTRAR</h2> 
        <div class="form-group">
          <div class="input-group">
            <label for="cpf"></label>
                <span class="input-group-addon"  style="border: 1px solid #ccc; padding: 4px;"><i class="fa fa-user playicon text-center" aria-hidden="true" style="font-size: 25px;"></i></span>
                <input id="email" type="text" class="form-control" placeholder="CPF" required autofocus style="">

              
                  <span class="invalid-feedback" role="alert">
                      <strong></strong>
                  </span>
            
            </div>
        </div>
    <div class="form-group">
            <div class="input-group">
              <label for="senha"></label>
                <span class="input-group-addon" style="border: 1px solid #ccc; padding: 3px;"><i class="fa fa-key playicon text-center" aria-hidden="true" style="font-size: 20px"></i></span>
                <input id="password" type="password" class="form-control" name="password" required placeholder="senha" >

              
                  <span class="invalid-feedback" role="alert">
                      <strong></strong>
                  </span>
         
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btnlaranja btn-block">ENTRAR</button>
        </div>
        <div class="clearfix">
            
             
                                    <a class="pull-right " href="{{ route('password.request') }}">
                                        Esqueceu a senha?
                                    </a>
                              
        </div>        
    </form>
    <p class="text-center small fontmodalidades" style="font-size: 16px; color: #fff">Não possui um usuário? Procure a academia e matricule-se!</p>
</div>

</div>
</div>
</div>
</div>
@endsection