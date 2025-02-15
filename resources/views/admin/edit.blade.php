@extends('layouts.layout')

@section('content')
    <h1>Editar Entrada</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}" required>

        <label for="body">Contenido</label>
        <textarea name="body" id="body" required>{{ $post->body }}</textarea>

        <button type="submit">Actualizar</button>
    </form>
@endsection
