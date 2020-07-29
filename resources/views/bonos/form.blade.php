<div class="form-group">
<label for="Fecha" class="control-label">{{'Fecha'}}</label>
<input type="text" class="form-control {{$errors->has('apto')?'is-invalid':''}} " name="fecha" id="fecha" value="{{isset($bono->fecha)?$bono->nombre:old('fecha')}}">
{!! $errors->first('fecha','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Hora" class="control-label">{{'Hora'}}</label>
<input type="text" class="form-control {{$errors->has('hora')?'is-invalid':''}}" name="hora" id="hora"  value="{{isset($bono->hora)?$bono->hora:old('hora')}}">
{!! $errors->first('hora','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Entidad_Financiera" class="control-label">{{'Entidad Financiera'}}</label>
<input type="text" class="form-control  {{$errors->has('entidad_financiera')?'is-invalid':old('entidad_financiera')}}" name="entidad_financiera" id="entidad_financiera" value="{{isset($bono->entidad_financiera)?$bono->entidad_financiera:old('entidad_financiera')}}">
{!! $errors->first('entidad_financiera','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Codigo_habilitado" class="control-label">{{'Codigo Habilitado'}}</label>
<input type="text" class="form-control {{$errors->has('edad')?'is-invalid':''}}" name="habilitado_id" id="habilitado_id" value="{{isset($bono->habilitado_id)?$bono->habilitado_id:old('habilitado_id')}}">
{!! $errors->first('edad','<div class="invalid-feedback">:message</div>') !!}
</div>


<input type="submit" class="btn btn-success" value=" {{$Modo=='crear' ? 'Agregar':'Modificar'}}">

<a href="{{ url('habilitados')}}"  class="btn btn-primary">Regresar</a>
