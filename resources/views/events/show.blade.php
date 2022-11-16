@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="col-md-10 offset-md-1" id="tm-event">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{$event->image}}" class="img-fluid" alt="{{$event->title}}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$event->title}}</h1>
            <p class="event-city"><ion-icon name="location-outline"></ion-icon>Localização: {{$event->city}}</p>
            <p class="events-participants"><ion-icon name="people-outline"></ion-icon> {{count($event->users)}} Participantes </p>
            <p class="event-owner"><ion-icon name="star-outline"></ion-icon>Dono do evento : {{$eventOwner['name']}} </p>
            @if(!$hasParticipant)
            
            <form action="/events/join/{{$event->id}}" method="post">
                @csrf 
               
                <a href="/events/join/{{$event->id}}" 
                    class="btn btn-primary" 
                    id="event-submit"
                    onclick="event.preventDefault()
                    this.closest('form').submit();">
                    Quero participar do Evento
                </a>
            </form>
            @else
            <p class="already-joined-msg">Você já está participando deste evento</p>
            @endif
            
            
            <h3>O evento conta com:</h3>
            <ul id="itens-list">
                @if($event->itens != null)
                    @foreach($event->itens as $iten)
                    <li><ion-icon name="play-outline"></ion-icon><span>{{$iten}}</span></li>
                    @endforeach
                @endif
            </ul>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre o evento:</h3>
            <p class="event-description">{{$event->description}}</p>
        </div>    
    </div>
</div>

@endsection