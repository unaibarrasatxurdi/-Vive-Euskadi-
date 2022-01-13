<?php

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
    return view('index');
}); 

Route::get('/descubre_euskadi', function () {
    return view('descubre-euskadi');
});

Route::get('/inicio_sesion', function () {
    return view('inicio-sesion');
});

Route::get('/usuario', function () {
    return view('usuario');
});

Route::get('/planes', function () {
    return view('planes');
});

Route::get('/planes/detalle/{id}', function ($id) {
    return 'Detalle del plan '.$id;
});

Route::get('/loquete', function () {
    return view('loquete');
})
?>
