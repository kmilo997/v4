<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_venta extends Model
{
  protected $fillable = [
        'id','producto', 'cantidad','total'  ];
}
