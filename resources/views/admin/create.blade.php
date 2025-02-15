@extends('layouts.layout')

@section('content')
    <h1>Crear Nueva Entrada</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title" required>

        <label for="body">Contenido</label>
        <textarea name="body" id="body" required></textarea>

        <button type="submit">Crear</button>
    </form>
@endsection
