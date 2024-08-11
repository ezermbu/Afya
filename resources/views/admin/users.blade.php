@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Patients et Docteurs</h1>

    <h2>Liste des Patients</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->nom }}</td>
                <td>{{ $patient->prenom }}</td>
                <td>{{ $patient->email }}</td>
                <td>{{ $patient->telephone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Liste des Docteurs</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Spécialité</th>
                <th>Email</th>
                <th>Téléphone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($docteurs as $docteur)
            <tr>
                <td>{{ $docteur->nom }}</td>
                <td>{{ $docteur->prenom }}</td>
                <td>{{ $docteur->specialite }}</td>
                <td>{{ $docteur->email }}</td>
                <td>{{ $docteur->telephone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
