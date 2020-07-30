<div class="form-group">
<label for="Apto" class="control-label">{{'Apto'}}</label>
<input type="text" class="form-control {{$errors->has('apto')?'is-invalid':''}} " name="apto" id="apto" value="{{isset($habilitado->apto)?$habilitado->apto:old('apto')}}">
{!! $errors->first('apto','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Descripcion" class="control-label">{{'Descripcion'}}</label>
<input type="text" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" name="descripcion" id="descripcion"  value="{{isset($habilitado->descripcion)?$habilitado->descripcion:old('descripcion')}}">
{!! $errors->first('descripcion','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Codigo Persona" class="control-label">{{'Codigo Persona'}}</label>
<input type="text" class="form-control {{$errors->has('persona_id')?'is-invalid':''}}" name="persona_id" id="persona_id"  value="{{isset($habilitado->persona_id)?$habilitado->persona_id:old('persona_id')}}">
{!! $errors->first('persona_id','<div class="invalid-feedback">:message</div>') !!}
</div>


<input type="submit" class="btn btn-success" value=" {{$Modo=='crear' ? 'Agregar':'Modificar'}}">

<a href="{{ url('habilitados')}}"  class="btn btn-primary">Regresar</a>