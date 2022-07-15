@extends('templates.layout')
@section('title', 'SignUp')
@section('body')

<div class="w-25 p-1">

    <h2 class="text-center">Cadastro</h2>
    <br />
    <form method="post" action="{{ route('usuario.inserir') }}">
        @csrf

        <div class="form-outline mb-4">
            <input type="text" id="nome" class="form-control" />
            <label class="form-label" for="nome">Nome</label>
        </div>

        <div class="form-outline mb-4">
            <input type="text" id="escolaridade" class="form-control" />
            <label class="form-label" for="escolaridade">Escolaridade</label>
        </div>

        <div class="form-outline mb-4">
            <input type="text" id="papel" class="form-control" />
            <label class="form-label" for="papel">Papel</label>
        </div>

        <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control" />
            <label class="form-label" for="email">Email</label>
        </div>

        <div class="form-outline mb-4">
            <input type="password" id="senha" class="form-control" />
            <label class="form-label" for="senha">Senha</label>
        </div>

        <input type="submit" class="btn btn-primary btn-block mb-4" value="Cadastrar"/>
    </form>
</div>
@endsection
