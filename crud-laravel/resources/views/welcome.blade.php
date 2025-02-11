@extends('layouts.main')
@section('title', 'LRM Eventos')
@section('content')

<div id="search-container" class="col-md-12">
       <h1>Busque um evento</h1>
       <form action="/" method="GET">
              <input type="text" id="search" name="search" class="form-control" placeholder="Procurar um evento">
       </form>
</div>

<div id="events-container" class="col-md-12">
       @if($search)
       <h2>Buscando por: {{ $search }}</h2>

       @else
       <h2>Próximos eventos</h2>
       <p class="subtitle">Veja os eventos dos próximos dias</p>
       @endif
       <div id="cards-container" class="row">
              @foreach($events as $event)
                     <div class="card col-md-3">
                            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title}}">
                            <div class="card-body">
                                   <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                                   <h5 class="card-title">{{ $event->title }} </h5>
                                   <p class="card-participantes">{{ count($event->users) }} participante(s)</p>
                                   <a href="/eventos/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                            </div>
                     </div>
              @endforeach
              @if (count($events) == 0 && $search)
                     <h3>Não foi possível encontrar nenhum evento com '{{ $search }}'! <br> <a href="/">Ver todos</a></h3>
              @elseif(count($events) == 0)
                     <h3>Não há eventos disponíveis!</h3>
              @endif
       </div>
</div>


@endsection 

