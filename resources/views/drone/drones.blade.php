@extends('layouts/master')

@section('content')

	<h1>Drone List</h1>
	<ul>

	@foreach($drones as $drone)
		<li>{{ $drone->nickname }}: {{ $drone->make }} - {{ $drone->model }} - {{ $drone->serial_number }} - {{ $drone->year }}</li>
	@endforeach

	</ul>

	<a href="{{ route('drones.create') }}">Add Drones</a>

@endsection