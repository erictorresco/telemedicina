<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_identificacion',
        'numero_identificacion',
        'nombres',
        'apellidos',
        'direccion',
        'fecha_nacimiento',
        'etnia',
        'sexo',
        'estado_civil',
        'escolaridad',
        'ocupacion',
        'zona_residencia',
        'departamento_residencia',
        'municipio_residencia',
        'telefono_fijo',
        'telefono_laboral',
        'telefono_celular',
        'email',
        'eps',
        'regimen',
    ];
}
