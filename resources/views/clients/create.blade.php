
@extends('layouts.app')

@section('content')
	<div class="container">

		{{-- Bloque de Mensajes de error arriba del formulario
		@if(count($errors)>0)
			<div class="alert alert-danger" role="alert">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif --}}
		Sección para crear datos
		<form class="form-horizontal" action="{{ url('/clients') }}" method="post">
			{{-- Función Laravel; proporciona una llave de acceso token de seguridad. cuando hagamos el envio a store el mismo nos deje entrar --}}
			{{ csrf_field() }}

			@include('clients.formCli',['Modo'=>'crear'])

		</form>
	</div>
@endsection