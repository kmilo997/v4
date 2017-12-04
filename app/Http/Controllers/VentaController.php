<?php

namespace App\Http\Controllers;

use Riazxrazor\LaravelSweetAlert\LaravelSweetAlert;
use App\Venta;
use App\Product;
use App\Cliente;
use App\User;
use App\Http\Requests;
use App\detalle_venta;
use App\Http\Requests\VentaRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VentaController extends Controller
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



  public function index(){
        $vent=Venta::orderBy('id','DESC')->paginate(4);
    	return view('venta.index',compact('vent'));
    }


    public function create(){
        $producto =Product::all();
        $cliente =Cliente::all();
         $user =User::all();
        return view(('venta.create'),compact('producto','cliente','user'));
    }

public function store(Request $request){
    $vent = new Venta;

    $vent->totalVenta=$request->totalVenta;
   
  $vent->save();


$idV= DB::table('ventas')->max('id');


for($x = 0; $x < $request->cantidadarticulos; $x++) {
    
$dv= new detalle_venta;

$dv->cantidad=$request->cantidad[$x];
$h = $dv->cantidad;
$dv->total=$request->precio_u[$x];
$dv->id=$idV;
$dv->producto=$request->nombre[$x];

  
$dv->save();

 

}


LaravelSweetAlert::setMessage([
                        'title' => 'Completado!',
                        'text' => 'Se ha registrado correctamente la venta',
                        'type' => 'success',
                        'showConfirmButton' =>true
                    ]);


 return redirect()->route('venta.index');
}



public function edit($id){
    $vent = Venta::find($id);
    $producto = Product::all();
     $cliente =Cliente::all();
        return view('venta.edit',compact('vent','producto','cliente'));
    }


public function show($id){
    $idV= DB::table('ventas')->max('id');


      //  $detalle = DB::table('detalle_ventas')->where('id', '=', $id)->get();
     $detalle = detalle_venta::where('id', '=', $id)->get();
    

    $vent = Venta::find($id);
 // $detalle = detalle_venta::find($id);
        return view('venta.show',compact('vent','detalle'));
    }



public function update(VentaRequest $request,$id){
$vent = Venta::find($id);
   $vent->id = $request->id;

$vent->producto = $request->producto;
$vent->cliente = $request->cliente;
$vent->unidades = $request->unidades;
$vent->total = $request->total;
$vent->save();

LaravelSweetAlert::setMessage([
                        'title' => 'Completado!',
                        'text' => 'Se actualizado correctamente',
                        'type' => 'success',
                        'showConfirmButton' =>true
                    ]);


    return redirect()->route('venta.index');


}





    public function destroy($id){
        $vent = Venta::find($id);
        $vent->delete();



LaravelSweetAlert::setMessage([
                        'title' => 'Completado!',
                        'text' => 'Se eliminado correctamente',
                        'type' => 'success',
                        'showConfirmButton' =>true
                    ]);


    	 return redirect()->route('venta.index');

    }





}
