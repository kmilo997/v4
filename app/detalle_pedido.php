<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_pedido extends Model
{
    protected $fillable = [
        'id','producto', 'cantidad','total'  ];
}
