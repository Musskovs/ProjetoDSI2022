@extends('templates.layout')
@section('titulo', 'Review')
@section('body')

<div class="w-25 p-1">

    <h2 class="text-center">Review do curso {{ $curso->nome }} da(o) {{ $curso->instituicao }}</h2>
    <br />
    <form action="{{ route('review.inserir', $curso->id) }}" method="post">
        @csrf

        <div class="form-outline mb-4">
            <label for="nota">Quantas estrelas esse curso merece?</label>
            <div class="rate" id="nota">
                <input type="radio" id="star5" name="nota" value="5" />
                <label for="star5" title="5 estrelas">5 stars</label>
                <input type="radio" id="star4" name="nota" value="4" />
                <label for="star4" title="4 estrelas">4 stars</label>
                <input type="radio" id="star3" name="nota" value="3" />
                <label for="star3" title="3 estrelas">3 stars</label>
                <input type="radio" id="star2" name="nota" value="2" />
                <label for="star2" title="2 estrelas">2 stars</label>
                <input type="radio" id="star1" name="nota" value="1" />
                <label for="star1" title="1 estrela">1 star</label>
            </div>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="titulo">Descreva de maneira curta por que:</label>
            <input type="text" id="titulo" name="titulo" class="form-control" />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="descricao">Fique a vontade para dar mais detalhes:</label>
            <textarea type="text" id="descricao" name="descricao" class="form-control"></textarea>
        </div>

        <input type="submit" class="btn btn-primary btn-block mb-4" value="Cadastrar" />
    </form>
</div>
@endsection
