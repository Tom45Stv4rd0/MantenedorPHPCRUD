<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

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
    return view('auth.login');
});
/*
Route::get('/usuario', function () {
    return view('usuario.index');
});

Route::get('/usuario/create',[EmpleadoController::class,'create']);*/

Route::resource('usuario',EmpleadoController::class)->middleware('auth');
Auth::routes();



Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/',[EmpleadoController::class, 'index'])->name('home');
});
Route::get('/export/users', [App\Http\Controllers\ExcelController::class, 'descargaExcel']);


