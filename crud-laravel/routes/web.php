<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [EventController::class, 'index']);
Route::get('/eventos/criar', [EventController::class, 'create'])->middleware('auth');
Route::get('/eventos/{id}', [EventController::class, 'show']);
Route::post('/eventos', [EventController::class, 'store']);


Route::get('/contato', [EventController::class, 'contato']);

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

