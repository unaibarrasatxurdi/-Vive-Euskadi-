<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanesController;
use App\Http\Controllers\DescubreEuskadiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComentariosController;

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
    return view('index');
});

Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', [LogoutController::class,'perform']);
    Route::get('/busqueda/insertarFavoritos/{user_id}/{documentName}/{territory}', [PlanesController::class, 'insertarFavoritos'])->name('insertarFavoritos');
    Route::get('/busqueda/borrarFavoritos/{user_id}/{documentName}', [PlanesController::class, 'borrarFavoritos'])->name('borrarFavoritos');
    Route::get('/busqueda/selectFavoritos/{user_id}', [PlanesController::class, 'selectFavoritos'])->name('selectFavoritos');
 });
Route::resource('home', HomeController::class)->only('index');
Route::resource('busqueda', PlanesController::class, ['names' => ['show' => 'plan']]);
Route::resource('descubre-euskadi', DescubreEuskadiController::class)->only('index');

Route::get('/user/datosUsuario/{id}', [UserController::class, 'datosUsuario'])->name('user.miPerfil');
Route::get('/user/planesUsuario', [UserController::class, 'planesUsuario']);
Route::get('/user/planesFavUsuario', [UserController::class, 'planesFavUsuario']);
Route::get('/user/comentariosUsuario', [UserController::class, 'comentariosUsuario'])->name('user.comentariosUsuario');
Route::resource('user', UserController::class);

Route::get('/admin/gestion-usuarios', [AdminController::class, 'adminUsuario'])->name('admin.adminUsuario');
Route::get('/admin/gestion-comentarios', [AdminController::class, 'adminComent'])->name('admin.adminComent');
Route::delete('/admin/destroyUsuario/{id}', [AdminController::class, 'destroyUsuario'])->name('admin.destroyUsuario');
Route::delete('/admin/destroyComent/{id}', [AdminController::class, 'destroyComent'])->name('admin.destroyComent');

Route::resource('admin', AdminController::class);

Route::get('/{documentName}/comentarios', [ComentariosController::class, 'mostrarComentarios'])->name('comentariosPlan');
Route::delete('/user/comentariosDelete/{id}', [ComentariosController::class, 'borrarComentario'])->name('user.comentarioDestroy');
Route::get('/user/comentariosEdit/{id}', [ComentariosController::class, 'editarComentarios'])->name('user.comentarioEdit');
Route::PUT('/user/comentariosEdit/{id}', [ComentariosController::class, 'updateComentarios'])->name('user.comentarioUpdate');
Route::get('/comentario/{IdComentario}', [ComentariosController::class, 'edit'])->name('comentarios.edit');
Route::patch('/comentario/{IdComentario}/update', [ComentariosController::class, 'update'])->name('comentarios.update');

require __DIR__.'/auth.php';
