<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuestas extends Model
{
    use HasFactory;
    protected $table="encuestas";
    protected $primaryKey="id_encuesta";
    protected $fillable=['id_docente','edad','anos_experiencia','antiguedad_tesvb','num_hijos','docente_compartido','tiempo_traslado','horas_semana'];
}
