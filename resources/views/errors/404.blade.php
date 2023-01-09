@extends('layout.main')

@section('content')

<main class="d-flex justify-content-center align-items-center flex-column">
    <h1>Errore 404</h1>
    <h2>
        {{ $exception->getMessage() }}
    </h2>
</main>

@endsection
