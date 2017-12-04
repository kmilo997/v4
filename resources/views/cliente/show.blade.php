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

<div id="page-inner">
     <div class="row">
                <div class="col-md-12">
                   <div class="panel panel-default">
                        <div class="panel-heading">

      <h3 class="agile_heading">Pedidos</h3>
      <p>Aca prodremos agragar, eliminar, consultar y borr Pedidos</p>
     
    </div>
  </div>



 </div>


					
							</div>

						<!-- Content -->
		
						 <div class="panel-body">
                            <div class="table-responsive">
									
										       <table class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
													<tr>
													<th><h2><font color="green">NIT </font></h2></th>
														<th><h2><font color="green">Nombre </font></h2></th>
														<th><h2><font color="green">Ciudad</font></h2></th>
														<th><h2><font color="green"> Direccion</font></h2></th>
														<th><h2><font color="green"> Telefono</font> </h2></th>
															<th><h2><font color="green"> Email</font> </h2></th>
</tr>
<a href="{{ route('cliente.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x " aria-hidden="true"></i>&nbsp;  Listado</a>

								
							
									<div class="table-wrapper">
<a href="{{ route('cliente.edit', $cli->id)}}" class="btn btn-warning pull-rigth button small btn-block"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i>&nbsp; Editar</a>
														
													
												</thead>
												
												<tbody>


												<tr><div text-align="center">
	<h3><td><h4>{{ $cli->id}}</h4></td></h3>
	<h3><td><h4>{{ $cli->nombre}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>{{ $cli->ciudad}}</h4></td></h3>
	<h3><td><h4>{{ $cli->direccion}}</h4></td></h3>
	<h3><td><h4>{{ $cli->telefono}}</h4></td></h3>
	<h3><td><h4>{{ $cli->email}}</h4></td></h3>

	</td>
	</tr>
	</table>
	</tbody>
	{!! $cli->body !!}
	</div>
						</div>
						</div>
						</div>
						<div class="clearfix"> </div>
												</tbody>
												
											</table>
										</div>
											</table>
										</div>
									</section>
</div>
								<div class="clearfix"> </div>
							</div>
</div>
</div></div></div></div>




@stop


        
    <!-- /Main -->

    <!-- Footer -->
       
    <!-- /Footer -->

    <!-- Copyright -->




