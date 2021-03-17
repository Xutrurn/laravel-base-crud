@extends('layouts.app')

@section('titolo','Elenco vestiti')

@section('content')
    <h1>Dettaglio vestito</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Colore</th>
                <th scope="col">Misura</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Stagione</th>
                <th scope="col">Descrizione</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $vestito->id }}</th>
                <td>{{ ucfirst($vestito->name) }}</td>
                <td>{{ ucfirst($vestito->color) }}</td>
                <td>{{ $vestito->size }}</td>
                <td>€ {{ $vestito->price }}</td>
                <td>{{ ucfirst($vestito->season) }}</td>
                <td>{{ ucfirst($vestito->description) }}</td>
            </tr>
        </tbody>
    </table>
@endsection
