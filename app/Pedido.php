<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
     protected $fillable = [
        'id', 'fecha','producto','cliente','unidades','total','tipo'
    ];
}
