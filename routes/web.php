<?php

use App\Http\Controllers\DashbordController;
use App\Http\Controllers\MasiswaController;
use Illuminate\Contracts\Mail\Mailer;
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

Route::get('/', DashbordController::class);

Route::get('/masiswa', [MasiswaController::class, 'index'])->name('masiswa.index');
Route::get('/masiswa/create', [MasiswaController::class, 'create'])->name('masiswa.create');
Route::post('/masiswa', [MasiswaController::class, 'store'])->name('masiswa.store');
Route::get('/masiswa/{id}/edit', [MasiswaController::class, 'edit'])->name('masiswa.edit');
Route::put('/masiswa/{id}', [MasiswaController::class, 'update'])->name('masiswa.update');
Route::delete('/masiswa/{id}', [MasiswaController::class, 'destroy'])->name('masiswa.destroy');
