<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\TransversalidadController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\UserController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/transversalidad', function () {
        return view('dashboard');
    })->name('reportes');
    Route::get('/dashboard', function () {
        return view('reportes');
    })->name('dashboard');
    Route::get('/detalles/{id}', function ($id) {
        return view('detail');
    })->name('detail');
    Route::get('/creportes', function () {
        return view('creportes');
    })->name('creportes');
    Route::get('/cdetalles/{id}', function ($id) {
        return view('cdetalles');
    })->name('cdetalles');

    Route::get('/ctransver', function () {
        return view('ctransver');
    })->name('ctransver');

    Route::post('store-transv', [TransversalidadController::class,'store']);
    Route::post('store-report', [ReportController::class, 'store']);
    Route::post('store-detail', [DetailController::class, 'store']);
    Route::get('update-transv/{eje}',[TransversalidadController::class,'update'])->name('transversalidad.update');
    Route::patch('edit-transv/{eje}',[TransversalidadController::class,'edit'])->name('transversalidad.edit');


    Route::get('update-detalle/{id}',[DetailController::class,'update'])->name('detalle.update');
    Route::post('edit-detalle/{id}',[DetailController::class,'edit'])->name('detalle.edit');

    Route::get('update-reporte/{id}',[ReportController::class,'update'])->name('report.update');
    Route::post('edit-reporte/{id}',[ReportController::class,'edit'])->name('report.edit');
    Route::delete('delete-transv/{eje}',[TransversalidadController::class,'destroy'])->name('transversalidad.destroy');
    Route::delete('delete-reports/{id}',[ReportController::class,'destroy'])->name('reporte.destroy');

    Route::get('/download/{doc}/{id}',[DownloadController::class,'download']);
    Route::get('search',[ReportController::class,'search'])->name('reporte.search');
    Route::get('users',[UserController::class,'index'])->name('users.index');
    Route::get('cuser',[UserController::class,'create'])->name('users.create');
    Route::post('store-user', [UserController::class, 'store']);
    Route::get('update-user/{id}',[UserController::class,'update'])->name('users.update');
    Route::patch('edit-user/{id}',[UserController::class,'edit'])->name('user.edit');



});

