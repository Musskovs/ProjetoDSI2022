@extends('templates/layout')

@section('titulo', 'Cursos')

@section('body')

    <table class="table table-hover">
        <tr>
            <th scope="col">Curso</th>
            <th scope="col">Tipo</th>
            <th scope="col">Instituição</th>
            <th scope="col">Modalidade</th>
            <th>Ver</th>
        </tr>
        
        @foreach($cursos as $curso)
            <tr>
                <td>{{ $curso->nome }}</td>
                <td>{{ $curso->tipo }}</td>
                <td>{{ $curso->instituicao }}</td>
                <td>{{ $curso->modalidade }}</td>
                <td><a href="{{route('curso.ver', $curso->id)}}" type="button" class="">Ver Reviews</a></td>
            </tr>
        @endforeach

    </table>

    <br/>

    <div class="d-flex flex-row-reverse">
        <a href="{{route('curso.inserir')}}" class="btn btn-primary">Inserir curso</a>
    </div>

@endsection