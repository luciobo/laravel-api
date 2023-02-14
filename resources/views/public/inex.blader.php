@extends('layouts.app')

@section('content')
<section class="bg-green">
    <div class="bg-jumbotron">
        ciao
    </div>
    <section class="bg-dark">
        <div class="container py-5">
            <div class="row g-4">
                @foreach ($comics as $comicsEl)
                    <div class="col-2">
                        <div class="card bg-dark text-light border-0 rounded-0">
                            <img src="{{ $comicsEl['thumb'] }}" class="card-img-top" alt="...">
                            <div class="card-body p-0 py-3">
                                <h3 class="card-title">{{ $comicsEl['title'] }}</h3>
                                <h5>Prezzo: {{ $comicsEl['price'] }}</h5>
                                <h6>Serie: {{ $comicsEl['series'] }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection