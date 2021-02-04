@extends('layouts/master')

@section('content')

	<h1>Pilots List</h1>
	<ul>

	@foreach($pilots as $pilot)
		<li>{{ $pilot->full_name }} - {{ $pilot->email }} - {{ $pilot->certification->certification_name }}</li>
	@endforeach

	</ul>

	<a href="{{ route('pilots.create') }}">Add Pilots</a>

@endsection