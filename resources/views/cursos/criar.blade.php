@extends('templates.layout')
@section('titulo', 'Criar Curso')
@section('body')

<div class="w-25 p-1">

    <h2 class="text-center">Cadastro de Curso</h2>
    <br />
    <form action="{{ route('curso.inserir') }}" method="post">
        @csrf

        <div class="form-outline mb-4">
            <input type="text" id="nome" name="nome" class="form-control" />
            <label class="form-label" for="nome">Nome</label>
        </div>

         <div class="form-outline mb-4">
            <input type="text" id="instituicao" name="instituicao" class="form-control" />
            <label class="form-label" for="instituicao">Instituição de Ensino</label>
        </div>

        <div class="form-outline mb-4">
            <select id="tipo" name="tipo" class="form-select">
                <option selected>Escolha o tipo</option>
                <option value="Certificação">Certificação</option>
                <option value="Graduação">Graduação</option>
                <option value="Pós-Graduação">Pós-Graduação</option>
            </select>
        </div>

        <div class="form-outline mb-4">
            <select id="modalidade" name="modalidade" class="form-select">
                <option selected>Escolha a modalidade</option>
                <option value="EAD">EAD</option>
                <option value="Presencial">Presencial</option>
                <option value="Híbrido">Híbrido</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary btn-block mb-4" value="Cadastrar" />
    </form>
</div>
@endsection
