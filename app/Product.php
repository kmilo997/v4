<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = [
        'id','nombre', 'minimo','precio_venta','fecha_vencimiento'  ];
}
