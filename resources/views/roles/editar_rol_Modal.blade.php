<div class="modal fade" id="modalEditarRol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background: darkslateblue;">
                <h4 class="modal-title w-100 font-weight-bold">Editar Roles</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3"> 
                <div class="md-form mb-2">
                    <i class="far fa-id-card prefix grey-text"></i>
                    <input type="text" id="id_rol_editar" class="form-control validate" disabled>
                     
                </div>  
                <div class="md-form mb-2"> 
                    <i class="fas fa-user-check prefix grey-text"></i>
                    <input type="text" id="name_rol_editar" class="form-control validate">
                   
                </div>  
                <div class="md-form mb-2"> 
                    <i class="far fa-file-alt prefix grey-text"></i> 
                    <textarea  type="text" id="descripcion_rol_editar" class="form-control validate"></textarea> 
                </div> 
        </div>
        <div class="modal-footer  justify-content-center">
            <button type="button" class="btn btn-success" id="bton_editar_rol">Editar</button>
        </div>
    </div>
</div>
</div>

{{-- <script>
    $(document).ready(function (){
          $('.documento_user').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
          });
        });
</script> --}}