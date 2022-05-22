@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Home</h1>
@stop

@section('content')
<h1>Editando:{{$nome}} </h1>
    <form action="/edite/update/{{$id}}" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input type="hidden" name="id", value="{{$id}}">
            <input type="text" value="{{$nome}}" name="nome"  class="form-control" id="floatingInput" placeholder="Digite seu nome...">
            <label for="floatingInput">Nome</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" value="{{$email}}" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" value="{{$password}}" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <input type="submit" value="Cadastrar">
    </form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
