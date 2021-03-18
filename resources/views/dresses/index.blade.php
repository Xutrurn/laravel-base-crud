@extends('layouts.app')

@section('titolo','Elenco vestiti')

@section('content')
    <h1>Elenco vestiti</h1>
    <a href="{{ route('dresses.create') }}">Inserisci un vestito nuovo</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Colore</th>
                <th scope="col">Dettagli</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vestiti as $vestito)
            <tr>
                <th scope="row">{{ $vestito->id }}</th>
                <td>{{ ucfirst($vestito->name) }}</td>
                <td>{{ ucfirst($vestito->color) }}</td>
                <td><a href="{{ route('dresses.show', ['dress'=> $vestito->id]) }}">dettagli</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
