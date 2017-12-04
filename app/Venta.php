<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
     protected $fillable = [
        'id','producto','cliente','unidades','total'
    ];
}
