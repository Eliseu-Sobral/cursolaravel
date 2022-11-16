@extends('layouts.main')

@section('title', 'Dashbord')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos :</h1>
</div>
@if(count($events)>0)
@else
<p>Você ainda não tem eventos a serem mostrados <a href="/events/create">Criar um evento</a> </p>
@endif
@endsection
