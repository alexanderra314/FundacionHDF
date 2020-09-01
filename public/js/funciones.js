/********INCIO DE DATA TABLE****** */ 
$(document).ready(function () {
  $('#tabla_users').DataTable({
    language: {
      "lengthMenu": "Mostrar _MENU_ registros",
      // "zeroRecords": "No se encontraron resultados",
      "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
      "infoFiltered": "(filtrado de un total de _MAX_ registros)",
      "sSearch": "Buscar:",
      "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
      },
      "sProcessing": "Procesando...",
    },
    //para usar los botones   
    responsive: "true",
    dom: 'Bfrtilp',
    buttons: [{
        extend: 'excelHtml5',
        text: '<i class="fas fa-file-excel"></i> ',
        titleAttr: 'Exportar a Excel',
        className: 'btn btn-success'
      },
      {
        extend: 'pdfHtml5',
        text: '<i class="fas fa-file-pdf"></i> ',
        titleAttr: 'Exportar a PDF',
        className: 'btn btn-danger'
      },
      {
        extend: 'print',
        text: '<i class="fa fa-print"></i> ',
        titleAttr: 'Imprimir',
        className: 'btn btn-info'
      },
    ]
  });
}); 
/// DATA-TABLE DE LA TABLE DE USUARIOS
$(document).ready(function () {
  $('#tabla_usuarios').DataTable({
    language: {
      "lengthMenu": "Mostrar _MENU_ registros",
      // "zeroRecords": "No se encontraron resultados",
      "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
      "infoFiltered": "(filtrado de un total de _MAX_ registros)",
      "sSearch": "Buscar:",
      "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
      },
      "sProcessing": "Procesando...",
    },
    //para usar los botones   
    responsive: "true",
    dom: 'Bfrtilp',
    buttons: [{
        extend: 'excelHtml5',
        text: '<i class="fas fa-file-excel"></i> ',
        titleAttr: 'Exportar a Excel',
        className: 'btn btn-outline-success'
      },
      {
        extend: 'pdfHtml5',
        text: '<i class="fas fa-file-pdf"></i> ',
        titleAttr: 'Exportar a PDF',
        className: '"btn btn-outline-danger'
      },
      {
        extend: 'print',
        text: '<i class="fa fa-print"></i> ',
        titleAttr: 'Imprimir',
        className: 'btn btn-outline-info'
      },
    ]
  });
}); 
// ********TABLA ACTAS*******//
$(document).ready(function () {
  $('#tabla_actas')
    .addClass('table-striped table-bordered')
    .dataTable({
      language: {
        url: './plugins/DataTables/Spanish.json'
      },
      responsive: true,
      dom: 'B<"salto"><"panel-body"<"row"<"col-sm-6"l><"col-sm-6"f>>>rtip',
      buttons: ['copy', 'excel', 'csv']
    })
}) 
// ********TABLA TIPO DE DOCUMENTOS*******//
$(document).ready(function () {
  $('#tabla_tipos_documentos').DataTable({
    language: {
      "lengthMenu": "Mostrar _MENU_ registros",
      // "zeroRecords": "No se encontraron resultados",
      "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
      "infoFiltered": "(filtrado de un total de _MAX_ registros)",
      "sSearch": "Buscar:",
      "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
      },
      "sProcessing": "Procesando...",
    },
    //para usar los botones   
    responsive: "true",
    dom: 'Bfrtilp',
    buttons: [{
        extend: 'excelHtml5',
        text: '<i class="fas fa-file-excel"></i> ',
        titleAttr: 'Exportar a Excel',
        className: 'btn btn-success'
      },
      {
        extend: 'pdfHtml5',
        text: '<i class="fas fa-file-pdf"></i> ',
        titleAttr: 'Exportar a PDF',
        className: 'btn btn-danger'
      },
      {
        extend: 'print',
        text: '<i class="fa fa-print"></i> ',
        titleAttr: 'Imprimir',
        className: 'btn btn-info'
      },
    ]
  });
}); 
// ********TABLA DE DOCUMENTOS*******//
$(document).ready(function () {
  $('#tabla_documentos').DataTable({
    language: {
      "lengthMenu": "Mostrar _MENU_ registros",
      // "zeroRecords": "No se encontraron resultados",
      "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
      "infoFiltered": "(filtrado de un total de _MAX_ registros)",
      "sSearch": "Buscar:",
      "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
      },
      "sProcessing": "Procesando...",
    },
    //para usar los botones   
    responsive: "true",
    dom: 'Bfrtilp',
    buttons: [{
        extend: 'excelHtml5',
        text: '<i class="fas fa-file-excel"></i> ',
        titleAttr: 'Exportar a Excel',
        className: 'btn btn-success'
      },
      {
        extend: 'pdfHtml5',
        text: '<i class="fas fa-file-pdf"></i> ',
        titleAttr: 'Exportar a PDF',
        className: 'btn btn-danger'
      },
      {
        extend: 'print',
        text: '<i class="fa fa-print"></i> ',
        titleAttr: 'Imprimir',
        className: 'btn btn-info'
      },
    ]
  });
});



