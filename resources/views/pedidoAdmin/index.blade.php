@extends('layout2')


@section('titulo')


   <li ><a href="{{route('products.index')}}"><em class="fa fa-dropbox">&nbsp;</em> Productos</a></li>
            <li ><a href="{{route('venta.index')}}"><em class="fa fa-smile-o ">&nbsp;</em> Ventas</a></li>
            <li class="active"><a href="{{route('pedidoAdmin.index')}}"><em class="fa fa-handshake-o">&nbsp;</em> Pedidos</a></li>
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
														<th><h2><font color="green"> ID </font></h2></th>
														<th><h2><font color="green">&nbsp;&nbsp;Fecha Pedido</font></h2></th>
														<th><h2><font color="green">&nbsp;&nbsp;Cliente</font></h2></th>
														<a href="{{ url('/exportarPedidos')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" ><i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i>&nbsp; Exportar a Excel</a>
														<!--
														-->
														<a href="{{ route('pedido.index')}}" class="btn btn-primary button small btn-block btn-lg pull-rigth" ><i class="fa fa-check-square-o fa-2x" aria-hidden="true"></i>&nbsp; Pedidos despachados</a>


													</tr>
												</thead>
												<tbody>

													<tbody>
@foreach($ped as $v)
<tr><div text-align="center">
	<h3><td><h4>{{ $v->id}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>&nbsp;&nbsp;&nbsp;{{ $v->created_at}}</h4></td></h3>
	<h3><td><h4>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;{{ $v->cliente}}</h4></td></h3>
	
</div>

	<td></font>

	<a href="{{ route('pedidoAdmin.show',$v->id)}}" class="btn btn-info  button small btn-block pull-rigth"><i class="fa fa-eye fa-2x fa-fw" aria-hidden="true"></i>&nbsp; Despachar </a>

    </td>






		<form action="{{ route('pedidoAdmin.destroy',$v->id)}}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">





<td></font>

	@if ($v->tipo === 0)
    <a href="#" class="btn btn-warning  button small disabled btn-block pull-rigth"><i class="	fa fa-clock-o fa-2x fa-fw" aria-hidden="true"></i>&nbsp;  Pendiente
@elseif ($v->tipo === 1)
    <a href="#" class="btn btn-success  button small btn-block pull-rigth"><i class="	fa fa-check fa-2x fa-fw" aria-hidden="true"></i>&nbsp;  Completado
@elseif ($v->tipo === 2)
    <a href="#" class="btn btn-danger  button small btn-block pull-rigth"><i class="	fa fa-remove fa-2x fa-fw" aria-hidden="true"></i>&nbsp;  Cancelado
@endif</a>

    </td>


		</form>
</td>

</tr>
@endforeach


</tbody>
</table>
{!! $ped->render() !!}
	</div>
						</div>
						
						</div>
						</div>
						
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
       @endsection
