  <!-- Modal -->
  <div class="modal fade" id="modalCambioUserRol" tabindex="-1" usere="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" usere="document">
      <div class="modal-content">
        <div class="modal-header">
            <center> 
                <h5 class="modal-title" id="exampleModalLabel">Actualiza Rol del User</h5>
            </center>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">  
            <form>
              <input type="hidden" name="" id="User_id">
                <div class="text-center border border-light p-4">
                  <div class="form-row mb-6">
                    
                  <select id='select_rol_update' class="js-example-responsive" name="state" style="
                  height: 35px;
                  width: 500px;
                  font-family: inherit;
              ">
                    <option value="" selected>Seleccione un Rol</option>
                    <?php foreach($roles as $rol): ?>
                      <option value="<?php echo $rol->id; ?>"><?php echo $rol->nombre; ?></option>
                    <?php endforeach; ?>
                </select>
                  </select>
                </div>
                </div>
            </form>
        </div>  
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="cambio_rol_user()">update</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div> 