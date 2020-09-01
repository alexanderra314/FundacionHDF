<div class="modal fade show" id="ModalEditarUsuario" tabindex="-1" usere="dialog" aria-labelledby="exampleModalLabel" aria-modal="true" style="padding-right: 17px; display: block;">
    <div class="modal-dialog" usere="document">
      <div class="modal-content" style="width: 900px;">
        <div class="modal-header" style="
        background: steelblue;
    "> 
       <center>
                <a class="modal-title" id="exampleModalLabel" style="
                font-size: 30px;
                font-family: fantasy;
            ">Actualizar Usuario</a>
           </center>    
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">

            <form>
                <div class="form-row text-center">
                  <div class="col">
                    
                        <label for="inputname">ID Usuario</label>
                        <input type="number" id="number_user_actualizar" class="form-control text-center validate" disabled="">
                  </div>
                  <div class="col">
                    
                        <label for="inputname">Tipo de Documento</label>
                        <input type="text" id="td_user_actualizar" class="form-control text-center validate" disabled>
                  </div>
                
                  <div class="col">
                    
                        <label for="inputname">Cedula</label>
                        <input type="text" id="cedula_user_actualizar" class="form-control text-center validate">
                  </div>
                  <div class="col">
                    <i class="far fa-id-badge prefix grey-text" aria-hidden="true"></i>
                        <label for="inputname">Fecha de Nacimiento</label>
                        <input type="text" id="fn_user_actualizar" class="form-control text-center validate">
                  </div>
                </div>
              </form>
              <br>
            <form>
                <div class="form-row text-center">
                    <div class="col">
                        
                        <label for="inputname">Primer Nombre</label>
                        <input type="text" id="pnombre_user_actualizar" class="form-control text-center validate">
                    </div> 
                    <div class="col">
                        <i class="fas fa-user prefix grey-text" aria-hidden="true"></i>
                        <label for="inputname">Segundo Nombre</label>
                        <input type="text" id="snombre_user_actualizar" class="form-control text-center validate">
                    </div> 
                    <div class="col">
                        <i class="fas fa-user prefix grey-text" aria-hidden="true"></i>
                        <label for="inputname">Primer Apellido</label>
                        <input type="text" id="papellido_user_actualizar" class="form-control text-center validate">
                    </div> 
                    <div class="col">
                        <i class="fas fa-user prefix grey-text" aria-hidden="true"></i>
                        <label for="inputname">Segundo Apellido</label>
                        <input type="text" id="sapellido_user_actualizar" class="form-control text-center validate">
                    </div> 
                </div>
              </form>
              <br>
              <form>
                <div class="form-group text-center">
                    
                    <label for="exampleFormControlInput1">Dirección</label>
                    <input type="text" class="form-control text-center" id="direccion_user_actualizar">
                  </div>
              </form>
              <form>
              <div class="form-row text-center">
                <div class="form-group col-md-4">
                  <label for="inputbarrio">Barrio</label>
                  <input type="text" class="form-control text-center" id="barrio_user_actualizar">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputCiudad">Ciudad</label>
                  <input type="text" class="form-control text-center" id="cuidad_user_actualizar">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputDepartamento">Departamento</label>
                  <input type="text" class="form-control" id="departamento_user_actualizar">
                </div>
              </div>
            </form>
              <form>
              <div class="form-row text-center">
                <div class="form-group col-md-3">
                  <label for="inputCelular">Celular</label>
                  <input type="text" class="form-control text-center" id="celular_user_actualizar">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputfijo">Fijo</label>
                  <input type="text" class="form-control text-center" id="fijo_user_actualizar">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputemail">Correo Electronico</label>
                  <input type="text" class="form-control text-center" id="email_user_actualizar">
                </div>
              </div>
            </form>
             <form>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Objectivo</label>
                <textarea class="form-control" id="objecto_user_actualizar" rows="3"></textarea>
              </div>
            </form>
       
           
        <div class="modal-footer">
            <button type="button" class="btn btn-primary waves-effect waves-light" onclick="actualizar_user()">actualizar</button>
          <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal">Cancelar</button>
        </div>

      </div>
    </div>
  </div> 
</div>