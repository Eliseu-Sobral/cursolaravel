@extends('layouts.main')

@section('title', 'Criar evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1 class="mt-5">Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3" >
            <label for="title">Imagem do evento:</label>
            <input type="file" class="form-control file mt-2" id="image" name="image" placeholder="coloque a foto do evento">
        </div>
        <div class="form-group mb-3" >
            <label for="title">Evento:</label>
            <input type="text" class="form-control mt-2" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group mb-3" >
            <label for="date">Data do evento :</label>
            <input type="date" class="form-control mt-2" id="date" name="date" placeholder="Nome do evento">
        </div>
        <div class="form-group mb-3">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control mt-2" id="city" name="city" placeholder="Local do evento">
        </div>
        <div class="form-group mb-3">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description"  class="form-control mt-2" placeholder="Como será o evento"></textarea>
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
                <option value="1">Sim</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">

    </form>
</div>

@endsection