<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Luis";
    $array = [1,2,3,4,5];

    return view('welcome',
         [
            'nome' => $nome,
            'array' => $array
        ]);
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('produtos', ['busca' => $busca]);
});

Route::get('/produtos/{id}', function ($id) {
    return view('produto', ['id' => $id]);
});

