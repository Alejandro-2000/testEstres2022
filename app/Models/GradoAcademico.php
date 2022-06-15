<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradoAcademico extends Model
{
    use HasFactory;
    protected $table = "grado_acad";
    protected $primaryKey = "id_gradoacad";
    protected $fillable = ['enunciado'];
}
