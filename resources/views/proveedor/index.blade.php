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

						<!-- Content 
						-->

							 <div class="panel-body">
                            <div class="table-responsive">

										       <table class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
													    <tr>
														
														<th><h2><font color="green">Nombre</font></h2></th>
														<th><h2><font color="green">Correo</font></h2></th>
														<th><h2><font color="green">Ciudad</font></h2></th>
														<a href="{{ route('proveedor.create')}}" class="btn btn-success button small btn-block btn-lg pull-rigth"><i class="fa fa-plus fa-2x" aria-hidden="true"></i>&nbsp; Nuevo</a>


													</tr>
												</thead>
												<tbody>

													<tbody>
@foreach($prov as $pv)

	<div text-align="center">
	<h3><td><h4>{{ $pv->Nombre}}</h4></td></h3>
</div>
	<div text-align="center">
	<h3><td><h4>{{ $pv->Correo}}</h4></td></h3>
</div>
	<div text-align="center">
	<h3><td><h4>{{ $pv->Ciudad}}</h4></td></h3>
</div>

	<td></font>

	<a href="{{ route('proveedor.show',$pv->id)}}" class="btn btn-info  button small btn-block pull-rigth"><i class="fa fa-eye fa-2x fa-fw" aria-hidden="true"></i>&nbsp; &nbsp; Ver</a>

    </td>


	<td>
	<a class=" btn btn-warning button small btn-block pull-rigth" href="{{ route('proveedor.edit',$pv->id)}}"><i class="fa fa-pencil fa-2x fa-fw" aria-hidden="true"></i> Editar</a>



	</td>


</script>
	<td>
		<form action="{{ route('proveedor.destroy',$pv->id)}}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">

<button class="btn btn-danger button small  btn-block pull-rigth" onclick="myFunction()"><i class="fa fa-trash-o fa-2x fa-fw" aria-hidden="true"></i> Borrar</button>



		</form>
</td>

</tr>
@endforeach


</tbody>
</table>
<!--
-->
{!! $prov->render() !!}
	</div>
						</div>
						<br><br>



<a href="{{ url('/exportarProveedores')}}" class="btn btn-success button small  btn-lg pull-rigth" ><i class="fa fa-download" aria-hidden="true"></i>&nbsp; Exportar a Excel</a>
						</div>
						</div>

												</tbody>

											</table>
										</div>
											</table>
										</div>
									</section>
</div>

							</div>
</div>
</div></div></div></div>
       @endsection
