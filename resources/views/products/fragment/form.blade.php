

<div class="form-group">

{!! Form::label('id','codigo')!!}
{!! Form::number('id',null,['class'=> 'form-control','id'=>'idd'])!!}
</div>

<div class="form-group">

{!! Form::label('nombre','Nombre del producto')!!}
{!! Form::text('nombre',null,['class'=> 'form-control','id'=>'nombreProducto'])!!}
</div>

<div class="form-group">

{!! Form::label('minimo','Cantidad')!!}
{!! Form::number('minimo',null,['class'=> 'form-control','id'=>'cantidadProducto'])!!}
</div>

<div class="form-group">

{!! Form::label('fecha_vencimiento','Fecha de vencimiento')!!}
{!! Form::date('fecha_vencimiento',null,['class	'=> 'form-control','id'=>'fechaVencimiento'])!!}
</div>


<div class="form-group">

{!! Form::label('precio_venta','Precio venta')!!}
{!! Form::number('precio_venta',null,['class	'=> 'form-control','id'=>'precioVenta'])!!}
</div>

<div class="form-group">

{!! Form::submit('Guardar',['class '=> ' form-group btn-block btn-lg btn btn-primary','id'=>'producto'])!!}
</div>	