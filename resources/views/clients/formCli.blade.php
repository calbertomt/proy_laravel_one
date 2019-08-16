	
	
	<div class="form-group">
		<label class="control-label" for="srut">{{ 'Rut:' }}</label>
		<input class="form-control {{ $errors->has('srut') ? 'is-invalid':'' }}" type="text" 
		name="srut" id="srut" 
		value="{{ isset($client->srut) ? $client->srut:old('srut') }}">
		{!! $errors->first('srut','<div class="invalid-feedback">:message</div>') !!}
	</div>

	<div class="form-group">
		<label class="control-label" for="sdiv">{{ 'Div:' }}</label>
		<input class="form-control {{ $errors->has('sdiv') ? 'is-invalid':'' }}" type="text" 
		name="sdiv" id="sdiv" 
		value="{{ isset($client->sdiv) ? $client->sdiv:old('sdiv') }}">
		{!! $errors->first('sdiv','<div class="invalid-feedback">:message</div>') !!}
	</div>

	<div class="form-group">
		<label class="control-label" for="sfirstname">{{ 'Primer Nombre:' }}</label>
		<input class="form-control {{ $errors->has('sfirstname') ? 'is-invalid':'' }}" type="text" 
		name="sfirstname" id="sfirstname" 
		value="{{ isset($client->sfirstname) ? $client->sfirstname:old('sfirstname') }}">
		{!! $errors->first('sfirstname','<div class="invalid-feedback">:message</div>') !!}
	</div>

	<div class="form-group">
		<label class="control-label" for="ssecondname">{{ 'Segundo Nombre:' }}</label>
		<input class="form-control" type="text" name="ssecondname" id="ssecondname" 
		value="{{ isset($client->ssecondname) ? $client->ssecondname:old('ssecondname') }}">
	</div>

	<div class="form-group">
		<label class="control-label" for="slastname">{{ 'Apellido Paterno:' }}</label>
		<input class="form-control {{ $errors->has('slastname') ? 'is-invalid':'' }}" type="text" 
		name="slastname" id="slastname" 
		value="{{ isset($client->slastname) ? $client->slastname:old('slastname') }}">
		{!! $errors->first('slastname','<div class="invalid-feedback">:message</div>') !!}
	</div>

	<div class="form-group">
		<label class="control-label" for="slastname2">{{ 'Apellido Materno:' }}</label>
		<input class="form-control" type="text" name="slastname2" id="slastname2" 
		value="{{ isset($client->slastname2) ? $client->slastname2:old('slastname2') }}">
	</div>

	<div class="form-group">
		<label class="control-label" for="saddress">{{ 'Dirección:' }}</label>
		<input class="form-control" type="text" name="saddress" id="saddress" 
		value="{{ isset($client->saddress) ? $client->saddress:old('saddress') }}">
	</div>

	<div class="form-group">
		<label class="control-label" for="semail">{{ 'Correo:' }}</label>
		<input class="form-control {{ $errors->has('semail') ? 'is-invalid':'' }}" type="text" 
		name="semail" id="semail" 
		value="{{ isset($client->semail) ? $client->semail:old('semail') }}">
		{!! $errors->first('semail','<div class="invalid-feedback">:message</div>') !!}
	</div>

	<div class="form-group">
		<label class="control-label" for="dbirthdate">{{ 'Fecha de Nacimiento:' }}</label>
		<input class="form-control {{ $errors->has('dbirthdate') ? 'is-invalid':'' }}" type="text" 
		name="dbirthdate" id="dbirthdate" 
		value="{{ isset($client->dbirthdate) ? $client->dbirthdate:old('dbirthdate') }}">
		{!! $errors->first('dbirthdate','<div class="invalid-feedback">:message</div>') !!}
	</div>

	<input class="btn btn-success" type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">
	<a class="btn btn-primary" href="{{ url('clients') }}">Clientes</a>