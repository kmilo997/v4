@extends('inicio2')

@section('titulo')

            <li ><a href="#"><em class="fa fa-smile-o ">&nbsp;</em> Cotizacion</a></li>
            <li ><a href="{{route('pedido.index')}}"><em class="fa fa-handshake-o">&nbsp;</em> Pedidos</a></li>
              <li class="active"><a href="/perfil2"><em class="fa fa-cog">&nbsp;</em> Perfil</a></li>
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
														<th><h2><font color="green">&nbsp;&nbsp;&nbsp; Nombre&nbsp;&nbsp;</font></h2></th>
														<th><h2><font color="green">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></h2></th>
														<th><h2><font color="green"> Direccion</font> </h2></th>
														<th><h2><font color="green"> Telefono</font> </h2></th>
														
</tr>






												</thead>

												<tbody>


												<tr><div text-align="center">
	<h3><td><h4>{{ Auth::user()->id}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ Auth::user()->name}}</h4></td></h3>
	<h3><td><h4>&nbsp;&nbsp;{{ Auth::user()->email}}</h4></td></h3>
	<h3><td><h4>&nbsp;&nbsp;{{ Auth::user()->direccion}}</h4></td></h3>
	<h3><td><h4>&nbsp;&nbsp;{{ Auth::user()->telefono}}</h4></td></h3>
	
	</td>
	</tr>
	</table>
	</tbody>
	
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




@stop



    <!-- /Main -->

    <!-- Footer -->

    <!-- /Footer -->

    <!-- Copyright -->
