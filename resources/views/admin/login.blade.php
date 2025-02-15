@extends('layouts.layout') <!-- Esto hereda de tu layout principal -->

@section('title', 'Iniciar sesión como Administrador') <!-- Esto cambia el título de la página -->

@section('content') <!-- Aquí empieza la sección del contenido único de la página -->
    <h1>Iniciar sesión como Administrador</h1>

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" id="contraseña" required><br>

        <button type="submit">Iniciar sesión</button>
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection
