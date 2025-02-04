<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/eventos/criar', [EventController::class, 'create']);
Route::get('/contato', [EventController::class, 'contato']);
Route::get('/produtos', [EventController::class, 'produtos']);


/* Route::get('/produtos', function () {

    $busca = request('search');

    return view('produtos', ['busca' => $busca]);
});

Route::get('/produtos/{id}', function ($id) {
    return view('produto', ['id' => $id]);
}); */

