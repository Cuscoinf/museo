<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AreaController;
use App\Http\Controllers\CartaPresentacionController;
use App\Http\Controllers\FormacionAcademicaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NombreEspecimenController;
use App\Http\Controllers\InvestigadorController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EspecimenController;
use Illuminate\Support\Facades\Auth;

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
    return redirect('login');
});

//Route::get('/', HomeController::class)->name('home');

/*Route::get('area',[AreaController::class,'index'])->name('area.index');
Route::get('area/create',[AreaController::class,'create'])->name('area.create');
Route::post('area',[AreaController::class,'store'])->name('area.store');
Route::get('area/{area}',[AreaController::class,'show'])->name('area.show');
Route::get('area/{area}/edit',[AreaController::class,'edit'])->name('area.edit');
Route::put('area/{area}',[AreaController::class,'update'])->name('area.update');
Route::delete('area/{area}',[AreaController::class,'destroy'])->name('area.destroy');
*/
Route::resource('area', AreaController::class);
Route::resource("especimen", EspecimenController::class);
Route::resource('formacion-academica', FormacionAcademicaController::class);
Route::resource('registro-solicitud', SolicitudController::class);


Route::resource('investigador', InvestigadorController::class);
Route::put('updateuser/{user}',[InvestigadorController::class,'updateUser'])->name('updateuser');
Route::post('createuser',[InvestigadorController::class,'storeUser'])->name('createuser');

Route::resource('roles', RoleController::class);
Route::apiResource('roles',RoleController::class);
Route::get('/asignar-roles/{id}', [RoleController::class, 'asignarRoles'])->name('asignar-roles');

Route::get('/getmenus',[RoleController::class,'getMenus'])->name('getmenus');
Route::get('/getmenuuser/{id}',[RoleController::class,'getMenuUser'])->name('getmenuuser');
Route::put('actualizarpermiso/{menuuser}',[RoleController::class,'actualizarPermiso'])->name('actualizarpermiso');

Route::get('registro-maztozoologia', [EspecimenController::class, 'maztozoologia'])->name('especimen.maztozoologia');
Route::get('registro-ornitologia', [EspecimenController::class, 'ornitologia'])->name('especimen.ornitologia');

Route::post('guardar-herpetologia', [EspecimenController::class, 'storeHerpetologia'])->name('guardar.herpetologia');
Route::post('guardar-maztozoologia', [EspecimenController::class, 'storeMaztozoologia'])->name('guardar.Maztozoologia');
Route::post('guardar-ornitologia', [EspecimenController::class, 'storeornitologia'])->name('guardar.ornitologia');

Route::get('registro-nombres', [NombreEspecimenController::class, 'index'])->name('nombreEspecimen');
Route::post('registrar-nombre', [NombreEspecimenController::class, 'store'])->name('guardarNombreEspecimen');
Route::delete('eliminar-nombre/{id}', [NombreEspecimenController::class, 'destroy'])->name('eliminarNombreEspecimen');

Route::get('lista-especimen/{area}',[EspecimenController::class, 'listarEspecimen'])->name('listarEspecimen');
Route::get('especimen-data/{area}',[EspecimenController::class, 'dataEspecimen'])->name("dataEspecimen");

Route::get('registro-decomisados', [EspecimenController::class, 'decomisados'])->name("especimen.decomisados");
Route::post('registro-decomisados', [EspecimenController::class, 'storeDecomisados'])->name("guardar.decomisados");


Route::get('especimen/{area}/{id}',[EspecimenController::class, 'show'])->name('muestra.especimen');

Route::get('/ornitologia',[EspecimenController::class, 'storeOrnitologia'])->name('ornitologia');

/*solo para contenido statico*/
Route::view('nosotros', 'nosotros')->name('nosotros');

//Auth::routes();
Auth::routes();
Route::get('/logout', function(){
    Auth::logout();
    //return Redirect::to('login');
    return redirect('login');
 });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::apiResource('area',AreaController::class);
Route::get('/getArea/{id}',[AreaController::class,'getArea'])->name('getArea');
Route::get('/getAreas',[AreaController::class,'getAreas'])->name('getAreas');

//carta presentacion
Route::resource('carta', CartaPresentacionController::class);

//PDF
Route::post('generarpdf', [CartaPresentacionController::class,'generatePDF'])->name('carta.generarpdf');
