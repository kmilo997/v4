<?php

namespace App\Http\Controllers;


use App\Pedido;
use App\Product;
use App\detalle_pedido;
use App\Cliente;
use App\Http\Requests;
use App\Http\Requests\PedidoRequest;



class PedidoAdminController extends Controller
{



 public function index(){
        $ped=Pedido::where('tipo','=','0')->paginate(4);
        return view('pedidoAdmin.index',compact('ped'));
    }


 

    public function create(){
        $producto =Product::all();
        $cliente =Cliente::all();
        return view(('pedidoAdmin.create'),compact('producto','cliente'));
    }

public function store(PedidoRequest $request){
    $ped = new Pedido;
    $id_producto = $request->producto;
    $unidades = $request->unidades;

    $product = Product::find($id_producto);
    $product->minimo -= $unidades;
    $product->save();

$ped->id = $request->id;
$ped->fecha = $request->fecha;
$ped->producto = $id_producto;
$ped->cliente = $request->cliente;
$ped->unidades = $unidades;
$ped->total = $request->total;
$ped->tipo = 0;

$ped->save();

    return redirect()->route('pedidoAdmin.index');
    registar();
  
    
}

public function despachar($id,$tipo){
    $ped = Pedido::find($id);
    $cantidad = $ped->unidades;
    
    $ped->tipo = $tipo; 
    $ped->save();
  
        return redirect()->route('pedidoAdmin.index');

    
    }

public function edit($id){
    $ped = Pedido::find($id);
    $producto = Product::all();
    $ped->tipo = 1;
     $cliente =Cliente::all();
        return view('pedidoAdmin.edit',compact('ped','producto','cliente'));
    }


public function show($id){
    $ped = Pedido::find($id);
     $detalle = detalle_pedido::where('id', '=', $id)->get();
        return view('pedidoAdmin.show',compact('ped','detalle'));
    }
    


public function update(PedidoRequest $request,$id){
$ped = Pedido::find($id);
   $ped->id = $request->id;
$ped->fecha = $request->fecha;
$ped->producto = $request->producto;
$ped->cliente = $request->cliente;
$ped->unidades = $request->unidades;
$ped->total = $request->total;
$ped->tipo = $request->tipo;
$ped->save();


    return redirect()->route('pedidoAdmin.index');
    
    
}





    public function destroy($id){
        $ped = Pedido::find($id);
        $ped->delete();
        
    	 return redirect()->route('pedidoAdmin.index');
         
    }





}

