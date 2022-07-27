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



Route::post('/search_vin',[App\Http\Controllers\SearchController::class, 'search_vin'])->name('search.vin');
Route::post('/handover_check_list', [App\Http\Controllers\HandoverController::class, 'handover_check_list'])->name('handover.check');
Route::post('/pdi_check_list',[App\Http\Controllers\PdiController::class, 'pdi_check_list'])->name('pdi.check');
Route::post('/battery_inspection',[App\Http\Controllers\BatteryController::class, 'battery_inspection'])->name('battery.inspection');