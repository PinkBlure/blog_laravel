<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'contraseña', 'verificado'];

    protected $hidden = ['contraseña']; // Ocultar la contraseña en los resultados.
}
