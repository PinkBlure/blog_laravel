<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  // Método para mostrar todas las publicaciones
  public function index()
  {
    $posts = Post::latest()->paginate(5); // Obtiene los posts con paginación
    return view('index', compact('posts')); // Asegúrate de usar 'index' en vez de 'posts.index'
  }


  // Método para mostrar un formulario para crear nuevas publicaciones
  public function create()
  {
    return view('posts.create');
  }

  // Método para almacenar una nueva publicación
  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'body' => 'required|string',
      'type' => 'required|in:Reseñas de productos,Noticias de Apple,Consejos y trucos,Comparativas,Tutoriales,Accesorios Apple,Apple en el trabajo y productividad',
    ]);

    Post::create($request->all());
    return redirect()->route('posts.index');
  }

  // Método para mostrar una publicación específica
  public function show(Post $post)
  {
    return view('posts.show', compact('post'));
  }

  // Método para mostrar el formulario de edición de una publicación
  public function edit(Post $post)
  {
    return view('posts.edit', compact('post'));
  }

  // Método para actualizar una publicación existente
  public function update(Request $request, Post $post)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'body' => 'required|string',
      'type' => 'required|in:Reseñas de productos,Noticias de Apple,Consejos y trucos,Comparativas,Tutoriales,Accesorios Apple,Apple en el trabajo y productividad',
    ]);

    $post->update($request->all());
    return redirect()->route('posts.index');
  }

  // Método para eliminar una publicación
  public function destroy(Post $post)
  {
    $post->delete();
    return redirect()->route('posts.index');
  }

  // Método para filtrar publicaciones por tipo
  public function filterByType($type)
{
    $posts = Post::where('type', $type)->paginate(6);  // Cambiar el número de publicaciones por página si lo deseas
    return view('index', compact('posts'));
}

}
