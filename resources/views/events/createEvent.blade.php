@extends('layouts.main')

@section('title', 'Event')

@section('section')
    <link rel="stylesheet" href="/css/createEvent.css">
    <h1>Cadastro de eventos</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="image">Imagem</label>
        <input type="file" id="image" name="image">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" placeholder="Nome do evento">
        <label for="city">Cidade</label>
        <input type="text" name="city" id="city" placeholder="Local do evento">
        <label for="private">O evento é privado?</label>
        <select name="private" id="private">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
        <label for="description">Descriçao do evento</label>
        <textarea name="description" id="description" placeholder="o que vai acontecer no evento"></textarea>
        <label id="infra" for="items">Adicione itens de infraestrutura:</label>
        <div class="checkbox-container_">
            <p>Caderias</p>
            <input type="checkbox" name="items[]" value="Cadeiras">
        </div>
        <div class="checkbox-container_">
            <p>Open-food </p>
            <input type="checkbox" name="items[]" value="Open-food">
        </div>
        <div class="checkbox-container_">
            <p>Open-bar</p>
            <input type="checkbox" name="items[]" value="Open-bar">
        </div>
        <div class="checkbox-container_">
            <p>Palco</p>
            <input type="checkbox" name="items[]" value="Palco">
        </div>
        <div class="checkbox-container_">
            <p>Brindes</p>
            <input type="checkbox" name="items[]" value="Brindes">
        </div>
        <input type="submit" value="Salvar" class="submit">


    </form>


@endsection
