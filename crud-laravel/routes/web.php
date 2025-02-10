<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/eventos/criar', [EventController::class, 'create']);
Route::get('/eventos/{id}', [EventController::class, 'show']);
Route::post('/eventos', [EventController::class, 'store']);


Route::get('/contato', [EventController::class, 'contato']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
