<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $nome = "Luis";
        $array = [1,2,3,4,5];
    
        return view('welcome',
             [
                'nome' => $nome,
                'array' => $array
            ]);
    }

    public function create() {
        return view('events.create');
    }

    public function contato() {
        return view('events.contato');
    }

    public function produtos() {
        return view('events.produtos');
    }

}

