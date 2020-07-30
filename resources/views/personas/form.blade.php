<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control {{$errors->has('nombre')?'is-invalid':''}} " name="nombre" id="nombre" value="{{isset($persona->nombre)?$persona->nombre:old('nombre')}}">
{!! $errors->first('nombre','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Apellido_paterno" class="control-label">{{'Apellido Paterno'}}</label>
<input type="text" class="form-control {{$errors->has('apellido_paterno')?'is-invalid':''}}" name="apellido_paterno" id="apellido_paterno"  value="{{isset($persona->apellido_paterno)?$persona->apellido_paterno:old('apellido_paterno')}}">
{!! $errors->first('apellido_paterno','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Apellido_materno" class="control-label">{{'Apellido Materno'}}</label>
<input type="text" class="form-control  {{$errors->has('apellido_materno')?'is-invalid':old('apellido_materno')}}" name="apellido_materno" id="apellido_materno" value="{{isset($persona->apellido_materno)?$persona->apellido_materno:old('apellido_materno')}}">
{!! $errors->first('apellido_materno','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="edad" class="control-label">{{'Edad'}}</label>
<input type="text" class="form-control {{$errors->has('edad')?'is-invalid':''}}" name="edad" id="edad" value="{{isset($persona->edad)?$persona->edad:old('edad')}}">
{!! $errors->first('edad','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Ci" class="control-label">{{'Ci'}}</label>
<input type="text" class="form-control  {{$errors->has('ci')?'is-invalid':''}}" name="ci" id="ci" value="{{isset($persona->ci)?$persona->ci:old('ci')}}">
{!! $errors->first('ci','<div class="invalid-feedback">:message</div>') !!}
</div>
<input type="submit" class="btn btn-success" value=" {{$Modo=='crear' ? 'Agregar':'Modificar'}}">

<a href="{{ url('personas')}}"  class="btn btn-primary">Regresar</a>

