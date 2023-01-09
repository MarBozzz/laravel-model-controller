@extends('layout.main')

@section('content')

<main>
    <div class="container">
        <h1 class="text-center pb-5">Movies</h1>

        <div class="row text-center">
             @foreach ($movies as $movie)
                 <div class="col-4">
                    <a href="{{ route('movieDetail', $movie->id) }}" class="card mb-5 pb-5">
                         <div class="card-body">
                            <h2 class="card-title py-5">{{ $movie->title }}</h2>
                            <p class="card-text">Titolo Originale: {{ $movie->original_title }}</p>
                            <p class="card-text">Nazionalità: {{ $movie->nationality }}</p>
                            <p class="card-text">Data di produzione: {{ $movie->date }}</p>
                            <p class="card-text">Voto: {{ $movie->vote }}</p>
                         </div>
                    </a>
                 </div>

             @endforeach
        </div>
    </div>


</main>

@endsection
