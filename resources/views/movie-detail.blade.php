@extends('layout.main')

@section('content')

<main>
    <div class="container">
        <h1 class="text-center pb-5">{{ $movie->title }}</h1>

        <div class="card text-center">
            <div class="card-body">
                <p class="card-text">Titolo Originale: {{ $movie->original_title }}</p>
                <p class="card-text">Nazionalità: {{ $movie->nationality }}</p>
                <p class="card-text">Data di produzione: {{ $movie->date }}</p>
            </div>
        </div>
    </div>


</main>

@endsection
