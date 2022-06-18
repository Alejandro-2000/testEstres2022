<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administradores extends Model
{
    use HasFactory;
    protected $table="administradores";
    protected $primaryKey="id_admin";
    protected $fillable=['id_persona'];
}
