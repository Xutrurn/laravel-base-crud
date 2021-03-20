@extends('layouts.app')

@section('titolo','Elenco vestiti')

@section('content')
    <h1>Elenco vestiti</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <a href="{{ route('dresses.create') }}">Inserisci un vestito nuovo</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Colore</th>
                <th scope="col">Operazioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vestiti as $vestito)
            <tr>
                <th scope="row">{{ $vestito->id }}</th>
                <td>{{ ucfirst($vestito->name) }}</td>
                <td>{{ ucfirst($vestito->color) }}</td>
                <td><a href="{{ route('dresses.show', ['dress'=> $vestito->id]) }}" class="btn btn-info">dettagli</a>
                    <a href="{{ route('dresses.edit', ['dress'=> $vestito->id]) }}" class="btn btn-warning">modifica</a>
                    <form action="{{ route('dresses.destroy', $vestito->id) }}" method="post" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Cancella</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection
