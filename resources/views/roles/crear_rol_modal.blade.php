  <!-- Modal -->
  <div class="modal fade" id="crear_rol_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <center>

                <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo Rol</h5>
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
                            <input type="text" id="nombre_rol_crear" class="form-control text-center validate" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div> 
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="crear_rol()">Crear</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>