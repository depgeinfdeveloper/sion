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

/* ========================================================================== */
/*            GESTION DE USUARIOS DEL PERFIL ADMINISTRADOR            */
/* ========================================================================== */

Route::get('/admin', 'AdministradorController@index')->name('administrador');
Route::get('/admin/registro-usuario', 'AdministradorController@registroUsuario')->name('administrador.registro-usuario');
// recibimos los datos del formulario de registro de usuarios del admin
Route::post('/admin/registrar-usuario/', 'AdministradorController@registrarUsuario')->name('administrador.registrar-usuario');
// mostramos la vista de editar usuario del admin
Route::get('/admin/{user}/editar-usuario/', 'AdministradorController@editarUsuario');
// recibimos los datos del formulario para editar usuarios del admin
Route::post('admin/edit-usuarios', 'AdministradorController@updateUsuarios')->name('administrador.edit-usuario');
// mostramos la vista de eliminar usuario del admin
Route::get('/admin/update-estado', 'AdministradorController@updateEstado');
// mostramos la bandeja de usuarios del admin
Route::get('/admin/bandeja-usuario', 'AdministradorController@bandejaUsuario')->name('administrador.bandeja-usuario');
// peticion para select dinamico
Route::post('admin/select2', 'AdministradorController@buscarRegion')->name('admin.select2');

/* -------------------------------------------------------------------------- */
/*                      GESTION DE DATOS DEL PERFIL LIDER                     */
/* -------------------------------------------------------------------------- */

Route::get('/lider','LiderController@index')->name('lider');
Route::get('/lider/mis-miembros','LiderController@misMiembros')->name('lider.bandeja-mis-miembros');

/* -------------------------------------------------------------------------- */
/*                   GESTION DE DATOS DEL PERFIL DE HERMANO                   */
/* -------------------------------------------------------------------------- */
Route::get('/hermano','HermanoController@index')->name('hermano');
Route::get('/hermano/registro/reporte','HermanoController@registroReporte')->name('hermano.registro-reporte');
Route::post('/hermano/registro/reporte','HermanoController@storeReporte')->name('hermano.store-reporte');
Route::get('/hermano/reportes/','HermanoController@miReportes')->name('hermano.mi-reportes');