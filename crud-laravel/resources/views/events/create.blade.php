@extends('layouts.main')
@section('title', 'Criar eventos')
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie um evento</h1>
    <form action="/eventos" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Evento: </label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>

        <div class="form-group">
            <label for="title">Cidade: </label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>

        <div class="form-group">
            <label for="title">O evento é privado? </label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>

        <div class="form-group">
            <label for="title">Descrição: </label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do evento"></textarea>
        </div>

        <input type="submit" class="btn btn-primary" value="Criar evento">

    </form>
</div>

@endsection