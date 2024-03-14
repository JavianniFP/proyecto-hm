@extends('adminlte::page')

@section('title','Administrador')

@section('content_header')
	<h1>Historias médicas</h1>
@stop

@section('content')

	<p>Welcome to this beautiful admin panel.</p>
	<a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrar</a>
@stop




{{--@section('content_header')
	<h1>Dashboard</h1>
	<div>
        @livewire('hm.small-box')
    </div>
	--}}
	{{-- @section('content')
	<div>
		@livewire('balanza.info-box')
	</div>
	<!--p>Welcome to this beautiful admin panel.</p>
	<a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrar</a-->
@stop --}}