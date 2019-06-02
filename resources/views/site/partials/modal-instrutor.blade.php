<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="container">
          <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close" style="font-size: 30px;">
          <span aria-hidden="true">&times;</span>
        </button>
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card" style="border:none;">
                
                 <div class="card-header">
                    <h2 class="text-center">{{ __('Cadastrar Instrutor') }}</h2>
                </div>


                <div class="card-body fonttd">
                    <form method="POST" action="/admin/cadastra-instrutor">
                        @csrf


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right required">{{ __('NOME') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nome do instrutor" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right required">{{ __('CREF') }}</label>

                            <div class="col-md-6">
                                <input id="cref" type="text" class="form-control{{ $errors->has('cref') ? ' is-invalid' : '' }}" name="cref" value="{{ old('cref') }}" placeholder="000000-X/XX" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cref') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right required">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" placeholder="00000000000" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right required">{{ __('E-MAIL') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="meuemail@provedor.com" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                 <br>
                                <div class="text-center" style="">Senha: academiafitness</div>
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btnlaranja btn-block" id="successinstrutor">
                                    {{ __('CADASTRAR') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
  </div>
</div>