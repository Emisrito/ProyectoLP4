<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Empleado extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre_apellido',
        'dni',
        'fecha_nacimiento',
        'email',
        'telefono',
        'direccion',
        'rol',
        'estado',
        'hora_entrada',
        'hora_salida',
        'password'
    ];

    // Mutador para setear la contraseña hasheada
    public function setPasswordAttribute($value)
    {
        // Hashea el DNI antes de guardarlo como contraseña
        $this->attributes['password'] = Hash::make($this->dni);
    }
}
