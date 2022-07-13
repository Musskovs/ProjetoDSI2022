@extends('templates.layout')
@section('title', 'SignUp')
@section('body')
<h1>SignUp</h1>

<form method="post" action="{{ route('usuario.criar') }}">
    @csrf
    <input type="text" name="nome">
    <br>
    <input type="text" name="escolaridade">
    <br>
    <input type="text" name="email">
    <br>
    <input type="password" name="senha">
    <br>
    <input type="submit" value="Cadastrar">
</form>
@endsection
