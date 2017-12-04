<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta_articulo extends Model
{
    protected $fillable = [
        'id', 'fecha','producto','cliente','unidades','total'
    ];
}
