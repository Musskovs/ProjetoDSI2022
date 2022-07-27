@extends('templates/layout')

@section('titulo', 'Ver Reviews')

@section('body')

<h2>{{ $curso[0]->nome }}, {{ $curso[0]->instituicao }}</h2>
<br>

@foreach($curso[0]->reviews as $review)
    <div class="card">
        <h5 class="card-header">Nota: {{ $review->nota }}</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $review->titulo }}</h5>
            <blockquote class="blockquote mb-0">
                <p>{{ $review->descricao }}</p>
                <footer class="blockquote-footer">{{ $review->usuario->nome }}</footer>
            </blockquote>
        </div>
    </div>
    <br>
@endforeach

@endsection
