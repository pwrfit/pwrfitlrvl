<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    use HasFactory;
    protected $fillable = ['IdUsuario','Rol','NombreCompleto','Correo','Contrasenna','Boletin','Membresia','Pago','Verificacion'];
    protected $table = "usuarios";
    public $timestamps = false;
}
