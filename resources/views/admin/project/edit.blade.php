@extends('layouts.app')

@section('content')
    <div class="text-center">

        <h1 class="py-5">Progetto #{{ $project->id }}</h1>

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                {{-- qui la rotta per ocllegare il form al comic controller  --}}
                <form action="{{route('admin.projects.update', $project->id)}}" method="POST">
                    @csrf

                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="name" value="{{ $project->name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <textarea name="description" cols="30" rows="3" class="form-control">{{ $project->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Immagine</label>
                        <input type="text" class="form-control" name="cover_img" value="{{ $project->cover_img }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input type="text" step=".01" class="form-control" name="github_link" value="{{ $project->github_link }}">
                    </div>
                    <button class="btn btn-primary" type="submit">Modifica</button>
                </form>
            </div>
        </div>
    </div>
@endsection
