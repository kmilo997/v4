<?php

namespace App\Http\Controllers;


use App\Cliente;
use App\Http\Requests;
use App\Http\Requests\ClienteRequest;


class ClienteController extends Controller
{


function registar() {
    confirm("Se ha registrado correctamente ");
}




function eliminar() {
    confirm("Se ha eliminado correctamente ");
}





  public function index(){
        $cli=Cliente::orderBy('id','DESC')->paginate(4);
    	return view('cliente.index',compact('cli'));
    }


    public function create(){
        return view('cliente.create');
    }

public function store(ClienteRequest $request){
    $cli = new Cliente;
    $cli->id = $request->id;
$cli->nombre = $request->nombre;
$cli->ciudad = $request->ciudad;
$cli->telefono = $request->telefono;
$cli->direccion = $request->direccion;
$cli->email = $request->email;


$cli->save();


    return redirect()->route('cliente.index');
    registar();    
}



public function edit($id){
    $cli = Cliente::find($id);
        return view('cliente.edit',compact('cli'));
    }


public function show($id){
    $cli = Cliente::find($id);
        return view('cliente.show',compact('cli'));
    }



public function update(ProveedorRequest $request,$id){
$cli = Cliente::find($id);
    $cli->id = $request->id;
$cli->nombre = $request->nombre;
$cli->ciudad = $request->ciudad;
$cli->telefono = $request->telefono;
$cli->direccion = $request->direccion;
$cli->email = $request->email;


$cli->save();


    return redirect()->route('cliente.index');
    
    
}





    public function destroy($id){
        $cli = Cliente::find($id);
        $cli->delete();
        
    	 return redirect()->route('cliente.index');
         
    }





}
