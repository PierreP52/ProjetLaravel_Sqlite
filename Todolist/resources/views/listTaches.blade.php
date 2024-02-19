@extends('layout') <!-- Étend le layout principal -->

@section('content') <!-- Section content à remplir dans le layout -->
<!--Liste des taches ajouter-->
<div class="container m-5">
    <table class="table text">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($taches as $tache)
                <tr>
                    <td><a href="/tache/{{ $tache->id }}">{{ $tache->nom }}</a></td>
                    <td>{{ $tache->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection