
@extends('layouts.app')

@section('content')
	<div class="container">
		Sección para editar datos
		<form action="{{ url('/clients/'.$client->id) }}" method="post">
			{{-- Función Laravel; proporciona una llave de acceso token de seguridad. cuando hagamos el envio a store el mismo nos deje entrar --}}
			{{ csrf_field() }}
			{{method_field('PATCH')}}

			@include('clients.formCli',['Modo'=>'editar'])

		</form>
	</div>
@endsection