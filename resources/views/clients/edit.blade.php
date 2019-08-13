Sección para editar datos

<form action="" method="post">
	{{-- Función Laravel; proporciona una llave de acceso token de seguridad. cuando hagamos el envio a store el mismo nos deje entrar --}}
	{{ csrf_field() }}

	<label for="srut">{{ 'Rut:' }}</label>
	<input type="text" name="srut" id="srut" value="{{$client->srut}}">
	<br/>
	<label for="sdiv">{{ 'Div:' }}</label>
	<input type="text" name="sdiv" id="sdiv" value="{{$client->sdiv}}">
	<br/>
	<label for="sfirstname">{{ '1er Nombre:' }}</label>
	<input type="text" name="sfirstname" id="sfirstname" value="{{$client->sfirstname}}">
	<br/>
	<label for="ssecondname">{{ '2do Nombre:' }}</label>
	<input type="text" name="ssecondname" id="ssecondname" value="{{$client->ssecondname}}">
	<br/>
	<label for="slastname">{{ 'Apellido Paterno:' }}</label>
	<input type="text" name="slastname" id="slastname" value="{{$client->slastname}}">
	<br/>
	<label for="slastname2">{{ 'Apellido Materno:' }}</label>
	<input type="text" name="slastname2" id="slastname2" value="{{$client->slastname2}}">
	<br/>
	<label for="saddress">{{ 'Dirección:' }}</label>
	<input type="text" name="saddress" id="saddress" value="{{$client->saddress}}">
	<br/>
	<label for="semail">{{ 'Correo:' }}</label>
	<input type="text" name="semail" id="semail" value="{{$client->semail}}">
	<br/>
	<label for="dbirthdate">{{ 'Fecha de Nacimiento:' }}</label>
	<input type="text" name="dbirthdate" id="dbirthdate" value="{{$client->dbirthdate}}">
	<br/>
	<input type="submit" value="Aceptar">

</form>