@extends('layouts.app')

@section('content')
<section class="bg-green">
<div class="text-center text-primary pt-4">
    <h1>Lista prgetti</h1>
</div>
    <section class="">
        <div class="container py-5">
            <div class="row g-4">
                @foreach ($project as $project)
                    <div class="col-2">
                        <div class="card text-center">
                            <img src="{{ $project['cover_img'] }}" class="card-img-top" alt="...">
                            <div class="card-body p-0 py-3">
                                <h3 class="card-title">{{ $project['name'] }}</h3>
                                <h5>Descrizione: {{ $project['description'] }}</h5>
                                <h5>GitHub Link: {{ $project['github_link'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection