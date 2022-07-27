@extends('templates.layout')
@section('titulo', 'Review')
@section('body')

<div class="w-25 p-1">

    <h2 class="text-center">Review do curso {{ $curso->nome }}</h2>
    <br />
    <form action="{{ route('review.inserir', $curso->id) }}" method="post">
        @csrf

        <div class="form-outline mb-4">
            <input type="number" id="nota" name="nota" class="form-control" />
            <label class="form-label" for="nota">Nota</label>
        </div>

        <div class="form-outline mb-4">
            <input type="text" id="titulo" name="titulo" class="form-control" />
            <label class="form-label" for="titulo">Título</label>
        </div>

        <div class="form-outline mb-4">
            <textarea type="text" id="descricao" name="descricao" class="form-control"></textarea>
            <label class="form-label" for="descricao">Descrição</label>
        </div>

        <input type="submit" class="btn btn-primary btn-block mb-4" value="Cadastrar" />
    </form>
</div>
@endsection
