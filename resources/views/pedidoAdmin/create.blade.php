@extends('layout2')

@section('titulo')


   <li ><a href="{{route('products.index')}}"><em class="fa fa-dropbox">&nbsp;</em> Productos</a></li>
            <li ><a href="{{route('venta.index')}}"><em class="fa fa-smile-o ">&nbsp;</em> Ventas</a></li>
            <li class="active"><a href="{{route('pedidoAdmin.index')}}"><em class="fa fa-handshake-o">&nbsp;</em> Pedidos</a></li>
            <li ><a href="{{route('proveedor.index')}}"><em class="fa fa-users">&nbsp;</em> Proveedores</a></li>
            <li><a href="{{route('products.index')}}"><em class="fa fa-users">&nbsp;</em> Clientes</a></li>
               <li><a href="/perfil"><em class="fa fa-cog">&nbsp;</em> Perfil</a></li>
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




<div class="wrapper">



 <div class="panel-body">
<a href="{{ route('pedidoAdmin.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x" aria-hidden="true"></i>&nbsp;  Listado</a>














@include('pedido.fragment.error')


{!! Form::open(['route'=> 'pedido.store']) !!}

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


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">

$( "#producto" ).change(function() {
calcular();
});

$( "#unidades" ).blur(function() {
calcular();
});

function calcular(){
var producto = $("#producto option:selected").html().split(" -:- ");
var nombre = producto[0];
var precio = producto[1];
var maximo = producto[2];
 var unidades = $("#unidades").val();
 if(unidades == ""){
alert("digite las unidades de "+nombre);
 //}else if(unidades > maximo || unidades < 1){
   }else if(unidades < 1){
   alert("digite minimo 1  y maximo "+maximo+" unidades de "+nombre);
 }else{
$("#total").val(precio*unidades);
}
}
</script>

<!-- /Main -->

    <!-- Footer -->

    <!-- /Footer -->

    <!-- Copyright -->
    @endsection
