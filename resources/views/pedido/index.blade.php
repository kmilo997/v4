@extends('inicio2')

@section('titulo')

 <li ><a href="#"><em class="fa fa-smile-o ">&nbsp;</em> Cotizacion</a></li>
            <li class="active"><a href="{{route('pedido.index')}}"><em class="fa fa-handshake-o">&nbsp;</em> Pedidos</a></li>
              <li><a href="/perfil2"><em class="fa fa-cog">&nbsp;</em> Perfil</a></li>
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
														
														<th><h2><font color="green"> Total </font></h2></th>
														<th><h2><font color="green">&nbsp;&nbsp;Fecha Pedido</font></h2></th>
														
														<a href="{{ route('pedido.create')}}" class="btn btn-success button small btn-block btn-lg pull-rigth"><i class="fa fa-plus fa-2x" aria-hidden="true"></i>&nbsp; Nuevo</a>

													</tr>
												</thead>
												<tbody>

													<tbody>
@foreach($ped as $v)
<tr><div text-align="center">
	<h3><td><h4>{{ $v->id}}</h4></td></h3>
	</div>
	
	<div text-align="center">
	<h3><td><h4>{{ $v->totalVenta}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>&nbsp;&nbsp;&nbsp;{{ $v->created_at}}</h4></td></h3>
	</div>
	

	<td></font>

	<a href="{{ route('pedido.show',$v->id)}}" class="btn btn-info  button small btn-block pull-rigth"><i class="fa fa-eye fa-2x fa-fw" aria-hidden="true"></i>&nbsp; Ver</a>

    </td>






		<form action="{{ route('pedido.destroy',$v->id)}}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">





<td></font>

	@if ($v->tipo === 0)
    <a href="#" class="btn btn-warning  button small disabled btn-block pull-rigth"><i class="	fa fa-clock-o fa-2x fa-fw" aria-hidden="true"></i>&nbsp;  Pendiente
@elseif ($v->tipo === 1)
    <a href="#" class="btn btn-success  button small disabled btn-block pull-rigth"><i class="	fa fa-check fa-2x fa-fw" aria-hidden="true"></i>&nbsp;  Despachado
@elseif ($v->tipo === 2)
    <a href="#" class="btn btn-danger  button small disabled btn-block pull-rigth"><i class="	fa fa-times fa-2x fa-fw" aria-hidden="true"></i>&nbsp;  Cancelado
@endif</a>

    </td>


		</form>
</td>

</tr>
@endforeach


</tbody>
</table>
{!! $ped->render() !!}
<a href="{{ url('/limpiar')}}" class="btn btn-info  button small btn-block pull-rigth"><i class="fa fa-trash-o fa-2x fa-fw" aria-hidden="true"></i>&nbsp; Limpiar</a>
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
								 <script src="{{asset('js/sweetalert.min.js')}}"></script>

   @include('sweet::alert')
							</div>
</div>
</div></div></div></div>
       @endsection
