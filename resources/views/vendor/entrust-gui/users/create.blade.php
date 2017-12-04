@extends(Config::get('entrust-gui.layout'))

@section('heading', 'Create User')

@section('titulo')


   <li ><a href="{{route('products.index')}}"><em class="fa fa-dropbox">&nbsp;</em> Productos</a></li>
            <li ><a href="{{route('venta.index')}}"><em class="fa fa-smile-o ">&nbsp;</em> Ventas</a></li>
            <li><a href="{{route('pedidoAdmin.index')}}"><em class="fa fa-handshake-o">&nbsp;</em> Pedidos</a></li>
            <li ><a href="{{route('proveedor.index')}}"><em class="fa fa-users">&nbsp;</em> Proveedores</a></li>
            <li class="active"><a href="/admin/users"><em class="fa fa-users">&nbsp;</em> Clientes</a></li>
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
                        


<form action="{{ route('entrust-gui::users.store') }}" method="post" role="form">
    @include('entrust-gui::users.partials.form')
    <button type="submit" id="create" class="btn btn-success btn-block btn-primary"><span class="btn-label"><i class=" fa fa-save "></i></span>Guardar</button>

</form>
@endsection
