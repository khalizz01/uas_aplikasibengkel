<?php

use App\Http\Controllers\DetailServicesController;
use App\Http\Controllers\JnsKendaraanController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\JnsServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->name('home');

//Route jnskendaraan
Route::get('/jnskendaraan', [JnsKendaraanController::class, 'index'])->name('jnsKendaraan.index');
Route::get('/jnskendaraan/add', [JnsKendaraanController::class, 'create'])->name('jnsKendaraan.create');
Route::post('/jnskendaraan/add', [JnsKendaraanController::class, 'store'])->name('jnsKendaraan.store');
Route::get('/jnskendaraan/edit/{id}', [JnsKendaraanController::class, 'edit'])->name('jnsKendaraan.edit');
Route::post('/jnskendaraan/edit/{id}', [JnsKendaraanController::class, 'update'])->name('jnsKendaraan.update');
Route::get('/jnskendaraan/delete/{id}', [JnsKendaraanController::class, 'destroy'])->name('jnsKendaraan.delete');

//Route detail_services
Route::get('/detailservices', [DetailServicesController::class, 'index'])->name('detailServices.index');
Route::get('/detailservices/add', [DetailServicesController::class, 'create'])->name('detailServices.create');
Route::post('/detailservices/add', [DetailServicesController::class, 'store'])->name('detailServices.store');
Route::get('/detailservices/edit/{id}', [DetailServicesController::class, 'edit'])->name('detailServices.edit');
Route::post('/detailservices/edit/{id}', [DetailServicesController::class, 'update'])->name('detailServices.update');
Route::get('/detailservices/delete/{id}', [DetailServicesController::class, 'destroy'])->name('detailServices.delete');

//Route kendaraan
Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
Route::get('/kendaraan/add', [KendaraanController::class, 'create'])->name('kendaraan.create');
Route::post('/kendaraan/add', [KendaraanController::class, 'store'])->name('kendaraan.store');
Route::get('/kendaraan/edit/{id}', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
Route::post('/kendaraan/edit/{id}', [KendaraanController::class, 'update'])->name('kendaraan.update');
Route::get('/kendaraan/delete/{id}', [KendaraanController::class, 'destroy'])->name('kendaraan.delete');

// Route pemilik
Route::get('/pemilik', [PemilikController::class, 'index'])->name('pemilik.index');
Route::get('/pemilik/add', [PemilikController::class, 'create'])->name('pemilik.create');
Route::post('/pemilik/add', [PemilikController::class, 'store'])->name('pemilik.store');
Route::get('/pemilik/edit/{id}', [PemilikController::class, 'edit'])->name('pemilik.edit');
Route::post('/pemilik/edit/{id}', [PemilikController::class, 'update'])->name('pemilik.update');
Route::get('/pemilik/delete/{id}', [PemilikController::class, 'destroy'])->name('pemilik.delete');

//Route Service
Route::get('/Service', [ServiceController::class, 'index'])->name('Service.index');
Route::get('/Service/add', [ServiceController::class, 'create'])->name('Service.create');
Route::post('/Service/add', [ServiceController::class, 'store'])->name('Service.store');
Route::get('/Service/edit/{id}', [ServiceController::class, 'edit'])->name('Service.edit');
Route::post('/Service/edit/{id}', [ServiceController::class, 'update'])->name('Service.update');
Route::get('/Service/delete/{id}', [ServiceController::class, 'destroy'])->name('Service.delete');

//Route JnsService
Route::get('/JnsService', [JnsServiceController::class, 'index'])->name('JnsService.index');
Route::get('/JnsService/add', [JnsServiceController::class, 'create'])->name('JnsService.create');
Route::post('/JnsService/add', [JnsServiceController::class, 'store'])->name('JnsService.store');
Route::get('/JnsService/edit/{id}', [JnsServiceController::class, 'edit'])->name('JnsService.edit');
Route::post('/JnsService/edit/{id}', [JnsServiceController::class, 'update'])->name('JnsService.update');
Route::get('/JnsService/delete/{id}', [JnsServiceController::class, 'destroy'])->name('JnsService.delete');
