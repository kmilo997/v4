



<div class="form-group" ">



{!! Form::label('id','NIT')!!}
{!! Form::number('id',null,['class '=> 'form-control '])!!}
</div>



<div class="form-group">



{!! Form::label('Nombre','Nombre')!!}
{!! Form::text('Nombre',null,['class'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('Telefono','Telefono')!!}
{!! Form::number('Telefono',null,['class '=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('Direccion','Direccion')!!}
{!! Form::text('Direccion',null,['class '=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('Correo','Correo')!!}
{!! Form::text('Correo',null,['class '=> 'form-control'])!!}
</div>


<div class="form-group">

{!! Form::label('Ciudad','Ciudad')!!}
{!! Form::text('Ciudad',null,['class '=> 'form-control'])!!}
</div>


<div class="form-group">
 

{!! Form::submit('Guardar',['class '=> ' form-group btn-block btn-lg btn btn-primary'])!!}
</div>
</div>


