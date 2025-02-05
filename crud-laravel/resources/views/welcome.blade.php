@extends('layouts.main')
@section('title', 'LRM Eventos')
@section('content')

       @foreach ($events as $event)
              <p>{{ $event -> title }} -- {{ $event -> description}} -- {{ $event -> city}} </p>
       @endforeach


@endsection 

