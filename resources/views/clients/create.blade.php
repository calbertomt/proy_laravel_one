Sección para crear datos
<form action="{{ url('/clients') }}" method="post">
	{{-- Función Laravel; proporciona una llave de acceso token de seguridad. cuando hagamos el envio a store el mismo nos deje entrar --}}
	{{ csrf_field() }}

	<label for="srut">{{ 'Rut:' }}</label>
	<input type="text" name="srut" id="srut" value="">
	<br/>
	<label for="sdiv">{{ 'Div:' }}</label>
	<input type="text" name="sdiv" id="sdiv" value="">
	<br/>
	<label for="sfirstname">{{ '1er Nombre:' }}</label>
	<input type="text" name="sfirstname" id="sfirstname" value="">
	<br/>
	<label for="ssecondname">{{ '2do Nombre:' }}</label>
	<input type="text" name="ssecondname" id="ssecondname" value="">
	<br/>
	<label for="slastname">{{ 'Apellido Paterno:' }}</label>
	<input type="text" name="slastname" id="slastname" value="">
	<br/>
	<label for="slastname2">{{ 'Apellido Materno:' }}</label>
	<input type="text" name="slastname2" id="slastname2" value="">
	<br/>
	<label for="saddress">{{ 'Dirección:' }}</label>
	<input type="text" name="saddress" id="saddress" value="">
	<br/>
	<label for="semail">{{ 'Correo:' }}</label>
	<input type="text" name="semail" id="semail" value="">
	<br/>
	<label for="dbirthdate">{{ 'Fecha de Nacimiento:' }}</label>
	<input type="text" name="dbirthdate" id="dbirthdate" value="">
	<br/>
	<input type="submit" value="Aceptar">

</form>