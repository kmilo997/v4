@extends('layout3')

@section('content')
<header>

                            <div class="inner">
                                <h2>
 @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ha iniciado sesion correctamente, Redirigiendo en 5 segundos... 

                @if(Auth::user()->hasRole('admin'));




                    <META HTTP-EQUIV="REFRESH" CONTENT="3;{{ route('products.index')}}"> 
                    @elseif(Auth::user()->hasRole('cliente'));
                    <META HTTP-EQUIV="REFRESH" CONTENT="3;{{ route('pedido.index')}}"> 
@endif
                                
                            </div>
                        </header>

                            

<body> 
                <img src="C:\Users\Lenovo\Desktop\a\version3\public\img\car1.gif" width="100" height="100" />

 <img src="C:\Users\Lenovo\Desktop\a\version3\public\img\car1.gif" width="100" height="80" align="center" 
alt="Cargando"/>
</body> 
                        <!-- Content 
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
