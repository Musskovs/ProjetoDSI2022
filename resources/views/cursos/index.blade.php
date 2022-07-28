@extends('templates/layout')

@section('titulo', 'Cursos')

@section('body')

<table class="table table-hover">
    <tr>
        <th scope="col">&#11088;</th>
        <th scope="col">Curso</th>
        <th scope="col">Tipo</th>
        <th scope="col">Instituição</th>
        <th scope="col">Modalidade</th>
        <th></th>
        <th></th>
    </tr>

    @foreach($cursos as $curso)
    <tr>
        <td>{{ round($curso->reviews_avg_nota, 2) }}</td>
        <td>{{ $curso->nome }}</td>
        <td>{{ $curso->tipo }}</td>
        <td>{{ $curso->instituicao }}</td>
        <td>{{ $curso->modalidade }}</td>
        <td><a href="{{route('curso.ver', $curso->id)}}" type="button" class="">Ver Reviews</a></td>
        <td><a href="{{route('review.criar', $curso->id)}}" type="button" class="">Criar Review</a></td>
    </tr>
    @endforeach

</table>

<br />

@if(session('papelusuario')=='Admin')
    <div class="d-flex flex-row-reverse">
        <a href="{{route('curso.inserir')}}" class="btn btn-primary">Inserir curso</a>
    </div>
@endif

<div class="fixed-bottom"><p class="d-flex justify-content-center">Lembre-se, para deixar seu review é necessário estar logado!</p></div>
@endsection
