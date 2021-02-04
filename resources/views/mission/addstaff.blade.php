@extends('layouts/master')

@section('content')

	<h1>Add Staff &amp; Drones to the Mission</h1>

	<form action="{{ route('missions.addstaffStore') }}" method="POST">
		@csrf

		<select name="mission_id" id="mission_id" required>
			<option value="0">Select A Mission</option>
		@foreach ($missions as $mission)
			<option value="{{ $mission->id }}">{{ $mission->mission_name }}</option>
		@endforeach
		</select>

		<select name="pilot_id" id="pilot_id" required>
			<option value="0">Selet A Pilot</option>
		@foreach ($pilots as $pilot)
			<option value="{{ $pilot->id }}">{{ $pilot->full_name }}</option>
		@endforeach
		</select>

		<select name="drone_id" id="drone_id" required>
			<option value="0">Selet A Drone</option>
		@foreach ($drones as $drone)
			<option value="{{ $drone->id }}">{{ $drone->nickname }}</option>
		@endforeach
		</select>


		<input type="submit">
	</form>

@endsection