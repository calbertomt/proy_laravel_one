	
	
	<div class="form-group">
		<label class="control-label" for="srut">{{ 'Rut:' }}</label>
		<input class="form-control" type="text" name="srut" id="srut" 
		value="{{ isset($client->srut) ? $client->srut:'' }}">
	</div>

	<div class="form-group">
		<label class="control-label" for="sdiv">{{ 'Div:' }}</label>
		<input class="form-control" type="text" name="sdiv" id="sdiv" 
		value="{{ isset($client->sdiv) ? $client->sdiv:'' }}">
	</div>

	<div class="form-group">
		<label class="control-label" for="sfirstname">{{ '1er Nombre:' }}</label>
		<input class="form-control" type="text" name="sfirstname" id="sfirstname" 
	value="{{ isset($client->sfirstname) ? $client->sfirstname:'' }}">
	</div>

	<div class="form-group">
		<label class="control-label" for="ssecondname">{{ '2do Nombre:' }}</label>
		<input class="form-control" type="text" name="ssecondname" id="ssecondname" 
	value="{{ isset($client->ssecondname) ? $client->ssecondname:'' }}">
	</div>

	<div class="form-group">
		<label class="control-label" for="slastname">{{ 'Apellido Paterno:' }}</label>
		<input class="form-control" type="text" name="slastname" id="slastname" 
	value="{{ isset($client->slastname) ? $client->slastname:'' }}">
	</div>

	<div class="form-group">
		<label class="control-label" for="slastname2">{{ 'Apellido Materno:' }}</label>
		<input class="form-control" type="text" name="slastname2" id="slastname2" 
	value="{{ isset($client->slastname2) ? $client->slastname2:'' }}">
	</div>

	<div class="form-group">
		<label class="control-label" for="saddress">{{ 'Dirección:' }}</label>
		<input class="form-control" type="text" name="saddress" id="saddress" 
	value="{{ isset($client->saddress) ? $client->saddress:'' }}">
	</div>

	<div class="form-group">
		<label class="control-label" for="semail">{{ 'Correo:' }}</label>
		<input class="form-control" type="text" name="semail" id="semail" 
	value="{{ isset($client->semail) ? $client->semail:'' }}">
	</div>

	<div class="form-group">
		<label class="control-label" for="dbirthdate">{{ 'Fecha de Nacimiento:' }}</label>
		<input class="form-control" type="text" name="dbirthdate" id="dbirthdate" 
	value="{{ isset($client->dbirthdate) ? $client->dbirthdate:'' }}">
	</div>

	<input class="btn btn-success" type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">
	<a class="btn btn-primary" href="{{ url('clients') }}">Clientes</a>