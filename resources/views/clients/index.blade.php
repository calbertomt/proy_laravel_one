@extends('layouts.app')

@section('content')
	<div class="container">

		@if(Session::has('Mensaje')){{
			Session::get('Mensaje')
		}}
		@endif

		<a href="{{ url('clients/create') }}" class="btn btn-success">Agregar Cliente</a>
		<br>
		<br>

		<table class="table table-light table-hover">
			<thead class="thead-light">
				<tr>
					<th>#</th>
					<th>RUT</th>
					<th>DIV</th>
					<th>Nombre</th>
					{{-- <th>2do Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th> --}}
					<th>Correo</th>
					<th>Direccion</th>
					<th>Fecha Nacimiento</th>
					<th></th>
				</tr>
			</thead>
			
			<tbody>
			@foreach($clients as $client)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$client->srut}}</td>
					<td>{{$client->sdiv}}</td>
					<td>{{$client->sfirstname}} {{$client->slastname}}</td>
					{{-- <td>{{$client->ssecondname}}</td>
					<td>{{$client->slastname}}</td>
					<td>{{$client->slastname2}}</td> --}}
					<td>{{$client->saddress}}</td>
					<td>{{$client->semail}}</td>
					<td>{{$client->dbirthdate}}</td>
					<td>
					
					<a class="btn btn-warning" href="{{ url('/clients/'.$client->id.'/edit') }}">
						Editar
					</a>	

					<form method="post" action="{{ url('/clients/'.$client->id) }}" style="display:inline">
						{{ csrf_field() }}
						{{method_field('DELETE')}}

						<button class="btn btn-danger" type="submit" onclick="return confirm('Esta seguro de Eliminar el Cliente?')">
							Eliminar
						</button>
						
					</form>

					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection