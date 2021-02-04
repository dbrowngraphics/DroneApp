@extends('layouts/master')

@section('content')

	<h1>Mission List</h1>
	<ul>

	@foreach($operations as $operation)
		<li>{{ $operation->mission_name }} - {{ $operation->location }} - {{ $operation->start_date }} - {{ $operation->end_date }}</li>

			<ul>
			@foreach($operation->missions as $mission)
				<li>{{ $mission->pilot->full_name }} : {{ $mission->drone->nickname }}</li>

			@endforeach
			</ul>
	@endforeach

	</ul>

	<a href="{{ route('missions.create') }}" class="mx-3">Add Missions</a>

	<a href="{{ route('missions.addstaff') }}" class="mx-3">Add Pilots &amp; Drones to a Mission</a>

@endsection