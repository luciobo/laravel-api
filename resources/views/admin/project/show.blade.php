@extends('layouts.app')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-6 rounded-5 bg-success">
            <div class="d-flex justify-content-end p-4">
                <a class="" href="{{ route('admin.projects.index') }}">
                    <button type="button" class="btn btn-outline-light border-0 fs-3">
                        <i class="bi bi-x-circle"></i>
                    </button>
                </a>
            </div>
            <h1>{{ $project->name }} (#{{ $project->id }})</h1>
            <p class="l">{{ $project->description }}</p>
            <ul class="m-0">
                <li class="d-flex justify-content-center"><img class="w-25 py-2" src="{{ $project->cover_img }}"</li>
                <li><strong>Prezzo:</strong> {{ $project->github_link }}</li>
            </ul>
            <div class="d-flex justify-content-around p-3">
                <div>
                    <a class="" href="{{ route("admin.projects.edit", $project->id) }}">
                        <button type="button" class="btn btn-outline-light">modifica
                            <i class="bi bi-pen-fill ps-2"></i></i>
                        </button>
                    </a>
                </div>
                <div>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                        @csrf()
                        @method('delete')
                        <button class="btn btn-danger">Cancella
                            <i class="bi bi-trash3 ps-3"></i></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
