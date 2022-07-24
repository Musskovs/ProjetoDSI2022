@extends('templates/layout')

@section('titulo', 'Página de Livros - Ver')

@section('body')

@foreach($curso->reviews as $review)
    <div class="card">
        <h5 class="card-header">Nota: {{ $review->nota }}</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $review->titulo }}</h5>
            <blockquote class="blockquote mb-0">
                <p>{{ $review->descricao }}</p>
                <footer class="blockquote-footer">{{ $review->usuario }}</footer>
            </blockquote>
        </div>
    </div>
@endforeach

@endsection
