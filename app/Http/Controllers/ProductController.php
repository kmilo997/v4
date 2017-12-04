<?php

namespace App\Http\Controllers;
use Riazxrazor\LaravelSweetAlert\LaravelSweetAlert;
use Alert;
use App\Product;
use App\Http\Requests;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{

function alerta($tipo,$mensaje){

\Session::put($tipo,$mensaje);
}


    public function index(){
        $products=Product::orderBy('id','DESC')->paginate(4);
    	return view('products.index',compact('products'));
    }



    public function create(){
        return view('products.create');
    }

public function store(ProductRequest $request){
    $product = new Product;
$product->id = $request->id;
$product->nombre = $request->nombre;
$product->minimo = $request->minimo;

$product->precio_venta = $request->precio_venta;
$product->fecha_vencimiento = $request->fecha_vencimiento;

$product->save();

LaravelSweetAlert::setMessage([
                        'title' => 'Completado!',
                        'text' => 'Producto agregado',
                        'type' => 'success',
                        'showConfirmButton' =>true
                    ]);
    return redirect()->route('products.index');


}



public function edit($id){
    $product = Product::find($id);
        return view('products.edit',compact('product'));
    }


public function show($id){
    $product = Product::find($id);
        return view('products.show',compact('product'));
    }



public function update(ProductRequest $request,$id){
$product = Product::find($id);
$product->id = $request->id;
$product->nombre = $request->nombre;
$product->minimo = $request->minimo;

$product->precio_venta = $request->precio_venta;
$product->fecha_vencimiento = $request->fecha_vencimiento;

$product->save();

LaravelSweetAlert::setMessage([
                        'title' => 'Completado!',
                        'text' => 'El producto fue actualizado',
                        'type' => 'success',
                        'showConfirmButton' =>true
                    ]);
    return redirect()->route('products.index');


}





    public function destroy($id){
        $product = Product::find($id);
        $product->delete();

LaravelSweetAlert::setMessage([
                        'title' => 'Completado!',
                        'text' => 'Producto eliminado',
                        'type' => 'success',
                        'showConfirmButton' =>true
                    ]);
    	return redirect()->route('products.index');
    }





}
