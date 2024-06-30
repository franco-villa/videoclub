<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Servicios2Controller;
use App\Http\Controllers\ServiciosController;


/*
$servicios = [
    ['titulo' => 'Servicios 01'],
    ['titulo' => 'Servicios 02'],
    ['titulo' => 'Servicios 03'],
    ['titulo' => 'Servicios 04'],
    ['titulo' => 'Servicios 05'] 
];
*/
Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('servicios', [ServiciosController::class, 'index'])->name('servicios.index');
Route::get('servicios/crear', [ServiciosController::class, 'create'])->name('servicios.create');
Route::post('servicios/store', [ServiciosController::class, 'store'])->name('servicios.store');

Route::get('servicios/{id}', [ServiciosController::class, 'show'])->name('servicios.show');

Route::get('servicios/{servicio}/editar', [ServiciosController::class, 'edit'])->name('servicios.edit');
Route::patch('servicios/{id}', [ServiciosController::class, 'update'])->name('servicios.update');
Route::delete('servicios/{servicio}', [ServiciosController::class, 'destroy'])->name('servicios.destroy');

//Route::get('servicios', 'Servicios2Controller@index')->name('servicios');
//Route::resource('servicios', Servicios2Controller::class)->except('index', 'show');
//Route::view('servicios', 'servicios', compact('servicios'))->name('servicios');

Route::view('contacto', 'contacto')->name('contacto');
//Route::post('contacto', 'ConactoController@store');
