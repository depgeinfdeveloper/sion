<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// mostramos la vista principal del admin
Route::get('/admin', 'AdministradorController@index')->name('administrador');

/* ========================================================================== */
/*            GESTION DE USUARIOS DEL PERFIL ADMINISTRADOR            */
/* ========================================================================== */
Route::get('/admin/registro-usuario', 'AdministradorController@registroUsuario')->name('administrador.registro-usuario');
// recibimos los datos del formulario de registro de usuarios del admin
Route::post('/admin/registrar-usuario/', 'AdministradorController@registrarUsuario')->name('administrador.registrar-usuario');
// mostramos la vista de editar usuario del admin
Route::get('/admin/{user}/editar-usuario/', 'AdministradorController@editarUsuario');
// recibimos los datos del formulario para editar usuarios del admin
Route::post('admin/edit-usuarios', 'AdministradorController@updateUsuarios')->name('administrador.edit-usuario');

// mostramos la vista de eliminar usuario del admin
Route::get('/admin/eliminar-usuario', 'AdministradorController@eliminarUsuario');
// mostramos la bandeja de usuarios del admin
Route::get('/admin/bandeja-usuario', 'AdministradorController@bandejaUsuario')->name('administrador.bandeja-usuario');
