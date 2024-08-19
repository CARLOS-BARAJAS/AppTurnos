<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
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

Route::get('/client', [ClientController::class, 'index'])->name('client.index');
Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
