@extends('layouts.app')

@section('content')
    <div class="text-center">

        <h1 class="py-5">Nuovo Progetto</h1>

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                {{-- qui la rotta per ocllegare il form al comic controller  --}}
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
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
                    {{-- description --}}
                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <textarea name="description" cols="30" rows="3"
                            class="form-control @error('description') is-invalid @elseif(old('description')) is-valid @enderror"></textarea>

                        @error('description')
                            <div class="invalid-feedback">
                                hai toppato
                            </div>
                        @elseif(old('description'))
                            {{-- altrimenti se c'è un valore old per title, mostra un valid-feedback --}}
                            <div class="valid-feedback">
                                Bravo
                            </div>
                        @enderror
                    </div>
                    {{-- immage --}}
                    <div class="mb-3">
                        <label class="form-label">Immagine</label>
                        <input type="text"
                            class="form-control @error('cover_img') is-invalid @elseif(old('cover_img')) is-valid @enderror"
                            name="cover_img">

                        @error('cover_img')
                            <div class="invalid-feedback">
                                hai toppato
                            </div>
                        @elseif(old('cover_img'))
                            {{-- altrimenti se c'è un valore old per title, mostra un valid-feedback --}}
                            <div class="valid-feedback">
                                Bravo
                            </div>
                        @enderror
                    </div>

                    {{-- lionk github --}}
                    <div class="mb-3">
                        <label class="form-label">Link GitHub</label>
                        <input type="text"
                            class="form-control @error('github_link') is-invalid @elseif(old('github_link')) is-valid @enderror"
                            name="github_link">

                        @error('github_link')
                            <div class="invalid-feedback">
                                hai toppato
                            </div>
                        @elseif(old('github_link'))
                            {{-- altrimenti se c'è un valore old per title, mostra un valid-feedback --}}
                            <div class="valid-feedback">
                                Bravo
                            </div>
                        @enderror
                    </div>
                    {{-- button add project --}}
                    <button class="btn btn-primary" type="submit">Aggiungi Progetto</button>
                </form>
            </div>
        </div>
    </div>
@endsection
