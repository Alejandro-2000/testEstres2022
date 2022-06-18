<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    use HasFactory;
    protected $table="respuestas";
    protected $primaryKey="id_respuesta";
    protected $fillable=['id_encuesta','id_pregunta','valor'];
}
