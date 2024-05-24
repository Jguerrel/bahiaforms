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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::post('/search_vin', [App\Http\Controllers\SearchController::class, 'search_vin'])->name('search.vin');
Route::post('/handover_check_list', [App\Http\Controllers\HandoverController::class, 'handover_check_list'])->name('handover.check');
Route::post('/handover_check_list_view', [App\Http\Controllers\HandoverController::class, 'handover_check_list_view'])->name('handover.check.view');

Route::post('/pdi_check_list', [App\Http\Controllers\PdiController::class, 'pdi_check_list'])->name('pdi.check');
Route::post('/pdi_check_list_view', [App\Http\Controllers\PdiController::class, 'pdi_check_list_view'])->name('pdi.check.view');

Route::post('/battery_inspection', [App\Http\Controllers\BatteryController::class, 'battery_inspection'])->name('battery.inspection');
Route::post('/battery_inspection_view', [App\Http\Controllers\BatteryController::class, 'battery_inspection_view'])->name('battery.inspection.view');


Route::post('/long_term_store', [App\Http\Controllers\LongtermController::class, 'long_term_store'])->name('long.term');
Route::post('/long_term_store_view', [App\Http\Controllers\LongtermController::class, 'long_term_store_view'])->name('long.term.view');

Route::post('/vehicleform', [App\Http\Controllers\VehicleFormsController::class, 'create'])->name('vehicleform.create');
Route::post('/vehicleform', [App\Http\Controllers\VehicleFormsController::class, 'store'])->name('vehicleform.store');

//Route::get('/home', [App\Http\Controllers\VehicleFormsController::class, 'index'])->name('home');

Route::get('/sedan', function () {
    return view('canvas/tablero1');
});
Route::get('/suv', function () {
    return view('canvas/tablero2');
});
Route::get('/firma1', function () {
    return view('canvas/tablero3');
});
Route::get('/firma2', function () {
    return view('canvas/tablero4');
});
Route::get('/firma3', function () {
    return view('canvas/tablero5');
});
Route::get('/pdi', function () {
    return view('canvas/tablero6');
});

//edit
Route::get('/long_term_edit/{id}', [App\Http\Controllers\LongtermController::class, 'edit'])->name('long.term.edit');
//update
Route::post('/long_term_update/{id}', [App\Http\Controllers\LongtermController::class, 'update'])->name('long.term.update');

// Ruta para dompdf
Route::post('download-pdf', [App\Http\Controllers\SearchController::class, 'downloadPdf'])->name('download-pdf');
