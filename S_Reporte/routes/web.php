<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DetailController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/reportes', function () {
        return view('reportes');
    })->name('reportes');
    Route::get('/detalles/{id}', function ($id) {
        return view('detail');
    })->name('detail');
    Route::get('/creportes', function () {
        return view('creportes');
    })->name('creportes');
    Route::get('/cdetalles/{id}', function ($id) {
        return view('cdetalles');
    })->name('cdetalles');


    Route::post('store-report', [ReportController::class, 'store']);
    Route::post('store-detail', [DetailController::class, 'store']);

});

