<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;
    protected $table="personas";
    protected $primaryKey="id_persona";
    protected $fillable=['nombre','id_estadocivil','id_sexo','id_gradoacad','correo','password'];
}
