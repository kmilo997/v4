@extends('layout2')

@section('titulo')


   <li ><a href="{{route('products.index')}}"><em class="fa fa-dropbox">&nbsp;</em> Productos</a></li>
            <li ><a href="{{route('venta.index')}}"><em class="fa fa-smile-o ">&nbsp;</em> Ventas</a></li>
            <li><a href="{{route('pedidoAdmin.index')}}"><em class="fa fa-handshake-o">&nbsp;</em> Pedidos</a></li>
            <li class="active"><a href="{{route('proveedor.index')}}"><em class="fa fa-users">&nbsp;</em> Proveedores</a></li>
            <li><a href="/admin/users"><em class="fa fa-users">&nbsp;</em> Clientes</a></li>
            <li><a href="perfil"><em class="fa fa-cog">&nbsp;</em> Perfil</a></li>

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
    <!-- Main -->


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















@include('proveedor.fragment.error')


{!! Form::open(['route'=> 'proveedor.store']) !!}

@include('proveedor.fragment.form')

{!! Form::close() !!}

<script>
function myFunction() {


    alert("Se ha registrado el proveedor");
}



</script>





</div>




</div>
</div>

</div>

</div>
<div class="clearfix"> </div>
</div>
</div>

<!-- /Main -->

    <!-- Footer -->

    <!-- /Footer -->

    <!-- Copyright -->
    @endsection
