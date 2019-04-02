<div class="modal fade modalaluno" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
<div class="container" >
  <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close" style="font-size: 30px;">
          <span aria-hidden="true">&times;</span>
        </button>
    <div class="row justify-content-center">
        <div class="col-md-10" >
            <div class="card" style="border:none;">
                <div class="card-header">
                    <h2 class="text-center">{{ __('Cadastrar Aluno') }}</h2>
                </div>

                <div class="card-body fonttd">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NOME') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-MAIL') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('DATA DE PAGAMENTO') }}</label>

                            <div class="col-md-6">
                              <div class="input-group">
                                 <input id="email" type="date" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required><span class="input-group-addon" style="border: 1px solid #ccc; padding: 3px;"><i class="fa fa-calendar playicon text-center" style="font-size: 20px; margin-top: 4px" aria-hidden="true"></i></span>
                            </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('MODALIDADE') }}</label>

                            <div class="col-md-6">
                               <select class="form-control" style="border: 1px solid #1827f580">
                                   <option selected>Selecione</option>
                                    <option value="">Musculação</option>
                               </select>
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('INSTRUTOR') }}</label>

                             <div class="col-md-6">
                               <select class="form-control" style="border: 1px solid #1827f580">
                                   <option selected>Selecione</option>
                                    <option value="">Jorge Costa</option>
                               </select>
                            </div>
                        </div>
                      
                      <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('AVALIAÇÃO FÍSICA') }}</label>

                             <div class="col-md-6">
                               <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Arquivo</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btnlaranja">
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