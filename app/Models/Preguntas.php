<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;
    protected $table = "preguntas";
    protected $primaryKey = "id_pregunta";
    protected $fillable = ['enunciado_pregunta'];
}
