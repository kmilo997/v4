@extends(Config::get('entrust-gui.layout'))

@section('heading', 'Edit User')

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

@section('content')<br><br>
<form action="{{ route('entrust-gui::users.update', $user->id) }}" method="post" role="form">
    <input type="hidden" name="_method" value="put">
    @include('entrust-gui::users.partials.form')
    <button type="submit" id="save" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-check"></i></span>{{ trans('entrust-gui::button.save') }}</button>
    <a class="btn btn-labeled btn-default" href="{{ route('entrust-gui::users.index') }}"><span class="btn-label"><i class="fa fa-chevron-left"></i></span>{{ trans('entrust-gui::button.cancel') }}</a>
</form>
@endsection
