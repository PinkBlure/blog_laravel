@extends('layouts.layout') <!-- Esto hereda de tu layout principal -->

@section('title', 'Panel de Administración') <!-- Esto cambia el título de la página -->

@section('content') <!-- Aquí empieza la sección del contenido único de la página -->
    <h1>Bienvenido al Panel de Administración</h1>
    <p>Esta página solo es accesible por administradores verificados.</p>
@endsection
