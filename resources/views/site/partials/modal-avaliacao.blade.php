<div class="modal fade avaliar-{{$aluno->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="container">
        <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close" style="font-size: 30px;">
          <span aria-hidden="true">&times;</span>
        </button>
        <br>
      <form method="POST" action="admin/reavaliar" enctype="multipart/form-data">
  <div class="form-group">
   

    <label for="exampleFormControlFile1" class="col-form-label text-md-right" style="margin-top: 10px">Escolha o arquivo</label>
    <input type="file" name="avaliacao" class="form-control-file" id="exampleFormControlFile1" style=" border: 1px solid #ced4da; border-radius: 2px; padding: 7px">
    <input type="hidden" name="id" value="{{isset($aluno->id) ? $aluno->id : ''}}">
    {{csrf_field()}}

     <label for="proxima_avaliacao" class="col-form-label text-md-right">{{ __('Data da próxima avaliação física') }}</label>
    <input id="proxima_avaliacao" type="date" class="form-control{{ $errors->has('proxima_avaliacao') ? ' is-invalid' : '' }}" name="proxima_avaliacao" value="{{ old('proxima_avaliacao') }}" required> 
  </div>
  <div class="form-group text-right">
    <button type="submit" class="btn btnlaranja" style="margin-right:  17px">Enviar</button>
  </div>
</form>
</div>
    </div>
  </div>
</div>