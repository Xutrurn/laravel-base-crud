@extends('layouts.app')

@section('titolo','Gestione vestiti')

@section('content')
    
    <h1>Inserisci il tuo vestito</h1>

    

    <div class="container">
        <form method="post" action="{{ route('dresses.update',$vestito->id) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="inputNome">Nome vestito</label>
                <input type="text" class="form-control" name='name' id="inputNome" value="{{ $vestito->name }}">
            </div>
            <div class="form-group">
                <label for="inputColore">Colore</label>
                <input type="text" class="form-control" name='color' id="inputColore" value="{{ $vestito->color }}">
            </div>
            <div class="form-group">
                <label for="inputMisura">Misura</label>
                <input type="text" class="form-control" name='size' id="inputMisura" value="{{ $vestito->size }}">
            </div>
            <div class="form-group">
                <label for="inputPrezzo">Prezzo</label>
                <input type="text" class="form-control" name='price' id="inputPrezzo" value="{{ $vestito->price }}">
            </div>
            <div class="form-group">
                <label for="inputStagione">Stagione</label>
                <select class="form-control" name="season" id="inputStagione">
                    <option value="">-- Seleziona --</option>
                    <option value="estivo" {{ $vestito->season == 'estivo' ? 'selected=selected' : '' }}>Estivo</option>
                    <option value="primaverile" {{ $vestito->season == 'primaverile' ? 'selected=selected' : '' }}>Primaverile</option>
                    <option value="autunnale" {{ $vestito->season == 'autunnale' ? 'selected=selected' : '' }}>Autunnale</option>
                    <option value="invernale" {{ $vestito->season == 'invernale' ? 'selected=selected' : '' }}>Invernale</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputDescrizione">Descrizione</label>
                <textarea class="form-control" id="inputDescrizione" rows="3" name='description'>{{ $vestito->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Modifica dati</button>
        </form>
    </div>
            
@endsection
            
            
            
