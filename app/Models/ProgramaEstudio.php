<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramaEstudio extends Model
{
    use HasFactory;
    protected $table="programa_estudios"; //metodo para indicar a que tabla debe buscar en la base de datos
    protected $primaryKey="id_programa";
    protected $fillable=['descripcion_carrera'];
}
