<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Venta;
use App\Pedido;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
  public function index(){
      $products=Product::all();
      $vent=Venta::all();
      $ped=Pedido::all();
      $n = DB::table('pedidos')->count();
    return view('chart.index',compact('products','vent','ped'));
  }







}
