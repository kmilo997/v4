@extends('layout2')

@section('content')

  
    <div class="banner_bottom_w3ls_info">
      <h3 class="agile_heading">pedidos</h3>
      <p>Aca prodremos agragar, eliminar, consultar y borr pedido</p>
     
    </div>
  </div>

<div class="agile_services">
		<div class="col-md-3 agile_services_img_wthree">
		</div>


<div class="col-md-9 agile_inner_grids ">

<h3 class="agile_heading two"><font color="green">Pedidos</h3>

	<div class="w3ls-markets-grid_top">

				<div class="col-md-7 w3ls-markets-grid">
				
					<div class="agileits-icon-grid">
					<div class="clearfix"> </div>


					<div class="inner">		
							</div>

						<!-- Content -->
						 
							<div class="wrapper">
								<div class="inner">

									
										
										<div class="table-wrapper">
										        <table>
												<thead>
													    <tr>
														<th><h2><font color="green"> ID </font></h2></th>
														<th><h2><font color="green">&nbsp;&nbsp;Fecha Pedido</font></h2></th>

														
													</tr>
												</thead>
												<tbody>
													
													<tbody>
@foreach($ped as $v)
<tr><div text-align="center">
	<h3><td><h4>{{ $v->id}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>&nbsp;&nbsp;&nbsp;{{ $v->fecha}}</h4></td></h3>
</div>

	<td></font>
   
	<a href="{{ route('pedido.show',$v->id)}}" class="btn btn-info  button small btn-block pull-rigth"><i class="fa fa-binoculars fa-2x fa-fw" aria-hidden="true"></i>&nbsp; Ver</a>
	 
    </td>





	
		<form action="{{ route('pedido.destroy',$v->id)}}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">





<td></font>
   
	@if ($v->tipo === 0)
    <a href="#" class="btn btn-warning  button small btn-block pull-rigth"><i class="	fa fa-clock-o fa-2x fa-fw" aria-hidden="true"></i>&nbsp;  Pendiente
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
       @endsection

