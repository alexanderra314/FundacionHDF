<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'auth'], function()
{

    // Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

  Route::get('/tablero', 'HomeController@dashboard')->name('dashboard'); 

  Route::get('/users', 'UserController@index')->name('user');
  Route::post('/users/create_user/{id}', 'UserController@store');
  Route::post('/users/activar/{id}', [
    'uses' => 'UserController@activar_users'
  ]);  
  Route::post('/users/inactivar/{id}', [
  'uses' => 'UserController@inactivar_users'
  ]); 
  Route::post('/users/restablecer/{id}', [
    'uses' => 'UserController@restablecer'
  ]); 
  Route::post('/users/password/{id}', [
    'uses' => 'UserController@password'
  ]); 
  Route::post('/users/editar/{id}', [
    'uses' => 'UserController@editar'
  ]); 

  Route::post('/users/update/{id}', [
    'uses' => 'UserController@update'
  ]); 
  Route::post('/users/rol_update/{id}', [
    'uses' => 'UserController@update_rol'
  ]); 
  Route::post('/users/verificar/{id}', [
    'uses' => 'UserController@verificar'
  ]); 


  Route::get('/usuarios', 'UsuarioController@index')->name('usuario');
  Route::post('/usuarios/create_user/{id}', 'UsuarioController@store');
  Route::post('/usuarios/cambio_rol/{id}', 'UsuarioController@cambio_rol');
  Route::post('/usuarios/cambio_td/{id}', 'UsuarioController@cambio_td');
  Route::get('/usuarios/editar/{id}', 'UsuarioController@editar_usuario');
  Route::post('/usuarios/update_td/{id}', 'UsuarioController@update');
 

  Route::get('/roles', 'RolController@index')->name('rol');
  Route::post('/roles/create/{id}', 'RolController@store');
  Route::post('/roles/editar/{id}', [
    'uses' => 'RolController@editar'
  ]); 
  Route::post('/roles/update/{id}', [
    'uses' => 'RolController@update'
  ]); 


  Route::get('/tipos_documentos', 'ConfiguracionController@index')->name('tipos_documentos');
  Route::post('/tipos_documentos/create/{id}', 'ConfiguracionController@store');
  Route::post('/tipos_documentos/editar/{id}', [
    'uses' => 'ConfiguracionController@editar'
  ]); 
  Route::post('/tipos_documentos/update/{id}', [
    'uses' => 'ConfiguracionController@update'
  ]); 

  
  Route::get('/organigramas', 'OrganigramaController@index')->name('organigrama');
  
  
  Route::get('/documentaciones', 'DocumentacionController@index')->name('documentacion');
  Route::get('/actas', 'DocumentacionController@actas')->name('acta');
  Route::get('/archivos', 'DocumentacionController@documento')->name('documento');
  Route::get('/formularios', 'DocumentacionController@formulario')->name('formulario');
  Route::get('/modelos', 'DocumentacionController@modelo')->name('modelo');
  Route::post('/documentos/eliminar', 'DocumentacionController@eliminar_pdf');


  Route::post("upload_upload_acta","UploadController@subir_archivo_acta"); //Guarda los Archivos
  Route::post("upload_upload_documento","UploadController@subir_archivo_documento"); //Guarda los Archivos
  Route::post("upload_upload_formulario","UploadController@subir_archivo_formulario"); //Guarda los Archivos
  Route::post("upload_upload_modelo","UploadController@subir_archivo_modelo"); //Guarda los Archivos
});


Route::get('/', function () {
    return view('home');
});

//**************PRINCIPAL*******//
Route::get('/quien', 'PrincipalController@quien')->name('quien'); 
Route::get('/que', 'PrincipalController@que')->name('que'); 
Route::get('/donacion', 'PrincipalController@donacion')->name('donacion'); 
Route::get('/aliados', 'PrincipalController@aliado')->name('aliado'); 
Route::get('/asociados', 'PrincipalController@asociado')->name('asociado'); 
Route::post('/asociados/create_usuario', [
  'uses' => 'PrincipalController@create_usuario'
]); 


// Auth::routes();
    // Authentication Routes... 
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login'); 
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');



  // Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

