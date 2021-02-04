@extends('layouts/master')

@section('content')

	<form action="{{ route('drones.store') }}" method="POST">
		@csrf

		<input type="text" name="nickname" placeholder="Nickname" required>

		<input type="text" name="make" placeholder="Make" required>

		<input type="text" name="model" placeholder="Model" required>

		<input type="text" name="serial_number" placeholder="Serial Number" required>

		<input type="year" name="year" placeholder="Year" required>

		<input type="submit">
	</form>

@endsection