@extends('layouts.main')

@section('title', 'Home')


@section('section')
    <link rel="stylesheet" href="/css/home.css">
    <div class="search-container">
        <h2>Search</h2>
        <form action="">
            <input type="text" name="search" id="search" placeholder="pesquisar...">
        </form>
    </div>

    <div class="event-container">
        <h2>Proximos eventos</h2>
        <p>Veja os eventos proximos</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card">
                    <p class="card-date">10/09/24</p>
                    <img src={{$event->image ? "/img/events/" . $event->image : "images/event.jpeg"}} alt={{ $event->title }}>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <h5 class="card-participants">X participantes</h5>
                    <a class="card-link" href="/event/{{$event->id}}">Saiba mais</a>
                </div>
            @endforeach
            @if (count($events) == 0)
                <p>Não ha eventos disponíveis</p>
            @endif
        </div>
    </div>



@endsection
