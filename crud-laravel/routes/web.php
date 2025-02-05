<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/eventos/criar', [EventController::class, 'create']);
Route::get('/contato', [EventController::class, 'contato']);
