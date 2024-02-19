@extends('layout') <!-- Étend le layout principal -->

@section('content') <!-- Section content à remplir dans le layout -->
<!--Détails des taches-->
<div class="container mt-5">
    <h1>Détails de la tâche</h1>
    <div class="container m-5">
        <h2>{{ $tache->nom }}</h2>
        <p>{{ $tache->description }}</p>
        <p>Date de création : {{ $tache->created_at }}</p>
        
    </div>
</div>
@endsection