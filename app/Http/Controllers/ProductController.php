<?php

namespace App\Http\Controllers;

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


    return redirect()->route('products.index')->with('success','Producto registrado');

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


    return redirect()->route('products.index')->with('info','El producto fue actualizado');


}





    public function destroy($id){
        $product = Product::find($id);
        $product->delete();

    	return redirect()->route('products.index')->with('info','Producto eliminado');
    }





}
