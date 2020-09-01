<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/tipos_documentos/create/*',
        '/roles/create/*',
        '/roles/editar/*',
        '/roles/update/*',
        '/tipos_documentos/editar/*',
        '/tipos_documentos/update/*',
        '/users/create_user/*',
        '/usuarios/create_user/*',
        '/usuarios/cambio_rol/*',
        '/usuarios/cambio_td/*',
        '/usuarios/editar/*',
        '/usuarios/update_td/*',
        '/users/activar/*',
        '/users/inactivar/*',
        '/users/restablecer/*',
        '/users/password/*',
        '/users/editar/*',
        '/users/update/*',
        '/users/rol_update/*',
        '/users/verificar/*',
        '/documentos/eliminar/*',
        '/upload_upload_documento/*',
        '/upload_upload_acta/*',
        '/upload_upload_formulario/*',
        '/upload_upload_modelo/*',
        '/asociados/create_usuario',
    ];
}
