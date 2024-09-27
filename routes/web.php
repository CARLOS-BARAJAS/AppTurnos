<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ShitfController;
use App\Http\Controllers\ShitfManagementController;
use App\Models\Shitf;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/menu', [ClientController::class, 'menu'])->name('welcome');
Route::get('/client', [ClientController::class, 'index'])->name('client.index');
Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
Route::get('/client/edit/{client}', [ClientController::class, 'edit'])->name('client.edit');
Route::put('/client/update/{client}', [ClientController::class, 'update'])->name('client.update');
Route::get('/client/show/{client}', [ClientController::class, 'show'])->name('client.show');
Route::delete('/client/destroy/{client}', [ClientController::class, 'destroy'])->name('client.destroy');
  

Route::get('/turnos',[ShitfController::class, 'index'])->name('shitf.index');   