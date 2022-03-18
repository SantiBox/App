<?php

use App\Http\Controllers\cursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\heladosController;
use App\Http\Controllers\preciosController;

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


//Lo primero es Nombrar la rruta entre comilla simple con el nombre que desee darle. luego va la coma seguida de la funsion y el return.

Route::get('/miprimeraruta', function () {
    return 'Hola feos hptas';
});

//Los parametros son muy imporatnes en las rutas de las paginas web y los indicamos entre llaves {}.

Route::get('/sunombre/{nombre}', function ($nombre) {
    return 'Bobote el tal ' . $nombre;

});

Route::get('Heladeria/{opc1}', [heladosController::class, 'helado']);
Route::get('Precio/{prc}', [preciosController::class, 'precios']);

Route::resource('cursos', cursoController::class);
