<div class="modal fade avaliar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="container">
        <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close" style="font-size: 30px;">
          <span aria-hidden="true">&times;</span>
        </button>
      <form method="POST" action="admin/reavaliar" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlFile1">Escolha arquivo</label>
    <input type="file" name="avaliacao" class="form-control-file" id="exampleFormControlFile1" style=" border: 1px solid #ced4da; border-radius: 2px;">
    <input type="hidden" name="id" value="{{$aluno->id}}">
    {{csrf_field()}}
  </div>
  <div class="form-group text-right">
    <button type="submit" class="btn btnlaranja">Enviar</button>
  </div>
</form>
</div>
    </div>
  </div>
</div>