  <!-- Modal -->
  <div class="modal fade" id="crear_user_modal" tabindex="-1" usere="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" usere="document">
      <div class="modal-content">
        <div class="modal-header">
            <center> 
                <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo User</h5>
            </center>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="text-center border border-light p-4">
                    <div class="form-row mb-6">
                        <div class="col">
                            <i class="fas fa-user prefix grey-text"></i>
                            <label for="inputname">UserName</label>
                            <input type="text" id="nombre_user_crear" class="form-contuser text-center validate" disabled>
                        </div> 
                        <div class="col">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label for="inputname">Email</label>
                            <input type="email" id="email_user_crear" class="form-contuser text-center validate" disabled>
                        </div> 
                    </div>
                </div>
            </form>
            <form>
                <div class="text-center border border-light p-4">
                    <div class="form-row mb-6">
                        <div class="col">
                          <i class="far fa-id-badge"></i>
                            <label for="inputname">ID Usuario</label>
                            <input type="number" id="number_user_crear" class="form-contuser text-center validate" >
                        </div> 
                        <div class="col">
                          <i class="far fa-id-badge"></i>
                            <label for="inputname">Cedula</label>
                            <input type="text" id="cedula_user_crear" class="form-contuser text-center validate" onblur="verificar_user()">
                        </div> 
                    </div>
                </div>
            </form>
            <form>
                <div class="text-center border border-light p-4">
                  <div class="form-row mb-6">
                    
                  <select id='select_rol_crear' class="js-example-responsive" name="state" style="
                  height: 35px;
                  width: 500px;
                  font-family: inherit;
              ">
                    <option value="0" selected>Seleccione un Rol</option>
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
          <button type="button" class="btn btn-primary" onclick="crear_user()" disabled id="bton_crear_UserName">Crear</button>
          <button type="button" class="btn btn-danger"  onclick="Cerrar_Modal_Crear_user()">Cancelar</button>
        </div>
      </div>
    </div>
  </div> 