/************INICIO BLOQUE DE USERS************ */ 
function crear_user() {
  var url = 'users/create_user'
  $nombre = $('#nombre_user_crear').val()
  $usuario_id = $('#number_user_crear').val()
  $email = $('#email_user_crear').val()
  $cedela = $('#cedula_user_crear').val()
  $rol_id = $('#select_rol_crear').val()
  $estado = '1'

  if ($usuario_id == "" || $cedela == "") {
    Swal.fire('Error!', 'Debe de Ingresar el ID y Documento de Identificación', 'error')
  } else {
     // console.log(datos);
  var obj = new Object()
  obj.Nombre = $nombre
  obj.Email = $email
  obj.Rol_Id = $rol_id
  obj.Estado = $estado
  obj.Usuario_Id = $usuario_id
  obj.Cedula = $cedela
  var datos = JSON.stringify(obj)
  console.log(datos);
  $.post(url + '/' + datos).done(function (data) {

    $('#nombre_user_crear').val('')
    $('#email_user_crear').val('')
    $('#number_user_crear').val('')

    $('#cedula_user_crear').val('')
    $('#crear_user_modal').modal('hide') //ocultamos el modal 
    if (data) {
      Swal.fire('Completado!', 'Se creao el User correctamente', 'success')

    } else {
      Swal.fire('Error!', 'Error al crear User', 'error')
    }
    $('#tabla_div_user').load(' #tabla_users', function () {
      $('#tabla_users')
        .addClass('table-striped table-bordered')
        .dataTable({
          language: {
            url: './plugins/DataTables/Spanish.json'
          },
          destroy: true,
          responsive: true,
          dom: 'B<"salto"><"panel-body"<"row"<"col-sm-6"l><"col-sm-6"f>>>rtip',
          buttons: ['copy', 'excel', 'csv']
        })
    })
  })

  }

  
 
}

