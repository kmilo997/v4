<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
     protected $fillable = [
        'id','Nombre', 'Telefono', 'Direccion','Correo','Ciudad'
    ];
}
