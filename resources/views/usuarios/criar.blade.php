@extends('templates.layout')
@section('title', 'SignUp')
@section('body')

<div class="w-25 p-1">

    <h2 class="text-center">Cadastro de Usuário</h2>
    <br />
    <form action="{{ route('usuario.inserir') }}" method="post">
        @csrf

        <div class="form-outline mb-4">
            <input type="text" id="nome" name="nome" class="form-control" />
            <label class="form-label" for="nome">Nome</label>
        </div>

        <div class="form-outline mb-4">
            <input type="text" id="escolaridade" name="escolaridade" class="form-control" />
            <label class="form-label" for="escolaridade">Escolaridade</label>
        </div>

        <div class="form-outline mb-4">
            <input type="text" id="papel" name="papel" class="form-control" />
            <label class="form-label" for="papel">Papel</label>
        </div>

        <div class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control" />
            <label class="form-label" for="email">Email</label>
        </div>

        <div class="form-outline mb-4">
            <input type="password" id="senha" name="senha" class="form-control" />
            <label class="form-label" for="senha">Senha</label>
        </div>

        <input type="submit" class="btn btn-primary btn-block mb-4" value="Cadastrar"/>
    </form>
</div>
@endsection
