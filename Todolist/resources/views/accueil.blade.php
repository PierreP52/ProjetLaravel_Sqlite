@extends('layout') <!-- Étend le layout principal -->

@section('content') <!-- Section content à remplir dans le layout -->
<div class="container mt-5">
    <h1 class="text-center">Bienvenue sur To-Do List</h1>
    
    <div class="text-center m-5"><!--Boutons qui renvoient au différentes page de l'API-->
        <a class="btn btn-primary btn-lg" href="/taches" role="button">Voir les Tâches</a>
        <a class="btn btn-success btn-lg" href="/ajout-tache" role="button">Ajouter une Tâche</a>
    </div>
</div>
@endsection