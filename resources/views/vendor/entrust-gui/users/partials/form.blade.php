<div class="col-md-1"></div>

<div class="col-md-10">

    <a class="btn btn-success button small btn-block btn-lg pull-rigth" href="{{ route('entrust-gui::users.index') }}"><span class="btn-label"><i class="fa fa-reply "></i></span>Listado</a>
    <br>



<div class="form-group" >

<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="name" class="form-control" id="name" placeholder="Nombre" name="name" value="{{ (Session::has('errors')) ? old('name', '') : $user->name }}">
</div>

<div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="direccion" class="form-control" id="direccion" placeholder="Direccion" value="{{ (Session::has('errors')) ? old('direccion', '') : $user->direccion }}" name="direccion" value="{{ (Session::has('errors')) ? old('direccion', '') : $user->direccion }}">
</div>

<div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="telefono" class="form-control" id="telefono" placeholder="Telefono" name="telefono" value="{{ (Session::has('errors')) ? old('telefono', '') : $user->telefono }}">
</div>



<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email">Email </label>
    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ (Session::has('errors')) ? old('email', '') : $user->email }}">
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <label for="password">Contraseña</label>
    <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
    @if(Route::currentRouteName() == 'entrust-gui::users.edit')
        <div class="alert alert-info">
          <span class="fa fa-info-circle"></span> Leave the password field blank if you wish to keep it the same.
        </div>
    @endif
</div>
@if(Config::get('entrust-gui.confirmable') === true)
<div class="form-group">
    <label for="password">Confirmar Contraseña</label>
    <input type="password" class="form-control" id="password_confirmation" placeholder="Confirmar Contraseña" name="password_confirmation">
</div>
@endif
@role('a')
<div class="form-group">
    <label for="roles">Roles</label>
    <select name="roles[]" id="roles" multiple class="form-control">

            <option selected="" value="2" >Cliente</option>

    </select>
    @endrole
</div>