function cambio_estado_user(id, color) {
  // alert('hola mundo');
  var estado = $(color).html()
  $Estado = $('#estado' + id).val()
  console.log($Estado);
  // console.log($Estado);

  if ($Estado == '0') {
    var url = 'users/activar'
    // alert('entro a Activar');
    $.post(url + '/' + id).done(function (data) {
      Swal.fire('Completado!', 'el Usuario se ACTIVO correctamente', 'success')

      // $(color).removeClass('btn-danger')
      // $(color).addClass('btn-success')
      $(color).html('ACTIVO')
      $('#estado' + id).val('1')
    })
  } else {
    var url = 'users/inactivar'
    // alert('entro a inactivar');
    $.post(url + '/' + id).done(function (data) {
      Swal.fire(
        'Completado!',
        'el Usuario se INACTIVO correctamente',
        'success'
      )
      $('#estado' + id).val('0')
      // $(color).removeClass('btn-success')
      // $(color).addClass('btn-danger')
      $(color).html('INACTIVO')
    })
  }
} 
// EDITAR USERS DEL SISTEMA
function editar_user(id) {
  var url = 'users/editar'
  $.post(url + '/' + id).done(function (data) {
    // console.log(data.name);

    $('#documento_user_editar').val(data.id)
    $('#name_user_editar').val(data.name)
    $('#apellido_user_editar').val(data.apellido)
    $('#email_user_editar').val(data.email)
    $('#bton_editar').attr('onclick', 'Editar_Usuario(' + data.id + ')')
  })
} 
// RESTABLECER users DEL SISTEMA
function restablecer_contrasena_user(id) {
  var url = 'users/restablecer'
  $.post(url + '/' + id).done(function (data) {
    Swal.fire('Completado!', 'Nueva Contraseña:123456789', 'success')
  })
} 
// RESTABLECER users PASSWORD DEL SISTEMA
function cambio_password(id) {

  $pass1 = $('#pass1').val()
  $pass2 = $('#pass2').val()
  $Id = id;

  var obj = new Object()
  obj.Id = id
  obj.Password = $pass1
  var datos = JSON.stringify(obj)

  if ($pass1 = $pass2) {
    var url = 'users/password'
    $.post(url + '/' + datos).done(function (data) {
      Swal.fire('Completado!', 'Se guardo la contraseña exitosamente', 'success')
      $('#pass1').val('')
      $('#pass2').val('')
      $('#modalCambiopassword').modal('hide') //ocultamos el modal
    })
  } else {
    Swal.fire('Error!', 'Las Contraseña nos conciden', 'error')
    $('#pass1').val('')
    $('#pass2').val('')
  }

} 
// EDITAR USER DEL SISTEMA
function editar_user(id) {
  var url = 'users/editar'
  $.post(url + '/' + id).done(function (data) {
    // console.log(data.name);

    $('#id_user_editar').val(data.id)
    $('#name_user_editar').val(data.name)
    $('#email_user_editar').val(data.email)
    $('#bton_editar_user').attr('onclick', 'update_user(' + data.id + ')')
  })
}  
// ACTUALIZACION DEL USER MODAL
function update_user(id) {
  var url = 'users/update'
  $nombres = $('#name_user_editar').val() 
  $correo = $('#email_user_editar').val()

  var obj = new Object()
  obj.Id = id
  obj.Username = $nombres
  obj.Correo = $correo
  var datos = JSON.stringify(obj)

  $.post(url + '/' + datos).done(function (data) { 
    $('#modalRegisterFormeditar').modal('hide') //ocultamos el modal
    console.log(data);
    if (Number(data)) {
      Swal.fire('Completado!', 'User editado Correctamente', 'success')
    } else {
      Swal.fire('Error!', 'Error al editar User', 'error')
    }
    $('#tabla_div_user').load(' #tabla_users', function () {
      $('#tabla_users')
        .addClass('table-striped table-bordered')
        .dataTable({
          language: {
            url: './plugins/DataTables/Spanish.json'
          },
          destroy: true,
          responsive: true,
          dom: 'B<"salto"><"panel-body"<"row"<"col-sm-6"l><"col-sm-6"f>>>rtip',
          buttons: ['copy', 'excel', 'csv']
        })
    })
  })
} 
function envio_rol_user(id) {
    $('#User_id').val(id) 
    
} 
function cambio_rol_user() {
  var url = 'users/rol_update'

  $id = $('#User_id').val()
  
  $rol_id = $('#select_rol_update').val() 
  
  var obj = new Object()
  obj.Id = $id 
  obj.Rol = $rol_id
  var datos = JSON.stringify(obj)

  $.post(url + '/' + datos).done(function (data) { 
    $('#select_rol_update').modal('hide') //ocultamos el modal
    console.log(data);
    if (Number(data)) {
      Swal.fire('Completado!', 'Rol del User editado Correctamente', 'success')
      $('#modalCambioUserRol').modal('hide') //ocultamos el modal 
    } else {
      Swal.fire('Error!', 'Error al editar User', 'error')
      $('#modalCambioUserRol').modal('hide') //ocultamos el modal 
    }
    $('#tabla_div_user').load(' #tabla_users', function () {
      $('#tabla_users')
        .addClass('table-striped table-bordered')
        .dataTable({
          language: {
            url: './plugins/DataTables/Spanish.json'
          },
          destroy: true,
          responsive: true,
          dom: 'B<"salto"><"panel-body"<"row"<"col-sm-6"l><"col-sm-6"f>>>rtip',
          buttons: ['copy', 'excel', 'csv']
        })
    })
  })
}
//   VERIFICAR SI EL USUARIO TIENE ASIGNADO UN USER

