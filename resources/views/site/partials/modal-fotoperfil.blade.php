<div class="modal fade adcfoto" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="container">
        <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close" style="font-size: 30px;">
          <span aria-hidden="true">&times;</span>
        </button>
      <form method="POST" action="/upload-imagem" enctype="multipart/form-data">
  
      {{csrf_field()}}
      <label for="exampleFormControlFile1" style="margin-top: 10px">Escolha uma foto!</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagem" style=" border: 1px solid #ced4da; border-radius: 2px;">

  
  <div class="form-group text-right">
    <button type="submit" class="btn btnlaranja" style="margin: 5px">Enviar</button>
  </div>
</form>
</div>
    </div>
  </div>
</div>

