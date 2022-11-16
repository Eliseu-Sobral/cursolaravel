@extends('layouts.main')

@section('title', 'Editando:' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1 class="mt-5">Editando: {{$event->title}}</h1>
    <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3" >
            <label for="title">Imagem do evento:</label>
            <input type="file" class="form-control file mt-2" name="image" id="image">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
        </div>
        <div class="form-group mb-3" >
            <label for="title">Evento:</label>
            <input type="text" class="form-control mt-2" id="title" name="title" value="{{$event->title}}">
        </div>
        <div class="form-group mb-3" >
            <label for="date">Data do evento :</label>
            <input type="date" class="form-control mt-2" id="date" name="date" value="{{$event->date->format('Y-m-d')}}">
        </div>
        <div class="form-group mb-3">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control mt-2" id="city" name="city" value="{{$event->city}}">
        </div>
        <div class="form-group mb-3">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description"  class="form-control mt-2" >{{$event->description}}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="title">Adicione elementos de infraestrutura:</label>
            <div class="form-group mt-2 mb-2">
                <input type="checkbox" name="itens[]" id="itens" value="cadeiras">Cadeiras
            </div>
            <div class="form-group mb-2">
                <input type="checkbox" name="itens[]" id="itens" value="palco">Palco
            </div>
            <div class="form-group mb-2">
                <input type="checkbox" name="itens[]" id="itens" value="cerveja grátis">Cerveja Grátis   
            </div>
            <div class="form-group mb-2">
                <input type="checkbox" name="itens[]" id="itens" value="open food">Open Food
            </div>
            <div class="form-group mb-2">
                <input type="checkbox" name="itens[]" id="itens" value="brindes">Brindes 
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="title">Evento privado ?</label>
            <select name="private" id="private" class="form-control mt-2">
                <option value="0">Não</option>
                <option value="1" {{ $event->private ==1 ? "selected='selected'" : ""}} >Sim</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Editar">

    </form>
</div>

@endsection