function verificar_user() {
  var url = 'users/verificar'
  var cedula = $('#cedula_user_crear').val() 
  $.post(url + '/' + cedula).done(function (data) {
   console.log(data)

   if (data == 1) {
    Swal.fire('Error!', 'Usuario tiene un UserName Asignado', 'error')
   }else if (data == 2) {
    Swal.fire('Error!', 'No existe un Usuario con ese numero de documento', 'error')
    $('#cedula_user_crear').val("")

   
   }else{
    $('#bton_crear_UserName').removeAttr('disabled')
    $("#nombre_user_crear").removeAttr('disabled');
    $("#email_user_crear").val(data);
    $("#email_user_crear").removeAttr('disabled');
    
   }

  })
} 
function Cerrar_Modal_Crear_user(){
    $('#bton_crear_UserName').attr('disabled','true')
    $("#nombre_user_crear").val('');
    $("#email_user_crear").val('');
    $("#nombre_user_crear").attr('disabled','true');
    $("#email_user_crear").attr('disabled','true');
    $('#cedula_user_crear').val('') 
    $('#crear_user_modal').modal('hide') //ocultamos el modal
    
}


/************INICIO BLOQUE DE ROLES**************************** */ 
function crear_rol() {

  var url = 'roles/create'
  $nombre = $('#nombre_rol_crear').val()
  $estado = 'Activo'

  var obj = new Object()
  obj.Nombre = $nombre
  obj.Estado = $estado
  var datos = JSON.stringify(obj)
  console.log(datos);
  $.post(url + '/' + datos).done(function (data) {

    $('#nombre_rol_crear').val('')
    $('#crear_rol_modal').modal('hide') //ocultamos el modal 
    if (data) {
      Swal.fire('Completado!', 'Se creao el Rol correctamente', 'success')

    } else {
      Swal.fire('Error!', 'Error al crear Rol', 'error')
    }
    $('#tabla_div_user').load(' #tabla_roles', function () {
      $('#tabla_roles')
        .addClass('table-striped table-bordered')
        .dataTable({
          language: {
            url: './plugins/DataTables/Spanish.json'
          },
          destroy: true,
          responsive: true,
          dom: 'B<"salto"><"panel-body"<"row"<"col-sm-6"l><"col-sm-6"f>>>rtip',
          buttons: ['copy', 'excel', 'csv']
        })
    })
  })
}
// EDITAR ROLES 
function editar_rol(id) {
  var url = 'roles/editar'
  $.post(url + '/' + id).done(function (data) {
    // console.log(data.name); 
    $('#id_rol_editar').val(data.id)
    $('#name_rol_editar').val(data.nombre)
    $('#descripcion_rol_editar').val(data.descripcion)
    $('#bton_editar_rol').attr('onclick', 'update_rol(' + data.id + ')')
  })
} 
// ACTUALIZACION DEL USER MODAL
function update_rol(id) {
  var url = 'roles/update'
  $nombres = $('#name_rol_editar').val() 
  $texto = $('#descripcion_rol_editar').val()

  var obj = new Object()
  obj.Id = id
  obj.Nombre = $nombres
  obj.Texto = $texto
  var datos = JSON.stringify(obj)

  $.post(url + '/' + datos).done(function (data) { 
    $('#modalEditarRol').modal('hide') //ocultamos el modal
    // console.log(data);
    if (data) {
      Swal.fire('Completado!', 'Rol editado Correctamente', 'success')
    } else {
      Swal.fire('Error!', 'Error al editar Rol', 'error')
    }
    $('#tabla_div_rol').load(' #tabla_roles', function () {
      $('#tabla_roles')
        .addClass('table-striped table-bordered')
        .dataTable({
          language: {
            url: './plugins/DataTables/Spanish.json'
          },
          destroy: true,
          responsive: true,
          dom: 'B<"salto"><"panel-body"<"row"<"col-sm-6"l><"col-sm-6"f>>>rtip',
          buttons: ['copy', 'excel', 'csv']
        })
    })
  })
} 




