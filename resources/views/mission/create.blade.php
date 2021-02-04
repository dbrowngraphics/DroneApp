@extends('layouts/master')

@section('content')

	<form action="{{ route('missions.store') }}" method="POST">
		@csrf

		<input type="text" name="mission_name" placeholder="Mission Name" required>

		<input type="text" name="location" placeholder="Location" required>

		<input type="date" name="start_date" required>

		<input type="date" name="end_date" required>

		<textarea rows="5" name="mission_details" placeholder="Mission Details"></textarea>


		<input type="submit">
	</form>

@endsection