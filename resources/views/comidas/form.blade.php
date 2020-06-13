<div class="form-group {{ $errors->has('Comida') ? 'has-error' : ''}}">
    <label for="Comida" class="control-label">{{ 'Comida' }}</label>
    <input class="form-control" name="Comida" type="text" id="Comida" value="{{ isset($comida->Comida) ? $comida->Comida : ''}}" >
    {!! $errors->first('Comida', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Horario') ? 'has-error' : ''}}">
    <label for="Horario" class="control-label">{{ 'Horario' }}</label>
    <input class="form-control" name="Horario" type="text" id="Horario" value="{{ isset($comida->Horario) ? $comida->Horario : ''}}" >
    {!! $errors->first('Horario', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Area') ? 'has-error' : ''}}">
    <label for="Area" class="control-label">{{ 'Area' }}</label>
    <input class="form-control" name="Area" type="text" id="Area" value="{{ isset($comida->Area) ? $comida->Area : ''}}" >
    {!! $errors->first('Area', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
