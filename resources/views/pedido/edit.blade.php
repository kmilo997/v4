@extends('inicio2')

@section('titulo')

 <li ><a href="#"><em class="fa fa-smile-o ">&nbsp;</em> Cotizacion</a></li>
            <li class="active"><a href="{{route('pedido.index')}}"><em class="fa fa-handshake-o">&nbsp;</em> Pedidos</a></li>
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




<a href="{{ route('pedido.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x" aria-hidden="true"></i>&nbsp;  Listado</a>





@include('pedido.fragment.error')


{!! Form::model($ped,['route'=> ['pedido.update', $ped->id] , 'method' => 'PUT'])  !!}

@include('pedido.fragment.form')

{!! Form::close() !!}




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
