{{-- @php
if(count($errors) > 0) {
    dd($errors);
}
@endphp --}}

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
                    <form method="POST" action="/admin/cadastra-aluno" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="password" value="senhapadrao">

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
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required>

                                @if ($errors->has('cpf'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nascimento" class="col-md-4 col-form-label text-md-right">{{ __('DATA DE NASCIMENTO') }}</label>

                            <div class="col-md-6">
                              <div class="input-group">
                                 <input id="nascimento" type="date" class="form-control{{ $errors->has('data') ? ' is-invalid' : '' }}" name="nascimento" value="{{ old('nascimento') }}" required>
                            </div>
                                @if ($errors->has('nascimento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nascimento') }}</strong>
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
                            <label for="pagamento" class="col-md-4 col-form-label text-md-right">{{ __('DATA DE PAGAMENTO') }}</label>

                            <div class="col-md-6">
                              <div class="input-group">
                                 <input id="pagamento" type="date" class="form-control{{ $errors->has('pagamento') ? ' is-invalid' : '' }}" name="pagamento" value="{{ old('pagamento') }}" required>
                                </div>
                                @if ($errors->has('pagamento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pagamento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="modalidade" class="col-md-4 col-form-label text-md-right">{{ __('MODALIDADE') }}</label>

                            <div class="col-md-6">
                               <select class="form-control" style="border: 1px solid #1827f580" id="modalidade" name="modalidade">
                                   <option value="" selected></option>
                                    <option value="musculação">Musculação</option>
                               </select>
                                @if ($errors->has('modalidade'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('modalidade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="instrutor" class="col-md-4 col-form-label text-md-right">{{ __('INSTRUTOR') }}</label>

                             <div class="col-md-6">
                               <select class="form-control" style="border: 1px solid #1827f580" id="instrutor" name="instrutor">
                                   <option selected></option>
                                   @foreach($instrutores as $instrutor)
                                        <option value="{{$instrutor->id}}">{{$instrutor->name}}</option>
                                    @endforeach
                               </select>
                                @if ($errors->has('instrutor'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('instrutor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      
                      <div class="form-group row">
                            <label for="avaliacao" class="col-md-4 col-form-label text-md-right">{{ __('AVALIAÇÃO FÍSICA') }}</label>

                             <div class="col-md-6" >
                                <input type="file" class="form-control-file" id="avaliacao" name="avaliacao" style=" border: 1px solid #ced4da; border-radius: 2px;" >
                                @if ($errors->has('avaliacao'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('avaliacao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btnlaranja " id="successaluno">
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