<?php

namespace App\Http\Controllers;

use Excel;
use App\Product;
use App\Proveedor;
use App\Pedido;

class ExcelController extends Controller
{



  public function exportarProductos(){


        Excel::create('Listado de Productos', function($excel) {

    $excel->sheet('Productos', function($sheet) {
    	$sheet->mergeCells('A1:E1');
    	$sheet->row(1,['Listado de productos']);
    	$sheet->row(2,['Codigo','Nombre','Cantidad','Precio','Fecha de vencimiento']);




        $pro=Product::all();
        $data = [];
        foreach ($pro as $p ){
        	$row=[];
        	$row[0] = $p->id;
        	$row[1] = $p->nombre;
        	$row[2] = $p->minimo;
        	$row[3] = $p->precio_venta;
        	$row[4] = $p->fecha_vencimiento;
        	$data = $row;
        	 $sheet->appendRow($row);
        }


    });

})->export('xls');

    }


  public function exportarProveedores(){


        Excel::create('Listado de Proveedores', function($excel) {

    $excel->sheet('Proveedores', function($sheet) {
    	$sheet->mergeCells('A1:F1');
    	$sheet->row(1,['Listado de Proveedores']);
    	$sheet->row(2,['Codigo','Nombre','Telefono','Direccion','Correo','Ciudad']);




        $pro=Proveedor::all();
        $data = [];
        foreach ($pro as $p ){
        	$row=[];
        	$row[0] = $p->id;
        	$row[1] = $p->Nombre;
        	$row[2] = $p->Telefono;
        	$row[3] = $p->Direccion;
        	$row[4] = $p->Correo;
        	$row[5] = $p->Ciudad;
        	$data = $row;
        	 $sheet->appendRow($row);
        }


    });

})->export('xls');

    }





  public function exportarPedidos(){


        Excel::create('Listado de Pedidos', function($excel) {

    $excel->sheet('Pedidos', function($sheet) {
    	$sheet->mergeCells('A1:G1');
    	$sheet->row(1,['Listado de Pedidos']);
    	$sheet->row(2,['Codigo','producto','cliente','unidades','Total','Estado','Fecha del pedido']);


 function estado($id){
	if($id == 0){
		return 'Pendiente';
	}elseif ($id == 1 ) {
		return 'Completado';
	}elseif ($id == 2 ) {
		return 'Cancelado';
	}
}

        $pro=Pedido::all();
        $data = [];
        foreach ($pro as $p ){
        	$row=[];
        	$row[0] = $p->id;
        	$row[1] = $p->producto;
        	$row[2] = $p->cliente;
        	$row[3] = $p->unidades;
        	$row[4] = $p->total;
        	$row[5] = estado($p->tipo);
        	$row[6] = $p->fecha;
        	$data = $row;
        	 $sheet->appendRow($row);
        }


    });

})->export('xls');

    }



      public function exportarVentas(){


            Excel::create('Listado de Ventas', function($excel) {

        $excel->sheet('Ventas', function($sheet) {
        	$sheet->mergeCells('A1:F1');
        	$sheet->row(1,['Listado de Pedidos']);
        	$sheet->row(2,['Codigo','Fecha','Producto','Cliente','Unidades','Total']);


     function estado($id){
    	if($id == 0){
    		return 'Pendiente';
    	}elseif ($id == 1 ) {
    		return 'Completado';
    	}elseif ($id == 2 ) {
    		return 'Cancelado';
    	}
    }

            $pro=Venta::all();
            $data = [];
            foreach ($vent as $p ){
            	$row=[];
            	$row[0] = $p->id;
            	$row[1] = $p->fecha;
            	$row[2] = $p->producto;
            	$row[3] = $p->unidades;
            	$row[4] = $p->total;
            	$data = $row;
            	 $sheet->appendRow($row);
            }


        });

    })->export('xls');

        }







}
