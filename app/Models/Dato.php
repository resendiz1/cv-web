<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'titulo', 'ubicacion', 'lugar_nacimiento', 'estado_civil', 'objetivo', 'imagen'];
}
