@extends('layouts.layout')

@section('content')
<h1 class="mb-4">
        Blog -
        @if(request()->routeIs('posts.index'))  <!-- Verifica si es la página de inicio -->
            Todas las publicaciones
        @else
            Publicaciones de {{ request()->route('type') }}
        @endif
    </h1>

    @if($posts->count() > 0)
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                            <p class="font-italic">Tipo: {{ $post->type }}</p>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-info">Ver Detalles</a>
                            <!-- Eliminar formulario -->
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Paginación -->
        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
        </div>

    @else
        <div class="alert alert-info" role="alert">
            ¡Aún no hay publicaciones en esta categoría! Sé el primero en crear una.
        </div>
    @endif
@endsection
