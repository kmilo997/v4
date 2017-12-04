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
                           
<a href="{{ route('pedido.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x" aria-hidden="true"></i>&nbsp;  Listado</a>



<div class="wrapper">


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
 <script src="{{asset('js/sweetalert.min.js')}}"></script>

   @include('sweet::alert')


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">

$( "#producto" ).change(function() {
calcular();
pro();
});

$( "#unidades" ).blur(function() {
calcular();
un();
});

function calcular(){
var producto = $("#producto option:selected").html().split(" -:- ");
var nombre = producto[0];
var precio = producto[1];
var maximo = producto[2];
 var unidades = $("#unidades").val();
  var producto = $("#producto").val();
   var total = $("#total").val();
   while(maximo==0){
    alert("No hay unidades existentes ");
    document.getElementById('producto').value = "0";
    document.getElementById('unidades').value = "";
    document.getElementById('total').value = "";
    back();
 }
 if(unidades == ""){
alert("digite las unidades de "+nombre +" (Maxima cantidad: " + maximo +" )");
 //}else if(unidades > maximo || unidades < 1){
   }else if(unidades < 1){
   alert("digite minimo 1  y maximo "+maximo+" unidades de "+nombre);
 }else{
$("#total").val(precio*unidades);
}
}

function pro(){
var producto = $("#producto option:selected").html().split(" -:- ");
var nombre = producto[0];
var precio = producto[1];
var maximo = producto[2];
 var unidades = $("#unidades").val();
 if(maximo <= 0){
alert("No hay unidades existentes ");

}
}

function un(){
var producto = $("#producto option:selected").html().split(" -:- ");
var nombre = producto[0];
var precio = producto[1];
var maximo = producto[2];
 var unidades = $("#unidades").val();

 var total = $("#total").val();
 if((unidades <= 0) || (unidades > maximo )){
alert("Verifique la cantidad la cantidad ingresada y la cantidad diponible");
document.getElementById('unidades').value = "";
document.getElementById('total').value = "";


}
}


</script>

<!-- /Main -->

    <!-- Footer -->

    <!-- /Footer -->

    <!-- Copyright -->
    @endsection
