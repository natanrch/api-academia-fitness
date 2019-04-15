@extends('layouts.main')

@section('content')
<div style="background: url(../img/bapp.jpg); background-repeat: no-repeat; background-size: contain; background-size: 100% 100%; background-color:  ">
  <div class="container">

  <div class="row "  >
    <div class="col-12">
  <div class="login-form text-center" >
 <a href="/"><img src="../img/logo.png" class="img-fluid" alt="logo academia fitness" style="max-width: 50%"></a>
    <form method="POST" action="/login" class="text-center" style="background: #fff0">
     
        <h2 class="text-center" style="color: #F1F1F1">ENTRAR</h2> 
        <div class="form-group">
          <div class="input-group">
            <label for="cpf"></label>
                <span class="input-group-addon"  style=" padding: 4px;background: #fff0; border-radius: 9px"><i class="fa fa-user playicon text-center" aria-hidden="true" style="font-size: 25px;"></i></span>
                <input id="email" type="text" class="form-control" placeholder="CPF" required autofocus style="background: #fff0; border-radius: 9px">

              
                  <span class="invalid-feedback" role="alert">
                      <strong></strong>
                  </span>
            
            </div>
        </div>
    <div class="form-group">
            <div class="input-group">
              <label for="senha"></label>
                <span class="input-group-addon" style="padding: 2px;background: #fff0"><i class="fa fa-key playicon text-center" aria-hidden="true" style="font-size: 20px"></i></span>
                <input id="password" type="password" class="form-control" name="password" required placeholder="senha" style="background: #fff0;  border-radius: 9px">

              
                  <span class="invalid-feedback" role="alert">
                      <strong></strong>
                  </span>
         
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btnlaranja btn-block" style="border-radius: 9px; border: 1px solid #ccc; ">ENTRAR</button>
        </div>
        <div class="clearfix">
            
             
                                    <a class="pull-right " href="{{ route('password.request') }}">
                                        Esqueceu a senha?
                                    </a>
                              
        </div>        
    </form>
    <p class="text-center small fontmodalidades" style="font-size: 16px; color: #fff">Não possui um usuário? Procure a academia e matricule-se!</p><br>
</div>

</div>
</div>
</div>
</div>
<br>
@endsection