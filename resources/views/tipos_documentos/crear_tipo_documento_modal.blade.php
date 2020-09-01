  <!-- Modal -->
  <div class="modal fade" id="crear_tipo_documento_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <center>

                <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo Tipo de Documneto</h5>
            </center>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="text-center border border-light p-4">
                    <div class="form-row mb-4">
                        <div class="col">
                            <i class="fas fa-user prefix grey-text"></i>
                            <label for="inputname">Nombre</label>
                            <input type="text" id="nombre_tipo_documento_crear" class="form-control text-center validate" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div> 
                        </div> 
                        <div class="form-row mb-4">
                        <div class="col">
                            <i class="fas fa-user prefix grey-text"></i>
                            <label for="inputname">Siglas</label>
                            <input type="text" id="sigla_tipo_documento_crear" class="form-control text-center validate" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div> 
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" onclick="crear_tipo_documento()">Crear</button>
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>