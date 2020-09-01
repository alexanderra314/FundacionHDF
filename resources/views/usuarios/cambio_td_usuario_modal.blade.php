  <!-- Modal -->
  <div class="modal fade" id="cambio_tp_usuario_modal" tabindex="-1" usere="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" usere="document">
      <div class="modal-content">
        <div class="modal-header">
            <center>

                <h5 class="modal-title" id="exampleModalLabel">Cambio de Tipo Documento</h5>
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
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label for="inputname">ID</label>
                            <input type="number" id="number_td_cargar" class="form-contuser text-center validate" disabled>
                        </div> 
                        <div class="col">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label for="inputname">IDENTIFICACIÓN</label>
                            <input type="text" id="id_number_td_cargar" class="form-contuser text-center validate" disabled>
                        </div> 
                    </div>
                </div>
            </form> 
            <form>
                <div class="text-center border border-light p-4">
                  <div class="form-row mb-6">
                    
                  <select id='select_td_cambiar' class="js-example-responsive" name="state" style="
                  height: 35px;
                  width: 500px;
                  font-family: inherit;
              ">
                    <option value="0" selected>Seleccione un Tipo de Documento</option>
                    <?php foreach($tipos as $tipo): ?>
                        <option value="<?php echo $tipo->id; ?>"><?php echo $tipo->nombre; ?></option>
                    <?php endforeach; ?>
                </select>
                  </select>
                </div>
                </div>
            </form>
        </div>  
        <div class="modal-footer">
            <button type="button" class="btn btn-success" onclick="update_usuario_tipo_documento()">Actualizar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div> 