@extends('layouts.main')

@section('title')
    Menu
@endsection

@section('content')
    <h1>Menu</h1>

    <h2>Animais</h2>
    <a href="{{route('animais.create')}}">Registrar Animal</a>
    <br>
    <a href="{{route('animais.index')}}">Listar Animais</a>
    <br><br>
    <h2>Tratamentos</h2>
    <a href="{{route('tratamentos.create')}}">Iniciar um Tratamento</a>
    <br>
    <a href="{{route('tratamentos.index')}}">Ver Tratamentos</a>
    <br><br>
    <h2>Consultas</h2>
    <a href="{{route('consultas.create')}}">Marcar Consulta</a>
    <br>
    <a href="{{route('consultas.index')}}">Listar Consultas</a>

@endsection
