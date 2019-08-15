
@extends('layouts.app')

@section('content')
	<div class="container">
		Sección para crear datos
		<form class="form-horizontal" action="{{ url('/clients') }}" method="post">
			{{-- Función Laravel; proporciona una llave de acceso token de seguridad. cuando hagamos el envio a store el mismo nos deje entrar --}}
			{{ csrf_field() }}

			@include('clients.formCli',['Modo'=>'crear'])

		</form>
	</div>
@endsection