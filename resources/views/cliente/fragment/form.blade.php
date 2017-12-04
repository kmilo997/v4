


<div class="form-group" >



{!! Form::label('id','NIT')!!}
{!! Form::number('id',null,['class '=> 'form-control '])!!}
</div>



<div class="form-group">



{!! Form::label('nombre','Nombre')!!}
{!! Form::text('nombre',null,['class'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('ciudad','Ciudad')!!}
{!! Form::text('ciudad',null,['class '=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('direccion','Direccion')!!}
{!! Form::text('direccion',null,['class '=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('telefono','Telefono')!!}
{!! Form::number('telefono',null,['class '=> 'form-control'])!!}
</div>


<div class="form-group">

{!! Form::label('email','email')!!}
{!! Form::text('email',null,['class '=> 'form-control'])!!}
</div>


<div class="form-group">

{!! Form::submit('Guardar',['class '=> ' form-group btn-block btn-lg btn btn-primary'])!!}
</div>



