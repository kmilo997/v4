@extends(Config::get('entrust-gui.layout'))


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



              </div>

            <!-- Content -->

               <div class="panel-body">
                            <div class="table-responsive">

                           <table class="table table-striped table-bordered table-hover" id="dataTables-example">


                         <thead>
                              <tr>
                                <th><h2><font color="green">Nombre</font></h2></th>
                             <th><h2><font color="green">Email</font></h2></th>
                             <th><h2><font color="green">Acciones</font></h2></th>
                            <a class="btn btn-success button small btn-block btn-lg pull-rigth" href="{{ route('entrust-gui::users.create') }}"><i class="fa fa-plus"></i>Añadir Cliente</a>


                          </tr>
                        </thead>

    <br>


  @foreach($users as $user)
    <tr>
      <h3><td><h4>{{ $user->name }}</h4></td></h3>
      <h3><td><h4>{{ $user->email }}</h4></td></h3>
      <td class="col-xs-3">
        <form action="{{ route('entrust-gui::users.destroy', $user->id) }}" method="post">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <a class="btn btn-labeled btn-warning" href="{{ route('entrust-gui::users.edit', $user->id) }}"><i class="fa fa-pencil fa-2x"></i></span>Editar</a>
          <button type="submit" class="btn btn-labeled btn-danger"><span class="btn-label"><i class="fa fa-trash fa-2x"></i></span>Borrar</button>
        </form>
      </td>
    </tr>
  @endforeach
</table>
<div class="text-center">
  {!! $users->render() !!}
</div>
@endsection
