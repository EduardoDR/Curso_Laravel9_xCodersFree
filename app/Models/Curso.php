<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    /*Se especifica las unicas propiedades con las que será asignado el objeto, e ignora cualquier otra propiedad del objeto (u campos protegidos)
    El problema de esta linea de código es cuando el objeto tiene muchos campos, por ejemplo 30, habria que especificar cada uno de ellos*/
    //protected $fillable = ['name', 'descripcion', 'categoria'];

    /*Se espeficica los campos protegidos o los que no se deben modificar en a la base de datos al crear el objeto, e ignora los campos permitidos   
    Esta linea de código solventa el error de arriba*/
    //protected $guarded = ['status'];
    //Como en este ejemplo NO SE CUENTA CON UN CAMPO PROTEGIDO se puede especificar un array vacio
    protected $guarded = [];
}