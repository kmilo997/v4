@extends('layout2')

@section('titulo')

<li class="active"><a href="{{route('products.index')}}"><em class="fa fa-dropbox">&nbsp;</em> Productos</a></li>
<li><a href="{{route('venta.index')}}"><em class="fa fa-smile-o ">&nbsp;</em> Ventas</a></li>
<li><a href="{{route('pedidoAdmin.index')}}"><em class="fa fa-handshake-o">&nbsp;</em> Pedidos</a></li>
<li ><a href="{{route('proveedor.index')}}"><em class="fa fa-users">&nbsp;</em> Proveedores</a></li>
<li><a href="/admin/users"><em class="fa fa-users">&nbsp;</em> Clientes</a></li>
   <li><a href="/perfil"><em class="fa fa-cog">&nbsp;</em> Perfil</a></li>
    <li>
<a href="{{ route('logout') }}"
    onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
             <em class="fa fa-power-off">&nbsp;</em>
    SALIR
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
</li>


@endsection


@section('content')

    <div id="page-inner">
     <div class="row">
                <div class="col-md-12">
                   <div class="panel panel-default">



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
														<th><h2><font color="green">ID </font></h2></th>
														<th><h2><font color="green">&nbsp;&nbsp;&nbsp; Producto&nbsp;&nbsp;</font></h2></th>
														<th><h2><font color="green">Cantidad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></h2></th>
														
														<th><h2><font color="green"> Precio venta</font> </h2></th>
														<th><h2><font color="green"> Vencimiento</font> </h2></th>
</tr>
<a href="{{ route('products.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x " aria-hidden="true"></i>&nbsp;  Listado</a>



									<div class="table-wrapper">
<a href="{{ route('products.edit', $product->id)}}" class="btn btn-warning pull-rigth button small btn-block"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i>&nbsp; Editar</a>


												</thead>

												<tbody>


												<tr><div text-align="center">
	<h3><td><h4>{{ $product->id}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $product->nombre}}</h4></td></h3>
	<h3><td><h4>&nbsp;&nbsp;{{ $product->minimo}}</h4></td></h3>

	<h3><td><h4>&nbsp;&nbsp;{{ $product->precio_venta}}</h4></td></h3>
	<h3><td><h4>&nbsp;&nbsp;{{ $product->fecha_vencimiento}}</h4></td></h3>
	</td>
	</tr>
	</table>
	</tbody>
	{!! $product->body !!}
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
