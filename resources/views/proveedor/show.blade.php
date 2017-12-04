@extends('layout2')

@section('titulo')


   <li ><a href="{{route('products.index')}}"><em class="fa fa-dropbox">&nbsp;</em> Productos</a></li>
            <li ><a href="{{route('venta.index')}}"><em class="fa fa-smile-o ">&nbsp;</em> Ventas</a></li>
            <li><a href="{{route('pedidoAdmin.index')}}"><em class="fa fa-handshake-o">&nbsp;</em> Pedidos</a></li>
            <li class="active"><a href="{{route('proveedor.index')}}"><em class="fa fa-users">&nbsp;</em> Proveedores</a></li>
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
                        </li>>

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
							</div>

						<!-- Content -->

							<div class="panel-body">
                            <div class="table-responsive">

										       <table class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
													<tr>
													<th><h2><font color="green">NIT </font></h2></th>
														<th><h2><font color="green">Nombre </font></h2></th>
														<th><h2><font color="green">Telefono</font></h2></th>
														<th><h2><font color="green"> Direccion</font></h2></th>
														<th><h2><font color="green"> Correo</font> </h2></th>
															<th><h2><font color="green"> Ciudad</font> </h2></th>
</tr>
									<div class="table-wrapper">
<a href="{{ route('proveedor.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x " aria-hidden="true"></i>&nbsp;  Listado</a>



<a href="{{ route('proveedor.edit', $prov->id)}}" class="btn btn-warning pull-rigth button small btn-block" ><i class="fa fa-pencil fa-2x" aria-hidden="true"></i>&nbsp; Editar</a>




												</thead>

												<tbody>


												<tr><div text-align="center">
	<h3><td><h4>{{ $prov->id}}</h4></td></h3>
	<h3><td><h4>{{ $prov->Nombre}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>{{ $prov->Telefono}}</h4></td></h3>
	<h3><td><h4>{{ $prov->Direccion}}</h4></td></h3>
	<h3><td><h4>{{ $prov->Correo}}</h4></td></h3>
	<h3><td><h4>{{ $prov->Ciudad}}</h4></td></h3>

	</td>
	</tr>
	</table>
	</tbody>
	{!! $prov->body !!}
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
