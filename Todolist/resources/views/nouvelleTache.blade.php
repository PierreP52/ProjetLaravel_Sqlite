@extends('layout') <!-- Étend le layout principal -->

@section('content') <!-- Section content à remplir dans le layout -->
<!-- Ajout d'une nouvlle tache -->
<div class="container mt-5">
    <h1>Ajouter une nouvelle tâche</h1>
    <form class="container mt-5" action="/ajout-tache" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom de la tâche :</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de la tâche" required>
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <textarea class="form-control" id="description" name="description" placeholder="Description de la tâche" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

@endsection