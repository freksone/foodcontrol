
<div class="form-group">
    <label for="Nombre" class="control-label" >{{'Nombre'}}</label>
    <input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}"  name="Nombre" id="Nombre"
    value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}"
    >
    {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}



</div>

<div class="form-group">
<label for="ApellidoPaterno" class="control-label">{{'Apellido Paterno'}}</label>
<input type="text" name="ApellidoPaterno" class="form-control {{$errors->has('ApellidoPaterno')?'is-invalid':''}}" id="ApellidoPaterno"
value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}"
>
{!! $errors->first('ApellidoPaterno','<div class="invalid-feedback">:message</div>') !!}
</div>



<div class="form-group">
<label for="ApellidoMaterno" class="control-label">{{'Apellido Materno'}}</label>
<input type="text" name="ApellidoMaterno" class="form-control {{$errors->has('ApellidoMaterno')?'is-invalid':''}}" id="ApellidoMaterno"
value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}"
>

{!! $errors->first('ApellidoMaterno','<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    <label for="Area" class="control-label">{{'Area'}}</label>
    <input type="text" class="form-control {{$errors->has('Area')?'is-invalid':''}}" name="Area" id="Area"
    value="{{isset($empleado->Correo)?$empleado->Correo:old('Area')}}"
    >
    {!! $errors->first('Area','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
<label for="Correo" class="control-label">{{'Correo'}}</label>
<input type="email" class="form-control {{$errors->has('Correo')?'is-invalid':''}}" name="Correo" id="Correo"
value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}"
>
{!! $errors->first('Correo','<div class="invalid-feedback">:message</div>') !!}
</div>


<div class="form-group">
<label for="Foto" class="control-label" >{{'Foto'}}</label>
<br/>
@if(isset($empleado->Foto))

<img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="200" >
@endif
<input type="file"  class="form-control {{$errors->has('Foto')?'is-invalid':''}}" name="Foto" id="Foto" value="" >
{!! $errors->first('Foto','<div class="invalid-feedback">:message</div>') !!}
</div>
<input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar' : 'Modificar'}}">
<a class="btn btn-primary" href="{{url('Empleados')}}">Regresar</a>
