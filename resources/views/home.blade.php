@extends('layouts.main')

@section('title', 'Home')


@section('section')
    <link rel="stylesheet" href="/css/home.css">
    <div class="search-container">
        <h2>Search</h2>
        <form action="/" method="GET">
            <input type="text" name="search" id="search" placeholder="pesquisar...">
        </form>
    </div>

    <div class="event-container">
        @if ($search)
            <h2>Buscando por: {{$search}}</h2>
        @else
            <h2>Proximos eventos</h2>
        @endif
        <p>Veja os eventos proximos</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card">
                    <p class="card-date">{{ date('d/m/Y', strToTime($event->date))}}</p>
                    <img src={{$event->image ? "/img/events/" . $event->image : "images/event.jpeg"}} alt={{ $event->title }}>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <h5 class="card-participants">X participantes</h5>
                    <a class="card-link" href="/event/{{$event->id}}">Saiba mais</a>
                </div>
            @endforeach
            @if (count($events) == 0 && $search)
                <p>Não foi possivel encontrar nenhum evento com {{$search}}! <a href="/" class="ver-todos">Ver todos.</a></p>   
            @elseif (count($events) == 0)
                <p>Não ha eventos disponíveis</p>   
            @endif
        </div>
    </div>



@endsection
