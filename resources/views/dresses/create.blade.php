@extends('layouts.app')

@section('titolo','Gestione vestiti')

@section('content')
    
    <h1>Inserisci il tuo vestito</h1>

    <div class="container">
        <form method="post" action="{{ route('dresses.store') }}">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="inputNome">Nome vestito</label>
                <input type="text" class="form-control" name='name' id="inputNome">
            </div>
            <div class="form-group">
                <label for="inputColore">Colore</label>
                <input type="text" class="form-control" name='color' id="inputColore">
            </div>
            <div class="form-group">
                <label for="inputMisura">Misura</label>
                <input type="text" class="form-control" name='size' id="inputMisura">
            </div>
            <div class="form-group">
                <label for="inputPrezzo">Prezzo</label>
                <input type="text" class="form-control" name='price' id="inputPrezzo">
            </div>
            <div class="form-group">
                <label for="inputStagione">Stagione</label>
                <input type="text" class="form-control" name='season' id="inputStagione">
            </div>
            <div class="form-group">
                <label for="inputDescrizione">Descrizione</label>
                <textarea class="form-control" id="inputDescrizione" rows="3" name='description'></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Invia dati</button>
        </form>
    </div>
            
@endsection
            
            
            
