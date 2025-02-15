<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

  public function up()
  {
    Schema::create('posts', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->string('slug')->unique();
      $table->text('body');
      $table->enum('type', [
        'Reseñas de productos',
        'Noticias de Apple',
        'Consejos y trucos',
        'Comparativas',
        'Tutoriales',
        'Accesorios Apple',
        'Apple en el trabajo y productividad'
      ]);
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('posts');
  }
};
