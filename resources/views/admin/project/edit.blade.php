@extends('layouts.app')

@section('content')
    <div class="text-center">

        <h1 class="py-5">comics #{{ $project->id }}</h1>

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                {{-- qui la rotta per ocllegare il form al comic controller  --}}
                <form action="/comics/{{ $project->id }}" method="POST">
                    @csrf

                    @method('PUT')

                    {{-- name --}}
                    <div class="mb-3">
                        <label class="form-label">Nome Progetto</label>
                        <input type="text"
                            class="form-control @error('name') is-invalid @elseif(old('name')) is-valid @enderror"
                            name="name">

                        @error('name')
                            <div class="invalid-feedback">
                                hai toppato
                            </div>
                        @elseif(old('name'))
                            {{-- altrimenti se c'è un valore old per title, mostra un valid-feedback --}}
                            <div class="valid-feedback">
                                Bravo
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <textarea name="description" cols="30" rows="3" class="form-control">{{ $comics->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Immagine</label>
                        <input type="text" class="form-control" name="thumb" value="{{ $comics->thumb }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input type="number" step=".01" class="form-control" name="price" value="{{ $comics->price }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">serie</label>
                        <input type="text" class="form-control" name="series" value="{{ $comics->series }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data prima vendita</label>
                        <input type="date" class="form-control" name="sale_date" value="{{ $comics->sale_date }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipologia</label>
                        <input type="text" class="form-control" name="type" value="{{ $comics->type }}">
                    </div>
                    <button class="btn btn-primary" type="submit">Modifica</button>
                </form>
            </div>
        </div>
    </div>
@endsection
