@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="" >
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>

<div id="events-container" class="col-md-12">
@if($search)
<h2>Buscando por : {{$search}} </h2>
@else
<h2>Próximos eventos</h2>
<p class="subtitle">veja os eventos dos próximos dias :</p>
@endif

<div id="cards-container" class="row">
    @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" >
            <div class="card-body">
                <div class="card-date">
                    {{date('d/m/Y' , strtotime($event->date))}}
                </div>
                <div class="card-title">{{$event->title}}</div>
                <p class="card-participants">{{count($event->users)}} 
                 
                 @if(count($event->users)== 1)
                 
                 participante
                
                 
                 @else
                 participantes
                
                 
                   
             
              
                 
                 @endif
               </p>
                <a href="/events/{{$event->id}}" class="btn btn-primary">Saber Mais</a>
            </div>
        </div>
    @endforeach
    @if(count($events) == 0 && $search)
        <p>Não foi possível encontrar nemhum evento relacionado a {{$search}} !! <a href="/">Ver Todos</a> </p>
    @elseif(count($events) == 0)
        <p>Não há eventos Disponíveis</p>
    @endif
</div>

</div>

@endsection