/************INICIO BLOQUE DE TIPO DE DOCUMENTO**************************** */

function crear_tipo_documento() {

  var url = 'tipos_documentos/create'
  $nombre = $('#nombre_tipo_documento_crear').val()
  $siglas = $('#sigla_tipo_documento_crear').val()


  var obj = new Object()
  obj.Nombre = $nombre
  obj.Siglas = $siglas
  var datos = JSON.stringify(obj)
  // console.log(datos);
  $.post(url + '/' + datos).done(function (data) {

    $('#nombre_tipo_documento_crear').val('')
    $('#sigla_tipo_documento_crear').val('')
    $('#crear_tipo_documento_modal').modal('hide') //ocultamos el modal 
    
    if (data) {
      Swal.fire('Completado!', 'Se creao el Tipo de Documento correctamente', 'success')

    } else {
      Swal.fire('Error!', 'Error al crear Tipo de Documento', 'error')
    }
    $('#tabla_tipos_documentos').load(' #tabla_tipos_documentos', function () {
      $('#tabla_tipos_documentos')
        .addClass('table-striped table-bordered')
        .dataTable({
          language: {
            url: './plugins/DataTables/Spanish.json'
          },
          destroy: true,
          responsive: true,
          dom: 'B<"salto"><"panel-body"<"row"<"col-sm-6"l><"col-sm-6"f>>>rtip',
          buttons: ['copy', 'excel', 'csv']
        })
    })
  })
}

function editar_tipo_documento(id) {
  var url = 'tipos_documentos/editar'
  $.post(url + '/' + id).done(function (data) {
    // console.log(data.name); 
    $('#id_tipos_documentos_editar').val(data.id)
    $('#name_tipos_documentos_editar').val(data.nombre)
    $('#siglas_tipos_documentos_editar').val(data.siglas)
    $('#bton_editar_tipos_documentos').attr('onclick', 'update_tipos_documentos(' + data.id + ')')
  })
} 
// ACTUALIZACION DEL USER MODAL
function update_tipos_documentos(id) {
  var url = 'tipos_documentos/update'
  $nombres = $('#name_tipos_documentos_editar').val() 
  $siglas = $('#siglas_tipos_documentos_editar').val()

  var obj = new Object()
  obj.Id = id
  obj.Nombre = $nombres
  obj.Siglas = $siglas
  var datos = JSON.stringify(obj) 
  $.post(url + '/' + datos).done(function (data) { 
    $('#ModalTipoDocumento').modal('hide') //ocultamos el modal
    // console.log(data);
    if (Number(data)) {
      console.log(data); 
      Swal.fire('Completado!', 'tipos_documentos editado', 'success')  
      $('#ModalTipoDocumento').modal('hide') //ocultamos el modal 

    } else {
      Swal.fire('Error!', 'Error al editar tipos_documentos', 'error')
    } 
    $('#tabla_div_tipo_documento').load(' #tabla_tipos_documentos', function () {
      $('#tabla_tipos_documentos')
        .addClass('table-striped table-bordered')
        .dataTable({
          language: {
            url: './plugins/DataTables/Spanish.json'
          },
          destroy: true,
          responsive: true,
          dom: 'B<"salto"><"panel-body"<"row"<"col-sm-6"l><"col-sm-6"f>>>rtip',
          buttons: ['copy', 'excel', 'csv']
        })
    })
  })
}


/************INICIO BLOQUE DE USUARIOS**************************** */


