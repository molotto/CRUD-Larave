@extends('layouts.main')
@section('title', 'Editando: ' . $event->title)
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $event->title }}</h1>
    <form action="/eventos/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method ('PUT')
        <div class="form-group mb-3">
            <label for="title">Imagem do Evento: </label>
            <br>
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        
        <div class="form-group mb-3">
            <label for="title">Evento: </label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{ $event->title }}">
        </div>

        <div class="form-group mb-3">
            <label for="date">Data do evento: </label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
        </div>

        <div class="form-group mb-3">
            <label for="title">Cidade: </label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" value="{{ $event->city }}">
        </div>

        <div class="form-group mb-3">
            <label for="title">O evento é privado? </label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1" {{  $event->private == 1 ? "selected='selected'" : ""}}>Sim</option>
            </select>
        </div>
        
        <div class="form-group mb-3">
            <label for="title">Adicione itens de infraestrutura: </label>
            
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>

            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>

            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>

            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Food"> Open Food
            </div>

            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Cerveja"> Open Cerveja 

            </div>
        </div>

        <div class="form-group mb-3">
            <label for="title">Descrição: </label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do evento">{{ $event->description }}</textarea>
        </div>

        <input type="submit" class="btn btn-primary" value="Editar evento" style="margin-top: 10px;">

    </form>
</div>

@endsection