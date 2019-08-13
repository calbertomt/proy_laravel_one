Inicio(Despliegue de datos)

<table class="table table-light">
	<thead class="thead-light">
		<tr>
			<th>#</th>
			<th>RUT</th>
			<th>DIV</th>
			<th>1er Nombre</th>
			<th>2do Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Correo</th>
			<th>Direccion</th>
			<th>Fecha Nacimiento</th>
		</tr>
	</thead>
	
	<tbody>
	@foreach($clients as $client)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$client->srut}}</td>
			<td>{{$client->sdiv}}</td>
			<td>{{$client->sfirstname}}</td>
			<td>{{$client->ssecondname}}</td>
			<td>{{$client->slastname}}</td>
			<td>{{$client->slastname2}}</td>
			<td>{{$client->saddress}}</td>
			<td>{{$client->semail}}</td>
			<td>{{$client->dbirthdate}}</td>
			<td>
			
			<a href="{{ url('/clients/'.$client->id.'/edit') }}">
				Editar
			</a>	

			 | 

			<form method="post" action="{{ url('/clients/'.$client->id) }}">
				{{ csrf_field() }}
				{{method_field('DELETE')}}

				<button type="submit" onclick="return confirm('Esta seguro de Eliminar el Cliente?')">
					Eliminar
				</button>
				
			</form>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>