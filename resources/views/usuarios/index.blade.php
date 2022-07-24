@extends('templates.layout')
@section('title', 'Login')
@section('body')

@if (session('error'))
{{ session('error') }}
@endif

<div class="w-25 p-1">

    <h2 class="text-center">Login</h2>
    <br />

    <form method="post" action="{{ route('usuario.login') }}">
        @csrf
        <div class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control" />
            <label class="form-label" for="email">Email</label>
        </div>

        <div class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control" />
            <label class="form-label" for="password">Senha</label>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block mb-4">Acessar</button>
        </div>

        <div class="text-center">
            <p>Ainda não possui uma conta? <a href="{{ route('usuario.criar') }}">Cadastrar</a></p>
        </div>
    </form>
</div>

@endsection
