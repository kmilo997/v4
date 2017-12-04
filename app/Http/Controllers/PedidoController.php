<?php

namespace App\Http\Controllers;


use App\Pedido;
use App\Product;
use App\Cliente;
use App\detalle_pedido;
use App\Http\Requests;
use App\Http\Requests\PedidoRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class PedidoController extends Controller
{

    public function getArticuloByCodigo($codigo)
    {
             
        $articulo=DB::table('products')->where('id', $codigo)->get(['id','nombre', 'minimo',
             'precio_venta', 'fecha_vencimiento']);
        if(count($articulo)>0){
            $answer=array(
                "datos" => $articulo,
                "code" => 200
            ); 
        }else{
        $answer=array(
            "error" => 'No existen datos con ese codigo.',
            "code" => 600
        ); 
    }
         return response()->json($answer);
        
    }





public function limpiar(){
  
    DB::table('pedidos')->where('tipo', '!=', 0)->delete();
    return redirect()->route('pedido.index');
    }




  public function index(){
    $a = Auth::user()->name;
        $ped=Pedido::where('cliente',$a)->orderBy('id','DESC')->paginate(4);
        
    	return view('pedido.index',compact('ped'));
    }


    public function create(){
        $producto =Product::all();
    
        return view(('pedido.create'),compact('producto'));
    }

public function store(PedidoRequest $request){
    $ped = new Pedido;
$ped->cliente=Auth::user()->name;
$ped->totalVenta=$request->totalVenta;
$ped->tipo=0;
 $ped->save();
$idV= DB::table('pedidos')->max('id');
for($x = 0; $x < $request->cantidadarticulos; $x++) {
    
$dv= new detalle_pedido;

$dv->cantidad=$request->cantidad[$x];
$h = $dv->cantidad;
$dv->total=$request->precio_u[$x];
$dv->id=$idV;
$dv->producto=$request->nombre[$x];

  
$dv->save();
}
 
return redirect()->route('pedido.index')->with('info','El pedido fue registrado');
}



public function edit($id){
    $ped = Pedido::find($id);
    $producto = Product::all();
     $cliente =Cliente::all();
        return view('pedido.edit',compact('ped','producto','cliente'));
    }


public function show($id){
    $ped = Pedido::find($id);
         $detalle = detalle_pedido::where('id', '=', $id)->get();
        return view('pedido.show',compact('ped','detalle'));
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


    return redirect()->route('pedido.index')->with('info','El pedido fue actualizado');
    
    
}





    public function destroy($id){
        $ped = Pedido::find($id);
        $ped->delete();
        
    	 return redirect()->route('pedido.index')->with('info','El pedido fue eliminado');
         
    }





}

