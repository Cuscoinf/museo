<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AreaController;
use App\Http\Controllers\CartaPresentacionController;
use App\Http\Controllers\FormacionAcademicaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvestigadorController;
use App\Http\Controllers\RoleController;
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
Route::resource('formacion-academica', FormacionAcademicaController::class);

Route::resource('investigador', InvestigadorController::class);
Route::put('updateuser/{user}',[InvestigadorController::class,'updateUser'])->name('updateuser');

Route::resource('roles', RoleController::class);
Route::apiResource('roles',RoleController::class);
Route::get('/asignar-roles/{id}', [RoleController::class, 'asignarRoles'])->name('asignar-roles');

Route::get('/getmenus',[RoleController::class,'getMenus'])->name('getmenus');
Route::get('/getmenuuser/{id}',[RoleController::class,'getMenuUser'])->name('getmenuuser');
Route::put('actualizarpermiso/{menuuser}',[RoleController::class,'actualizarPermiso'])->name('actualizarpermiso');

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
