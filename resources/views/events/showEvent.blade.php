@extends('layouts.main')

@section('title', 'Event')

@section('section',)
<link rel="stylesheet" href="/css/show.css">
<div id="principal">
  <div id="left">
    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
    <h2>Detalhes do evento</h2>
    <p>{{ $event->description }}</p>
  </div>
  <div id="right">
    <h2>{{ $event->title }}</h2>
    <p><ion-icon name="location-outline" class="icones"></ion-icon>{{$event->city}}</p>
    <p><ion-icon name="people-outline" class="icones"></ion-icon>X Participantes</p>
    <p><ion-icon name="star-outline" class="icones"></ion-icon>Dono do evento</p>
    @if (isset($event['items']))
      <h6>O evento conta com:</h6>
      <ul>
        @foreach ($event->items as $item)
          <li>{{$item}}</li>
        @endforeach
      </ul>
    @endif
  </div>
</div>

@endsection