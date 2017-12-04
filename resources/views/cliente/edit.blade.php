@extends('layout2')


@section('titulo')


 <li>
                        <a    href="{{route('products.index')}}"><i class="fa fa-dashboard"></i> Producto</a>
                    </li>
                    <li>
                        <a href="{{route('pedidoAdmin.index')}}"><i class="fa fa-desktop"></i> Pedidos</a>
                    </li>
          <li>
                        <a class="active-menu"  href="{{route('cliente.index')}}"><i class="fa fa-bar-chart-o"></i> Clientes</a>
                    </li>
                    <li>
                        <a  href="{{route('venta.index')}}"><i class="fa fa-qrcode"></i> Ventas</a>
                    </li>
                    
                    <li>
                        <a href="{{route('proveedor.index')}}"><i class="fa fa-table"></i> Proveedores</a>
                    </li>
                    <li>

@endsection


@section('content')



    <div class="banner_bottom_w3ls_info">
      <h3 class="agile_heading">Clientes</h3>
      <p>Aca prodremos agregar, eliminar, consultar y borr Clientes</p>
     
    </div>
  </div>

<div class="agile_services">
		<div class="col-md-3 agile_services_img_wthree">
		</div>


<div class="col-md-7 agile_inner_grids ">

<h3 class="agile_heading two"><font color="green">EDITAR Clientes</h3>

	<div class="w3ls-markets-grid_top">

				<div class="col-md-10 w3ls-markets-grid">
				
					<div class="agileits-icon-grid">
					
<!-- Content -->
				
								<div class="inner">
									
								</div>
				
						
    <!-- Main -->
  <div class="wrapper">

							
								

<a href="{{ route('cliente.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x" aria-hidden="true"></i>&nbsp;  Listado</a>


	


@include('cliente.fragment.error')


{!! Form::model($cli,['route'=> ['cliente.update', $cli->id] , 'method' => 'PUT'])  !!}

@include('cliente.fragment.form')

{!! Form::close() !!}


<script>
function myFunction() {

	
    alert("Se ha editado el proveedor");
}

</script>


</div>





</div>
</div>
</div>

</div>
<div class="clearfix"> </div>
</div>
</div>

    <!-- Footer -->
       
    <!-- /Footer -->

    <!-- Copyright -->
      
      @stop





