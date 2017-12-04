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
													<th><h2><font color="green">ID </font></h2></th>
														
														<th><h2><font color="green">&nbsp;Producto</font></h2></th>
															<th><h2><font color="green">&nbsp;Unidades</font></h2></th>
																<th><h2><font color="green">&nbsp;Fecha</font></h2></th>
																<th><h2><font color="green">&nbsp;Total</font></h2></th>
																<th><h2><font color="green">&nbsp;Estado</font></h2></th>

</tr>
<a href="{{ route('pedido.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x " aria-hidden="true"></i>&nbsp;  Listado</a>

								




												</thead>

												<tbody>


												<tr><div text-align="center">
	<h3><td><h4>{{ $ped->id}}</h4></td></h3>

	</div>
	<div text-align="center">
<h3><td><h4>
@foreach($detalle as $d)


<h3><h4><?php 
print_r($d->producto);
 ?>


@endforeach 
</h4></td></h3>

	<h3><td><h4>	
@foreach($detalle as $d)


<h3><h4><?php 
print_r($d->cantidad);
 ?>

 
@endforeach 
</h4></td></h3>

	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $ped->created_at}}</h4></td></h3>

	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $ped->totalVenta}}</h4></td></h3>

	<h3><td><h4>
@if ($ped->tipo === 0)
    <h4><font color="orange"><i class="fa fa-clock-o "></i>&nbsp;Pendiente</font></h4>
@elseif ($ped->tipo === 1)
    <h4><font color="green"><i class="fa fa-check"></i>&nbsp;Completado</font></h4>
@elseif ($ped->tipo === 2)
    <h4><font color="red"><i class="fa fa-times"></i>&nbsp;Cancelado</font></h4>
@endif





	</h4></td></h3>


	</td>
	</tr>
	</table>
	</tbody>
	{!! $ped->body !!}
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
							</div>
</div>
</div></div></div></div>




@stop



    <!-- /Main -->

    <!-- Footer -->

    <!-- /Footer -->

    <!-- Copyright -->
