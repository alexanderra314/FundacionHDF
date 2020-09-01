<div class="modal fade" id="modalCambiopassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Cambio de Rol</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <Form className="was-validated">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password"  class="form-control validate" id="pass1" pattern=".{6,}" autocomplete="off">
          <label data-error="wrong" data-success="right" for="defaultForm-email">password</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password"  class="form-control validate" id="pass2" pattern=".{6,}" autocomplete="off">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Repita password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default" onclick="cambio_password({{ Auth::user()->id}})">Guardar</button>
      </div>
    </div>
    </Form>
  </div>
</div> 