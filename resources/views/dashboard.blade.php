@extends('layouts.main')

@section('title', 'Home')


@section('section')
    <link rel="stylesheet" href="/css/home.css">

    <div class="event-container">
        <h1>Veja os Seus eventos </h1>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card">
                    <p class="card-date">{{ date('d/m/Y', strToTime($event->date))}}</p>
                    <img src={{$event->image ? "/img/events/" . $event->image : "images/event.jpeg"}} alt={{ $event->title }}>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <h5 class="card-participants">X participantes</h5>
                    <a class="card-link buttom" href="/event/{{$event->id}}">Saiba mais</a>
                    <a class="card-edit buttom" href="/">Editar</a>
                    <a class="card-delete buttom" href="/">Excluir</a>
                </div>
            @endforeach
            @if (count($events) == 0)
                <p>Voce nao tem nenhum evento cadastrado. <a href="/event/create" class="ver-todos">Criar uma</a></p>
            @endif
        </div>
    </div>



@endsection
