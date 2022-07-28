@extends('templates/layout')

@section('titulo', 'Ver Reviews')

@section('body')

<h2><strong>Reviews do curso {{ $curso[0]->nome }}, {{ $curso[0]->instituicao }}</strong></h2>
<br>

@if (count($curso[0]->reviews)>0)
    @foreach($curso[0]->reviews as $review)
        <div class="card">
            <h5 class="card-header">&#11088; {{ $review->nota }}</h5>
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
@else
    @if (session('usuario'))
        <h3>Ooops... Parece que este curso ainda não possui nenhum review. <a href="{{route('review.criar', $curso[0]->id)}}" type="button" class="">Criar</a>?</h3>
    @else
        <h3>Ooops... Parece que este curso ainda não possui nenhum review. <br/> Para deixar um review é preciso estar logado.</h3>
    @endif
    
@endif
@endsection
