<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanesController;
use App\Http\Controllers\DescubreEuskadiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminController;

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
 });
Route::resource('home', HomeController::class)->only('index');
Route::resource('busqueda', PlanesController::class, ['names' => ['show' => 'plan']]);
Route::resource('descubre-euskadi', DescubreEuskadiController::class)->only('index');

Route::get('/user/datosUsuario', [UserController::class, 'datosUsuario']);
Route::get('/user/planesUsuario', [UserController::class, 'planesUsuario']);
Route::get('/user/planesFavUsuario', [UserController::class, 'planesFavUsuario']);
Route::get('/user/comentariosUsuario', [UserController::class, 'comentariosUsuario']);
Route::resource('user', UserController::class);

Route::get('/admin/gestion-usuarios', [AdminController::class, 'adminUsuario'])->name('admin.adminUsuario');;
Route::get('/admin/gestion-comentarios', [AdminController::class, 'adminComent'])->name('admin.adminComent');;
Route::delete('/admin/destroyUsuario/{id}', [AdminController::class, 'destroyUsuario'])->name('admin.destroyUsuario');
Route::delete('/admin/destroyComent/{id}', [AdminController::class, 'destroyComent'])->name('admin.destroyComent');

Route::resource('admin', AdminController::class);





require __DIR__.'/auth.php';
