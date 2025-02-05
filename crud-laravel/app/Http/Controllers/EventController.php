<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $events = Event::all();
    
        return view('welcome',['events' => $events]);
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

    public function store(Request $request) {
        $event = new Event;

        $event -> title = $request -> title;
        $event -> city = $request -> city;
        $event -> private = $request -> private;
        $event -> description = $request -> description;

        $event -> save();

        return redirect('/');
    }

}