function cargar_usuario_rol(id, nombre, apellido, documento) {
  $('#number_rol_cargar').val(id)
  $('#id_number_rol_cargar').val(documento)
} 
// CAMBIO DEL ROL DEL USUARIO
function cambio_rol_usuario() {
  var url = 'usuarios/cambio_rol'
  $id = $('#number_rol_cargar').val()
  $seleccion = $('#select_rol_cambiar').val()

  var obj = new Object()
  obj.Id = $id
  obj.Seleccion = $seleccion
  var datos = JSON.stringify(obj)
  $.post(url + '/' + datos).done(function (data) {
    $('#cambio_rol_usuario_modal').modal('hide') //ocultamos el modal 
    console.log(data);
    
    if (Number(data)) { 
      Swal.fire('Completado!', 'Se Actualizo el Rol de Usuario Correctamente', 'success')
      $('#modalCambioUserRol').modal('hide') //ocultamos el modal  

    } else {
      Swal.fire('Error!', 'Error al Cambiar el rol del Usuario', 'error')
      $('#modalCambioUserRol').modal('hide') //ocultamos el modal 
    }

    $('#tabla_div_usuario').load(' #tabla_usuarios', function () {
      $('#tabla_usuarios')
        .addClass('table-striped table-bordered')
        .dataTable({
          language: {
            url: './plugins/DataTables/Spanish.json'
          },
          destroy: true,
          responsive: true,
          dom: 'B<"salto"><"panel-body"<"row"<"col-sm-6"l><"col-sm-6"f>>>rtip',
          buttons: ['copy', 'excel', 'csv']
        })
    })
  })

  
} 
function cargar_usuario_tipo_documento(id, nombre, apellido, documento) {
  // console.log(id);
  $('#id_number_td_cargar').val(id)
  $('#number_td_cargar').val(documento)
}  
//CAMBIO DEL TIPO DOCUMENTO DEL USUARIO
function update_usuario_tipo_documento() {
  var url = 'usuarios/cambio_td'
  $id = $('#id_number_td_cargar').val()
  $seleccion = $('#select_td_cambiar').val()

  var obj = new Object()
  obj.Id = $id
  obj.Seleccion = $seleccion
  var datos = JSON.stringify(obj)
  // console.log(datos);
  $.post(url + '/' + datos).done(function (data) {
    $('#cambio_tp_usuario_modal').modal('hide') //ocultamos el modal 
    
    if (Number(data)) {
      Swal.fire('Completado!', 'Se Cambio Correctamente el Tipo de Documento', 'success')
      $('#modalCambioUserRol').modal('hide') //ocultamos el modal 
    } else {
      Swal.fire('Error!', 'Error al Cambiar el Tipo de Documento', 'error')
      $('#modalCambioUserRol').modal('hide') //ocultamos el modal 
    }
    $('#tabla_usuarios').load(' #tabla_usuarios', function () {
      $('#tabla_usuarios')
        .addClass('table-striped table-bordered')
        .dataTable({
          language: {
            url: './plugins/DataTables/Spanish.json'
          },
          destroy: true,
          responsive: true,
          dom: 'B<"salto"><"panel-body"<"row"<"col-sm-6"l><"col-sm-6"f>>>rtip',
          buttons: ['copy', 'excel', 'csv']
        })
    })
  })
 
}  
// EDITAR USUARIO DEL SISTEMA
function editar_usuario(id) {
// alert('hola mundo');
  var url = 'usuarios/editar'
  $.get(url + '/' + id).done(function (data) {  
    $('#pnombre_user_actualizar').val(data['usuario'].primer_nombre)
    $('#snombre_user_actualizar').val(data['usuario'].segundo_nombre)
    $('#papellido_user_actualizar').val(data['usuario'].primer_apellido)
    $('#sapellido_user_actualizar').val(data['usuario'].segundo_apellido)
    
    $('#number_user_actualizar').val(data['usuario'].id)
    
    for (let index = 0; index < data['tipos_documentos'].length; index++) { 
      // console.log(data['tipos_documentos'][index].id)
      // console.log(data['usuario'].tipo_documento_id)
       if (data['tipos_documentos'][index].id == data['usuario'].tipo_documento_id) {
      //  console.log(data['tipos_documentos'][index].nombre)
         
         $('#td_user_actualizar').val(data['tipos_documentos'][index].nombre)
         
       }
    }

    $('#cedula_user_actualizar').val(data['usuario'].identificacion)
    // $fecha = $('#fn_user_actualizar').val(data['usuario'].fecha_nacimiento)
    $fecha = data['usuario'].fecha_nacimiento 
    if ($fecha) {
      
      $1 = $fecha.substr(0,4)
      $2 = $fecha.substr(5,2)
      $3 = $fecha.substr(8,2)
  
      $nueva_fecha = $1+"-"+$2+"-"+$3;
      console.log($nueva_fecha)
      $('#fn_user_actualizar').val($nueva_fecha)
    } 

    $('#direccion_user_actualizar').val(data['usuario'].direccion)
    $('#barrio_user_actualizar').val(data['usuario'].barrio)
    $('#cuidad_user_actualizar').val(data['usuario'].ciudad)
    $('#departamento_user_actualizar').val(data['usuario'].departamento)

    $('#celular_user_actualizar').val(data['usuario'].telefono)
    $('#fijo_user_actualizar').val(data['usuario'].fijo)
    $('#email_user_actualizar').val(data['usuario'].email)
    $('#objecto_user_actualizar').val(data['usuario'].objecto)
 
  })
} 
function update_usuario() {
  var url = 'usuarios/update_td' 
  var obj = new Object()
  

  obj.ID = $('#number_user_actualizar').val()
  obj.PN = $('#pnombre_user_actualizar').val()
  obj.SN = $('#snombre_user_actualizar').val()
  obj.PA = $('#papellido_user_actualizar').val()
  obj.SA = $('#sapellido_user_actualizar').val() 
  obj.ID = $('#number_user_actualizar').val()
  obj.NC = $('#cedula_user_actualizar').val()
  obj.FN = $('#fn_user_actualizar').val() 
  obj.DI = $('#direccion_user_actualizar').val()
  obj.BA = $('#barrio_user_actualizar').val()
  obj.CI = $('#cuidad_user_actualizar').val()
  obj.DE = $('#departamento_user_actualizar').val() 
  obj.CE = $('#celular_user_actualizar').val()
  obj.FJ = $('#fijo_user_actualizar').val()
  obj.EM = $('#email_user_actualizar').val()
  obj.O = $('#objecto_user_actualizar').val() 
  var datos = JSON.stringify(obj)

  $.post(url + '/' + datos).done(function (data) { 
    $('#ModalEditarUsuario').modal('hide') //ocultamos el modal
    console.log(data);
    if (data) {
      
      Swal.fire('Completado!', 'Usuario Editado Correctamente', 'success')  
      $('#ModalTipoDocumento').modal('hide') //ocultamos el modal 

    } else {
      Swal.fire('Error!', 'Error al editar Usuario', 'error')
    } 
    $('#tabla_div_usuario').load(' #tabla_usuarios', function () {
      $('#tabla_usuarios')
        .addClass('table-striped table-bordered')
        .dataTable({
          language: {
            url: './plugins/DataTables/Spanish.json'
          },
          destroy: true,
          responsive: true,
          dom: 'B<"salto"><"panel-body"<"row"<"col-sm-6"l><"col-sm-6"f>>>rtip',
          buttons: ['copy', 'excel', 'csv']
        })
    })
  })

}
 
function eliminar_pdf(pdf) {

  // var Pdf = pdf;
  var url = 'documentos/eliminar'
  var obj = new Object()
  obj.Pdf = pdf 
  var datos = JSON.stringify(obj)
  console.log(datos);

  $.post(url + '/' + datos).done(function (data) {
    $('#cambio_rol_usuario_modal').modal('hide') //ocultamos el modal 
    Swal.fire('Completado!', 'se Eliminado el Archivo correctamente', 'success')
    // console.log(data['0'].nombre);
  })
  $('#tabla_div_user').load(' #tabla_actas', function () {
    $('#tabla_actas')
      .addClass('table-striped table-bordered')
      .dataTable({
        language: {
          url: './plugins/DataTables/Spanish.json'
        },
        destroy: true,
        responsive: true,
        dom: 'B<"salto"><"panel-body"<"row"<"col-sm-6"l><"col-sm-6"f>>>rtip',
        buttons: ['copy', 'excel', 'csv']
      })
  })
}
